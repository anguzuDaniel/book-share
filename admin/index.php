<?php
require_once "includes/header.php";

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

                    <div class="admin__card admin__card--articles">
                        <div class="admin__card--icon">
                            <em class="fa-regular fa-folder-open"></em>
                        </div>
                        <p class="admin__card--num"><?php echo count($books); ?></p>
                        <h3 class="admin__card--heading">Book</h1>
                    </div>

                    <div class="admin__card admin__card--categories">
                        <div class="admin__card--icon">
                            <em class="fa-solid fa-diagram-project"></em>
                        </div>
                        <p class="admin__card--num"><?php echo count($categories); ?></p>
                        <h3 class="admin__card--heading">Categories</h1>
                    </div>

                    <div class="admin__card admin__card--vistors">
                        <div class="admin__card--icon">
                            <em class="fa-solid fa-users-line"></em>
                        </div>
                        <p class="admin__card--num">39</p>
                        <h3 class="admin__card--heading">Vistors</h1>
                    </div>
                </div>

                <div class="admin__table">

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Author</td>
                                <td>Image</td>
                                <td>File</td>
                                <td>Description</td>
                                <td>Category</td>
                                <td colspan="2">Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($books as $book) : ?>
                                <tr>
                                    <td><?= substr($book['name'], 0, 5); ?>..</td>
                                    <td><?= substr($book['author'], 0, 6); ?>..</td>
                                    <td><?= $book['image']; ?></td>
                                    <td><?= $book['file']; ?></td>
                                    <td><?= substr($book['description'], 0, 10); ?>..</td>
                                    <td><?= $book['category']; ?></td>
                                    <td>
                                        <a href="edit_book.php?id=<?= $book['id']; ?>" class="edit__icon">
                                            <em class="fa-regular fa-pen-to-square"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete_book.php?id=<?= $book['id']; ?>" class="delete__icon">
                                            <em class="fa-regular fa-trash-can"></em>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                </div>
            </div>


        </section>
    </div>
    </div>
</main>
<?php require_once "./includes/footer.php"; ?>