<?php

namespace app\controllers;

use app\models\User;
use app\classes\Flash;
use app\classes\BlockNoReason;
use app\models\activerecord\FindBy;
use app\interfaces\ControllerInterface;

class Login implements ControllerInterface
{
    public string $view;
    public array $data = [];

    public function __construct()
    {
        // BlockNoReason::block($this, ['store']);
    }
    
    public function index(array $args)
    {
        $this->view = 'login.php';
        $this->data = [
            'title' => 'Login'
        ];
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $user = new User;
        $userFound = $user->execute(new FindBy(field:'email', value:$email, fields:'firstName,lastName,password'));

        if (!$userFound) {
            Flash::set('login', 'Usuário ou senha inválidos');
            return redirect('/login');
        }

        $passwordMatch = password_verify($password, $userFound->password);

        if (!$passwordMatch) {
            Flash::set('login', 'Usuário ou senha inválidos');
            return redirect('/login');
        }

        unset($userFound->password);

        $_SESSION['user'] = $userFound;

        return redirect('/');
    }

    public function destroy(array $args)
    {
        // session_destroy();

        unset($_SESSION['user']);

        return redirect('/');
    }

    public function edit(array $args)
    {
        throw new \Exception('Method edit() is not implemented.');
    }

    public function show(array $args)
    {
        throw new \Exception('Method show() is not implemented.');
    }

    public function update(array $args)
    {
        throw new \Exception('Method update() is not implemented.');
    }
}
