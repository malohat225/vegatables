<?php
include 'config.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM products WHERE id = $id";

if ($conn->query($sql)) {
    header("Location: read.php");
    exit();
} else {
    echo "Xatolik!";
}
?>