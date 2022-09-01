<?php

namespace App\Controllers\HomepageController;

require_once('src/config/DatabaseConnection.php');

class HomepageController
{
    public function execute()
    {
        require('views/home.html.twig');
    }
}
