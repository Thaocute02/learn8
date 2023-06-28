<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteData($id);
    header("Location: http://localhost/learn_php/category/index.php");
?>