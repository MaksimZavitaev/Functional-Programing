<?php

define('BASE', __DIR__);

session_start();

include('app/config.php'); // Подключаем конфигурационный файл
include('app/lib.php'); // Подключаем файл библиотеки

bootstrap();