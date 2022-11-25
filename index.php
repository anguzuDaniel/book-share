<?php require_once "includes/header.php"; ?>

<?php

$conn = getConn();

$books = getBooksLimit($conn, 6);

$categories = getAllCategories($conn);

$count = 0;


?>

<main>
    <section class="hero">
        <div class="hero__image"></div>
        <div class="hero__main">

            <!-- navigation bar | start -->
            <?php require_once "includes/navigation.php"; ?>
            <!-- navigation bar | end -->

            <!-- hero section | start -->
            <?php require_once "includes/hero.php"; ?>
            <!-- hero section | end -->

        </div>
    </section>

    <nav class="navigation__secondary">
        <ul>
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href=""><?= $category['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- book section | start -->
    <section class="book">
        <h1 class="book--title">Best Sellers</h1>

        <div class="book__wrapper">
            <?php require_once "includes/books.php"; ?>
        </div>

        <p class="book__more"><a href="all_books.php">More books</a></p>
    </section>
    <!-- book section | start -->

    <!-- About section | start -->
    <section class="about">
        <div class="about__image"></div>
        <div class="about__text">
            <h1 class="about__title">What we do?</h1>
            <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint saepe animi nesciunt nobis consequuntur autem corporis repellendus sequi ad sed,</p>
        </div>
    </section>
    <!-- About section | start -->


    <!-- review carousel | start -->
    <?php include_once "includes/review.php"; ?>
    <!-- review carousel | end -->

    <section class="user">
        <div class=" user__image">
        </div>

        <div class="user__review">
            <h1>Review</h1>

            <form class="user__form">
                <div class="user__form--row">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                </div>
                <textarea name="" id="" cols="30" rows="10" style="resize:none;" placeholder="Review.."></textarea>
                <button class="btn">review</button>
            </form>
        </div>
    </section>
</main>
<?php require_once "includes/footer.php"; ?>