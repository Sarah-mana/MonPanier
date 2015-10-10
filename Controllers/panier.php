<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../Models/functions.php';
require '../Models/Connect.php';

$db = Connect::getInstance();
var_dump($db);

get_articles($db, 15);

include 'Views/listeArticles.php';

