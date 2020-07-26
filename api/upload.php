<?php
include_once "../base.php";

$table = $_POST['table'];
$db = new DB($table);

// var_dump($_POST);

if (!empty($_FILES['name']['tmp_name'])) {
    move_uploaded_file($_FILES['name']['tmp_name'], "../img/" . $_FILES['name']['name']);
}

$row=$db->find(['id'=>$_POST['id']]);
// var_dump($row);

$row['name']=$_FILES['name']['name'];

$db->save($row);

to("../admin.php?do=$table");
