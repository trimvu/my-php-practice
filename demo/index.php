<?php 

require 'functions.php';

// require 'router.php';

//  connect to our MySQL database.

// $dsn = data source name
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
// $statement = $pdo->prepare("select id from posts where id = 1");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

// dd($posts);

// class Person {
//     public $name;
//     public $age;
    
//     public function breathe() 
//     {
//         echo $this->name . " is breathing";
//     }
// }

// $person = new Person();

// $person->name = 'John Doe';
// $person->age = 25;

// $person->breathe();
