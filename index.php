<?php

define('BASE', __DIR__);

session_start();

include ('libs/base.php');
include('app/config.php'); // Подключаем конфигурационный файл

\Base\bootstrap();