<?php

namespace app\classes;

class BlockPostRequest
{
    public static function block()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Você não pode fazer isso | <a href='/'>Home</a>";
            die();
        }
    }
}
