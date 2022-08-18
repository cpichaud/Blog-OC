<?php

//Db connection

require 'connectionDb.php';

// $pdo->exec("CREATE TABLE IF NOT EXISTS `comments` (
//     `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL ,
//     `content` text NOT NULL,
//     `title` varchar(255) NOT NULL,
//     `created_at` datetime NOT NULL,
//     `date_update` datetime NOT NULL,
//     `user_id` INT NOT NULL,
//   ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;");

$pdo->exec("CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    irstame varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    role INT NOT NULL DEFAULT '1',
    created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

echo 'yes c good';