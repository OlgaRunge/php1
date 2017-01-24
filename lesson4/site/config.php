<?php
define('SITE_ROOT', __DIR__); //__DIR__ определяет пусть в файловой системе откуда запускается скрипт
define('WWW_ROOT', SITE_ROOT . '/www');
define('DATA_DIR', SITE_ROOT . '/data');
define('LIB_DIR', SITE_ROOT . '/lib');
define('TPL_DIR', SITE_ROOT . '/templates'); //file
define('LAYOUT', TPL_DIR . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'base.php'); //исп-м базовый layout
define('TITLE', 'Lesson 4!');
require_once(LIB_DIR . '/functions.php');