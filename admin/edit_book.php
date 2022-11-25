<?php require_once "includes/header.php"; ?>

<?php
$conn = getConn();

$categories = getAllCategories($conn);
$id = $_GET['id'];

if (isset($_GET['id'])) {
    $books = getBookById($conn, $id);
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

            <?php require_once "includes/form.php"; ?>

        </section>
        <!-- admin section wrapper end -->
    </div>
</main>
<!-- main section end -->

<?php include_once "includes/footer.php"; ?>