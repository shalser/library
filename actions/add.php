<?php require __DIR__ . '/../function.php';

$id = $_POST['id'];
$type = $_POST['type'];

//print_r($id);
//print_r($type);
//die();

addTagsCom($id, $type);

function addTagsCom($id, $type)
{
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $sql = "INSERT INTO compliance_table_material_type (id, type) VALUES (:id, :type);";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->bindValue(":type", $type);
    $statement->execute();
    header('Location: /create.php');
    exit();
}


