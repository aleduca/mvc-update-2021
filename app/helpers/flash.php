<?php

use app\classes\Flash;

function flash($key)
{
    $flash = Flash::get($key);

    if (isset($flash['message'])) {
        return "<span class='alert alert-{$flash['alert']}'>{$flash['message']}</span>";
    }
}
