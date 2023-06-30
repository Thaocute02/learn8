<?php
    require_once "pdo.php";
    $cateArrs = getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chỉnh sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="index.php" class="btn" style="margin-right: 5px"> < Back</a>
        <h3>Update Product</h3>
        <?php 
            $prodId = [
                'id' => $_GET['id']
            ];
            $prodArr = getOneProdData($prodId)[0];
            $cateId = [
                'id' => $prodArr['cateId']
            ];
            $cateArr = getOneData($cateId);
        ?>
        <form action="action-update.php?id=<?=$prodArr['prodId'] ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input required type="text" class="form-control" name="name" value="<?= $prodArr['prodName']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input required type="text" class="form-control" name="price" value="<?= $prodArr['prodPrice']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="cateId">
                <option selected value="<?= $cateArr[0]['id']?>"><?= $cateArr[0]['name']?></option>
                <?php 
                    foreach($cateArrs as $dataCate)
                        if($dataCate['id'] == $cateArr['id'])
                            continue;                             
                        else{?>
                            <option value="<?= $dataCate['id']?>"><?= $dataCate['name']?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>