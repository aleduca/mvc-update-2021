<?php

namespace app\controllers;

use app\models\User;
use app\classes\Flash;
use app\classes\Validate;
use app\models\activerecord\Insert;

class SignUp
{
    public string $view;
    public array $data = [];

    public function index()
    {
        $this->view = 'signup.php';

        $this->data = [
            'title' => 'SignUp'
        ];
    }

    public function store()
    {
        $validate = new Validate();
        $validate->handle([
            'firstName' => [REQUIRED],
            'lastName' => [REQUIRED],
            'email' => [REQUIRED,EMAIL],
            'password' => [REQUIRED,MAXLEN.':5'],
        ]);

        if ($validate->errors) {
            return redirect('/signup');
        }

        $user = new User;
        $user->firstName = $validate->data['firstName'];
        $user->lastName = $validate->data['lastName'];
        $user->email = $validate->data['email'];
        $user->password = password_hash($validate->data['password'], PASSWORD_DEFAULT);
        $created = $user->execute(new Insert);

        if ($created) {
            Flash::set('created', 'Cadastrado com sucesso', 'success');
            return redirect('/signup');
        }
    }
}
