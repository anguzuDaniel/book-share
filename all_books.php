<?php require_once "includes/header.php"; ?>

<?php

$conn = getConn();

$books = getAllBooks($conn);

$categories = getAllCategories($conn);

?>
<?php require_once "includes/navigation-book-page.php"; ?>

<section class="all_books">

    <section class="book">
        <h1 class="book--title">All books</h1>

        <div class="book__wrapper">
            <!-- all books display | start -->
            <?php require_once "includes/books.php"; ?>
            <!-- all books display | start -->
        </div>

        <p class="book__more"><a href="#">More books</a></p>
    </section>

    <aside>
        <h1>Categories</h1>

        <ul>
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href=""><?= $category['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>

</section>

<?php require_once "includes/footer.php"; ?>