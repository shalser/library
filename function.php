<?php

const DBNAME = 'library';
const HOST = 'localhost';
const USER = 'root';
const PASS = 'root';


function getTypeByID($data): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT type FROM type_materials WHERE id = (:type)";
    $statement = $db->prepare($sql);
    $statement->bindValue(":type", $data);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoryByID($data): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT category FROM material_category WHERE id = (:category)";
    $statement = $db->prepare($sql);
    $statement->bindValue(":category", $data);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function addMaterials($type, $category, $title, $authors, $description)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO materials (type, category, title, authors, description) VALUES 
                                  (:type, :category, :title, :authors, :description)";
    $statement = $db->prepare($sql);
    $statement->bindValue(":type", $type);
    $statement->bindValue(":category", $category);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":authors", $authors);
    $statement->bindValue(":description", $description);
    $statement->execute();
    header('Location: create-material.php');
    exit();
}

function addTags($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO tags (title) VALUES (:tags);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: create-tag.php');
    exit();
}

function addCategory($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO category (title) VALUES (:category);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: create-category.php');
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

function getMaterials(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM materials";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getTags(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM tags";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getCategories(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM category";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}