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

function bootstrap()
{
    dbConnect(); // Выполняем подключение к БД

    $messages = array(
        array(
            'status' => 'warning',
            'text' => 'This is Warning'
        ),
        array(
            'status' => 'info',
            'text' => 'This is Info'
        ),
    );

    if (count($_GET) > 0) {
        $page = array_flip($_GET)['']; // array('' => 'about'); $page = 'about'
        if (is_string($page) && $page !== '') {
            if (is_file('templates/page/' . $page . '.php')) {
                include 'templates/page/' . $page . '.php';
            }
        }
    }
}