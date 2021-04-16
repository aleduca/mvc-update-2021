<?php


namespace app\core;

class FolderExtract
{
    public static function extract($uri):string
    {
        $folder = CONTROLLER_FOLDER_DEFAULT;

        if (isset($uri[0]) and $uri[0] !== '') {
            return is_dir(strtolower(ROOT.'/'.CONTROLLER_PATH.$uri[0])) ? $uri[0] : '';
        }

        return $folder;
    }
}
