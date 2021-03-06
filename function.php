<?php

const DBNAME = 'library';
const HOST = 'localhost';
const USER = 'root';
const PASS = 'root';


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
    header('Location: /create-material.php');
    exit();
}

//function addTags($data)
//{
//    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
//    $sql = "INSERT INTO compliance_tags_material_id (title) VALUES (:tags);";
//    $statement = $db->prepare($sql);
//    $statement->execute($data);
//    header('Location: /create-tag.php');
//    exit();
//}

function addTags($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO tags (tags) VALUES (:tags);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /create-tag.php');
    exit();
}

//function addTagsToMaterial($data)
//{
//    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
//    $sql = "INSERT INTO tags (tags) VALUES (:tags);";
//    $statement = $db->prepare($sql);
//    $statement->execute($data);
//
//    header('Location: http://test-shealvi/view-material.php/%D0%9F%D1%83%D1%82%D1%8C%20%D0%B4%D0%B6%D0%B5%D0%B4%D0%B0%D1%8F');
//    exit();
//}

function addType($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO type_materials (type) VALUES (:type);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /create-type.php');
    exit();
}

function addAuthor($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO authors (author) VALUES (:author);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /create-authors.php');
    exit();
}

function addCategory($data)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO material_category (category) VALUES (:category);";
    $statement = $db->prepare($sql);
    $statement->execute($data);
    header('Location: /create-category.php');
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

function getTagsByMaterialsID($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT title FROM compliance_tags_material_id WHERE material_id = (:id)";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getLinksByMaterialsID($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "SELECT link FROM compliance_links_material_id WHERE material_link = (:id)";
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
    $sql = "SELECT * FROM compliance_links_material_id";
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
    $sql = "DELETE FROM material_category WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /list-category.php');
    exit();
}

function deleteTag($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "DELETE FROM tags WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /list-tag.php');
    exit();
}

//function deleteTag($id): array
//{
//    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
//    $sql = "DELETE FROM compliance_tags_material_id WHERE id = :id";
//    $statement = $db->prepare($sql);
//    $statement->bindValue(":id", $id);
//    $statement->execute();
//    header('Location: /list-tag.php');
//    exit();
//}

function deleteMaterials($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "DELETE FROM materials WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /');
    exit();
}

function editMaterial($id): array
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "UPDATE FROM materials WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    header('Location: /');
    exit();
}

