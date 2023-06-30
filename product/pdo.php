<?php

$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'cate';
$DB_USER = 'root';
$DB_PASS = '';

try {
    $conn = new PDO("{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die('Connect error: ' . $e->getMessage());
}

function prepareSQL($sql)
{
    global $conn;
    return $conn->prepare($sql);
}
    function getProData(){
        $sql = "SELECT * FROM product INNER JOIN categories ON product.cateid = categories.id";
        $select = prepareSQL($sql);
        $select->execute();
        return $select->fetchAll();
    }

    function getOneProData($data){
        $sql = "SELECT * FROM product WHERE proid = :id";
        $select = prepareSQL($sql);
        $select->execute($data);
        return $select->fetchAll();
    }

    function createNewProData($data){
        $sql = "INSERT INTO product VALUES (:proid, :proname, :prodprice, :cateid)";
        $create = prepareSQL($sql);
        $create->execute($data);
    }

    function updateProData($data){
        $sql = "UPDATE product SET proname = :prname, proprice = :proprice, cateid = :cateid  WHERE proid = :id";
        $update = prepareSQL($sql);
        $update->execute($data);
    }
    function deleteProData($data){
        $sql = "DELETE FROM product WHERE proid = :id";
        $update = prepareSQL($sql);
        $update->execute($data);
    }
?>