<?php
include 'config.php';

$id = intval($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $cost = $_POST['cost'];

    $sql = "UPDATE products SET name='$name', cost='$cost' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: read.php"); 
        exit();
    } else {
        $error = "Xatolik yuz berdi!";
    }
}

$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">Edit Product</h1>

    <?php if(isset($error)) { ?>
        <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST" class="w-50 mx-auto">
        <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cost:</label>
            <input type="text" name="cost" class="form-control" value="<?php echo $row['cost']; ?>" required>
        </div>

        <div class="text-center">
            <input type="submit" value="Update" class="btn btn-primary">
            <a href="read.php" class="btn btn-secondary ms-2">Back</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>