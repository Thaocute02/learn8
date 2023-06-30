<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteProData($id);
    header("Location: http://localhost/learn_php/product/index.php");
?>