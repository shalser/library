<?php

define('HOST', 'localhost');
define('DBNAME', 'shalser82_shestakov');
define('USER', 'shalser82');
define('PASS', 'vika2004');


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
    header('Location: /testwork/create-material.php');
    exit();
}

function addTags($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO tags (title) VALUES (:tags);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /testwork/create-tag.php');
    exit();
}

function addType($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO type_materials (type) VALUES (:type);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /testwork/create-type.php');
    exit();
}

function addAuthor($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO authors (author) VALUES (:author);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /testwork/create-authors.php');
    exit();
}

function addCategory($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO category (title) VALUES (:category);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /testwork/create-category.php');
    exit();
}

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

function getMaterialsByID($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM materials WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
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

function getLinks(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM links";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAuthors(): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT * FROM authors";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function deleteCategory($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "DELETE FROM category WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /testwork/list-category.php');
    exit();
}

function deleteTag($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "DELETE FROM tags WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /testwork/list-tag.php');
    exit();
}

function deleteType($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "DELETE FROM type_materials WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /testwork/list-type.php');
    exit();
}

function deleteMaterials($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "DELETE FROM materials WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /testwork/');
    exit();
}

