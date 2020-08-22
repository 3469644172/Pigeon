<?php
error_reporting(E_ALL);
define("ROOT", str_replace("\\", "/", __DIR__));
if(!file_exists(ROOT . "/pigeon/config.php")) {
    header("Location: /install.php");
	exit;
}
include(ROOT . "/pigeon/loader.php");
