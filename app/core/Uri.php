<?php

namespace app\core;

class Uri
{
    public static function uri()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return explode('/', ltrim($uri, '/'));
    }

    public static function uriExist($uri, $index){
        if(isset($uri[$index]) and $uri[$index] !== ''){
            return $uri[$index];
        }
    }

}
