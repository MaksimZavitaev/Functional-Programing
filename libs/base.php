<?php

namespace Base;

function bootstrap()
{
    include('flash.php'); // Библиотека для работы с Flash-собщениями
    include('db.php'); // Библиотека для работы с БД

    \Flash\init(); // Инициализация массива сообщений
    \DB\connect(); // Выполняем подключение к БД

    \Flash\addMessage('This is Danger Message', 'danger');
    \Flash\addMessage('This is Info Message', 'info');
    \Flash\addMessage('This is Warning Message', 'warning');

    // TODO: Переписать роутер
    $controller = $_GET['c'];
    $action = $_GET['a'] ? 'action' . ucfirst($_GET['a']) : 'actionIndex';
    if ($controller) {
        if (is_file(BASE . '/app/controller/' . $controller . '.php')) {
            require(BASE . '/app/controller/' . $controller . '.php');
            $function = '\\Controller\\' . $action;
            $function();
        } else {
            require(TPL . '404.php');
        }
    } elseif (count($_GET) > 0) {
        $page = array_flip($_GET)['']; // array('' => 'about'); $page = 'about'
        if (is_string($page) && $page !== '') {
            require(TPL . 'page/' . $page . '.php');
        }
    } else {

    }
}