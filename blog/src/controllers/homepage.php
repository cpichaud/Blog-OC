<?php

namespace Application\Controllers\Homepage;

require_once('src/lib/database.php');
require_once('src/model/post.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Post\PostRepository;

class Homepage
{
    public function execute()
    {

        //$postRepository->connection = new DatabaseConnection();

        require('views/homepage.php');
    }
}
