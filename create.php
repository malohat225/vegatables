<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO products (name, cost)
            VALUES ('$name', '$cost')";

    if ($conn->query($sql)) {
        header("Location: read.php");
        exit();
    } else {
        echo "Xatolik!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-4">Add Product</h1>

<form method="POST" class="w-50 mx-auto">
        <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cost:</label>
            <input type="text" name="cost" class="form-control" required>
        </div>

        <div class="text-center">
            <input type="submit" value="Create" class="btn btn-success">
            <a href="read.php" class="btn btn-secondary ms-2">Back</a>
        </div>
    </form>

<a href="read.php">Back</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>