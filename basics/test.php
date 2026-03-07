<?php

require('functions.php');


//connect to database
$dns = "mysql:host=localhost;port=3306;dbname=posts;user=root;chaset=utf8mp4";

$pdo= new PDO($dns);

$statment = $pdo->prepare("select * from posts");
$statment->execute();

$posts = $statment->fetchAll(PDO::FETCH_ASSOC);



dd($posts);
