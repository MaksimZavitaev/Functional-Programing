<?php

namespace DB;

function connect()
{
    global $db;
    $link = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name'], $db['port']);

    if (!$link) {
        \Flash\addMessage('Ошибка подключения к БД', 'danger');
    }
}