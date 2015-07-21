<?php

define('BASE', __DIR__);
define('TPL', __DIR__ . '/templates/');

session_start();

include ('libs/base.php');
include('app/config.php'); // Подключаем конфигурационный файл

\Base\bootstrap();