<?php include_once "includes/header.php"; ?>
<?php
isLoggedIn();
$conn = getConn();

$books = getAllBooks($conn);

$categories = getAllCategories($conn);

?>

<?php include_once "includes/sidebar.php" ?>

<main class="admin__wrapper">

    <div class="admin__container">
        <?php require_once "./includes/navigation.php"; ?>


        <section class="admin__content">
            <div class="admin__content--intro">

                <div class="admin__cards">

                    <!-- admin information cards | start -->
                    <?php include_once "includes/cards.php"; ?>
                    <!-- admin information cards | end -->

                </div>

                <div class="admin__table">

                    <!-- table | start -->
                    <?php include_once "includes/table.php"; ?>
                    <!-- table | start -->

                </div>
            </div>
        </section>
    </div>

</main>
<?php require_once "./includes/footer.php"; ?>