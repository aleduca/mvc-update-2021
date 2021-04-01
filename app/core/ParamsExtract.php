<?php

namespace app\core;

class ParamsExtract
{
    public static function extract($sliceIndexStartFrom)
    {
        $uri = Uri::uri();
        $countUri = count($uri);

        return array_slice($uri, $sliceIndexStartFrom, $countUri);
    }
}
