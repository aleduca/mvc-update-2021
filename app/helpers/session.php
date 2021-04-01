<?php

function welcome($index)
{
    if (isset($_SESSION[$index])) {
        $user = $_SESSION[$index];

        return $user->firstName.' '.$user->lastName . '| <a href="/login/destroy">Logout</a>';
    }

    return 'Visitante';
}
