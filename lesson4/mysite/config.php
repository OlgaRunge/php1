<?php

define('SITE_ROOT', __DIR__);
define('WWW_ROOT',  SITE_ROOT . DIRECTORY_SEPARATOR . 'www');

define('DATA_DIR',  SITE_ROOT . DIRECTORY_SEPARATOR . 'data');
define('LIB_DIR',   SITE_ROOT . DIRECTORY_SEPARATOR . 'lib');
define('TPL_DIR',   SITE_ROOT . DIRECTORY_SEPARATOR . 'templates');
define('LAY_DIR',   TPL_DIR   . DIRECTORY_SEPARATOR . 'layouts');

define('IMG_DIR',   WWW_ROOT  . DIRECTORY_SEPARATOR . 'img');
define('CSS_DIR',   WWW_ROOT  . DIRECTORY_SEPARATOR . 'css');

define('LAYOUT',    LAY_DIR   . DIRECTORY_SEPARATOR . 'magaz3.php');
define('TITLE',     'DZ.Lesson 4!');
define('STYLE',     CSS_DIR   . DIRECTORY_SEPARATOR . 'style.css');

require_once(DATA_DIR . '/dataconn.php');
require_once(LIB_DIR  . '/functions.php');