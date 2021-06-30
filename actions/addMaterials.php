<?php require __DIR__ . '/../function.php';
$type = getTypeByID($_POST['type_id']);
$type = $type[0]['type'];
$category = getCategoryByID($_POST['category_id']);
$category = $category[0]['category'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$description = $_POST['description'];
addMaterials($type, $category, $title, $authors, $description);

