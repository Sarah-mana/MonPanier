<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require (dir.'Models/functions.php');
require (dir.'Models/Connect.php');

$db = Connect::getInstance();




include 'Views/listeArticles.php';

