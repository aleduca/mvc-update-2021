<?php

namespace app\controllers;

use app\models\activerecord\FindBy;
use app\models\User as UserModel;
use Exception;

class User
{
    public string $view;
    public array $data = [];

    public function show(array $args)
    {
        $user = (new UserModel)->execute(new FindBy(field:'id', value:$args[0], fields:'id,firstName,lastName'));

        if (!$user) {
            throw new Exception('Usuário não encontrado');
        }

        $this->view = 'user.php';
        $this->data = [
            'title' => 'Dados do user',
            'user' => $user
        ];
    }
}
