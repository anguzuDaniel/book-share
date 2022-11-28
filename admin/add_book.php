<?php require_once "includes/header.php"; ?>

<?php
isLoggedIn();
$conn = getConn();

$categories = getAllCategories($conn);

$title = "";
$author = "";

// upload book cover/image
$cover = "";

// upload pdf/ book soft copy
$upload_pdf = '';

$book_description = '';
$category = '';

if (isset($_POST['submit'])) {
    $title = $_POST['book_title'];
    $author = $_POST['book_author'];

    // upload book cover/image
    $cover = $_FILES['book_cover']['name'];
    $temp_cover = $_FILES['book_cover']['tmp_name'];

    // upload pdf/ book soft copy
    $allowed = array('pdf');
    $temp_file = explode('.', $_FILES['book_pdf']['name']);
    $extension = end($temp_file);
    $upload_pdf = $_FILES['book_pdf']['name'];

    $book_description = $_POST['book_description'];
    $category = $_POST['book_category'];

    $errors = formValidation($conn, $title, $author, $cover, $book_description, $category);

    if (empty($errors)) {
        $stmt = addBook($conn, $title, $author, $cover, $upload_pdf, $book_description, $category);

        move_uploaded_file($temp_cover, "../images/$cover");
        move_uploaded_file($_FILES['book_pdf']['tmp_name'], "../uploads/pdf/$upload_pdf");


        if (!$stmt) {
            $conn->errorInfo();
        }
    } else {
        $conn->errorInfo();
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
            <!-- form start -->
            <?php include_once "./includes/form.php"; ?>
            <!-- form end -->
        </section>
        <!-- admin section wrapper end -->
    </div>
</main>
<!-- main section end -->

<?php include_once "includes/footer.php"; ?>