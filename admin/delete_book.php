<?php require_once "includes/header.php"; ?>

<?php

$conn = getConn();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    deleteBookById($conn, $id);
}

?>

<?php include_once "includes/footer.php"; ?>