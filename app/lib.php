<?php

defined('BASE') OR exit('Not Allowed Access');

function dbConnect()
{
    global $db;
    $link = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name'], $db['port']);

    if (!$link) {
        die('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
}