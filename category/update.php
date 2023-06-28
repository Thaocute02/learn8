<?php
    require_once 'pdo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chỉnh sửa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h3>Update Category</h3>
        <?php 
            $data = [
                'id' => $_GET['id']
            ];
            $value = getOneData($data)['0'];
        ?>
        <form action="./action-edit.php?id=<?=$data['id'] ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $value['name']; ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>