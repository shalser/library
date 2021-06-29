<?php

const DBNAME = 'library';
const HOST = 'localhost';
const USER = 'root';
const PASS = 'root';


function addMaterial($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO material_category (category) VALUES (:material)";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: create-tag.php');
    exit();
}

function getTypes(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM type_materials";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getCategory(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM material_category";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}