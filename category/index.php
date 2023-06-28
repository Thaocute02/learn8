<?php
    require_once "pdo.php";
    $categories = getALL();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div>
            <h3>List Categories</h3>
            <a href="add.php" class="btn btn-success" style="margin-right: 5px;">Create</a>
        </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stt = 1;
                foreach($categories as $value): ?>
            <tr>
                <td><?= $value['id'];?></td>
                <td><?= $value['name'];?></td>
                <td>
                    <form id="delete_<?= $value['id'] ?>" action="delete.php" method="POST" style="display:flex">
                        <a href="./update.php?id=<?= $value['id']?>" class="btn btn-dark" style="margin-right: 5px">Update</a>
                        <input type="hidden" value="<?= $value['id'] ?>" name="id">
                        <a class="btn btn-dark" onclick="confirmDelete(<?= $value['id'] ?>)">Delete</a>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>  
    </div>
    <script>
    function confirmDelete(id) {
        let result = confirm('Are you sure?');
        if (result === true) {
            document.getElementById(`delete_${id}`).submit();
        }
    }
</script>
</body>
</html>