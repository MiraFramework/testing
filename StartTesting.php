<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$_SERVER['DOCUMENT_ROOT'] = realpath('');

require 'vendor/autoload.php';
require 'application/providers/routes/autoload.php';
