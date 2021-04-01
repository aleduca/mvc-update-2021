<?php

function formatException(Throwable $throw)
{
    var_dump("Erro no arquivo {$throw->getFile()} na linha {$throw->getLine()}: {$throw->getMessage()}");
}
