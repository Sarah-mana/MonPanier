<?php

define('dir',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define('http',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));

require(dir.'Controllers/panier.php');