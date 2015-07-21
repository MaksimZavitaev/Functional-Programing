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
    if (count($_GET) > 0) {
        $page = array_flip($_GET)['']; // array('' => 'about'); $page = 'about'
        if (is_string($page) && $page !== '') {
            if (is_file('templates/page/' . $page . '.php')) {
                include('templates/page/' . $page . '.php');
            }
        }
    }
}