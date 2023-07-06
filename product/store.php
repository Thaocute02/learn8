<?php
    require_once 'pdo.php';
    $data = [
        'proid' => '',
        'proname' => $_POST['name'],
        'proprice' => $_POST['price'],
        'cateid' => $_POST['cateid']
    ];
    createNewProdData($data);
    header("Location: http://localhost/learn_php/product/index.php");
?>