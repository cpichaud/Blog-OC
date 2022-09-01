<?php

require '../vendor/autoload.php';

//require_once('../src/Controllers/home.html.php');

if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

if($url == ''){
    require '../src/views/home.php';
}
