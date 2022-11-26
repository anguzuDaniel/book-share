<?php require_once "includes/header.php"; ?>

<?php
$conn = getConn();

$categories = getAllCategories($conn);
$id = $_GET['id'];

if (isset($_GET['id'])) {
    $books = getBookById($conn, $id);

    foreach ($books as $book) {
        $book_title = $book['name'];
        $book_author = $book['author'];
        $book_cover = $book['image'];
        $upload_pdf = $book['file'];
        $book_description = $book['description'];
        $book_category = $book['category'];
    }

    if (!$books) {
        echo "Book not found!";
    }
} else {
    echo "Book doesn't exist";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];

    // upload book cover/image
    $book_cover = $_FILES['book_cover']['name'];
    $temp_cover = $_FILES['book_cover']['tmp_name'];

    // upload pdf/ book soft copy
    $allowed = array('pdf');
    $temp_file = explode('.', $_FILES['book_pdf']['name']);
    $extension = end($temp_file);
    $upload_pdf = $_FILES['book_pdf']['name'];

    $book_description = $_POST['book_description'];
    $book_category = $_POST['book_category'];

    $errors = formValidation($conn, $book_title, $book_author, $book_cover, $book_description, $book_category);

    if (empty($errors)) {
        $stmt = updateBook($conn, $id, $book_title, $book_author, $book_cover, $upload_pdf, $book_description, $book_category);

        move_uploaded_file($temp_cover, "../images/$book_cover");
        move_uploaded_file($_FILES['book_pdf']['tmp_name'], "../uploads/pdf/$upload_pdf");


        if ($stmt) {
            $id = $_POST['id'];

            header("Location: read_book.php");
        } else {
            $conn->errorInfo();
        }
    }
}

?>

<!-- main section start -->
<main class="admin__wrapper">
    <?php include_once "includes/sidebar.php" ?>

    <div class="admin__container">
        <?php require_once "includes/navigation.php"; ?>

        <!-- admin section wrapper start -->
        <section class="admin__content">
            <div class="heading | admin__content--heading">
                <h1>Add new Book to the library.<h1>
                        <hr>
            </div>

            <?php if (!$id) : ?>
                <h1>No book with that id found, please provide a valid id in the record.</h1>
            <?php else : ?>
                <?php require_once "includes/form.php"; ?>
            <?php endif; ?>
        </section>
        <!-- admin section wrapper end -->
    </div>
</main>
<!-- main section end -->

<?php include_once "includes/footer.php"; ?>