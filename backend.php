<?php

//$a = $_POST['one'];
//$b = $_POST['two'];
//
//echo $a + $b;

$data = [
    'title' => $_POST['title'],
    'content' => $_POST['content']
];


    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO test (one, two) VALUES (:one, :two)";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    exit();


//$data1 = $_POST['data1'];
//$data2 = $_POST['data2'];

//$data1 = $_GET['one'];
//$data2 = $_GET['two'];


//add($data1, $data2);
//
//const DBNAME = 'test';
//const HOST = 'localhost';
//const USER = 'root';
//const PASS = 'root';
//
//function add($data1, $data2)
//{
//    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
//    $sql = "INSERT INTO test (one, two) VALUES
//                                  (:one, :two)";
//    $statement = $db->prepare($sql);
//    $statement->bindValue(":one", $data1);
//    $statement->bindValue(":two", $data2);
//    $statement->execute();
////    header('Location: /index.html');
//    exit();
//}







