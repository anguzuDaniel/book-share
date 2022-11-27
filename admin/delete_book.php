<?php require_once "includes/header.php"; ?>

<?php
isLoggedIn();
$conn = getConn();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $books = getBookById($conn, $id);

    deleteBookById($conn, $id);
}

?>

<?php foreach ($books as $book) : ?>
    <p><?= $book['name']; ?> has been deleted..</p>
<?php endforeach; ?>

<?php include_once "includes/footer.php"; ?>