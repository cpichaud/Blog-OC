<?php

require '../vendor/autoload.php';

//require_once('../src/Controllers/home.html.php');

require '../src/views/home.php';

if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

