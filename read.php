<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Products</title>
</head>
<body>
    <table>
<div class="container my-5">
    <h1 class="text-center mb-4">Products List</h1>

    <div class="mb-3 text-center">
        <a href="create.php" class="btn btn-success">Add New Product</a>
    </div>

    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="table-dark">


    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Cost</th>
        <th>Actions</th>
    </tr>
</thead>
    <?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['cost']}</td>
                <td>
                    <a href='update.php?id={$row['id']}' class='edit'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='delete'>Delete</a>
                </td>
            </tr>";
        }
    }
    ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>