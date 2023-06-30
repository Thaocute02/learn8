<?php
    require_once "pdo.php";
    require_once "../category/pdo.php";
    $cate = getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thêm mới sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="index.php" class="btn" style="margin-right: 5px"> < Back</a>
        <h3>Create New Product</h3>
        <form action="action-create.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input required type="text" class="form-control" name="name" placeholder="Enter name...">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input required type="text" class="form-control" name="price" placeholder="Enter price...">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="cateId">
                <?php 
                    foreach($cate as $value):
                ?>
                <option value="<?=$value['id']?>"><?= $value['name'] ?></option>
                <?php
                    endforeach;
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</body>
</html>
