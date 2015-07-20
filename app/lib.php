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

    // Массив для соощений
    if (!isset($_SESSION['flash']['msg'])) {
        $_SESSION['flash']['msg'] = array();
    }

    addMessage('This is Danger Message', 'danger');
    addMessage('This is Info Message', 'info');
    addMessage('This is Warning Message', 'warning');

    if (count($_GET) > 0) {
        $page = array_flip($_GET)['']; // array('' => 'about'); $page = 'about'
        if (is_string($page) && $page !== '') {
            if (is_file('templates/page/' . $page . '.php')) {
                include 'templates/page/' . $page . '.php';
            }
        }
    }
}

function addMessage($text, $status = false)
{
    $msg = array('text' => $text, 'status' => $status);
    array_push($_SESSION['flash']['msg'], $msg);
}

function clearMessages()
{
    unset($_SESSION['flash']['msg']);
}

function getMessages()
{
    $out = $_SESSION['flash']['msg'];
    clearMessages();
    return $out;
}

function hasMessages()
{
    return !empty($_SESSION['flash']['msg']);
}