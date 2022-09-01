<?php 

namespace App\config\DatabaseConnection;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=blogdb_p5;charset=utf8', 'root', '');
        }

        return $this->database;
    }
}