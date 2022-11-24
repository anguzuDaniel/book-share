<?php require_once "includes/header.php"; ?>

<?php

$conn = getConn();

$books = getBooksLimit($conn, 6);

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

    <!-- book section | start -->
    <section class="book">
        <h1 class="book--title">Best Sellers</h1>

        <div class="book__wrapper">
            <?php require_once "includes/books.php"; ?>
        </div>

        <p class="book__more"><a href="#">More books</a></p>
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


    <!-- sliding cards section -->
    <section class="reviews sliding--cards section--hidden section" id="projects">
        <div class="review--slider">
            <div class="reviews__cards review--slide--active reviews__card--1">
                <article class="card">

                    <div class="card__description">

                        <img src="images/images (43).jpeg" alt="" srcset="" class="review--img" />
                        <div class="card__description__name">
                            <div class="star">
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                            </div>
                            <h3>Anguzu Daniel</h3>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Voluptates tenetur quo est rem beatae, rerum, voluptas facere
                        expedita commodi eum.
                    </p>
                </article>

                <article class="card">
                    <div class="card__description">

                        <img src="images/images (1).png" alt="" srcset="" class="review--img" />
                        <div class="card__description__name">
                            <div class="star">
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star-half-stroke"></em>
                                <em class="fa fa-star-half-stroke"></em>
                            </div>
                            <h3>Kenyi Jonathan</h3>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Voluptates tenetur quo est rem beatae, rerum, voluptas facere
                        expedita commodi eum.
                    </p>
                </article>
            </div>

            <div class="reviews__cards reviews__card--2">
                <article class="card">
                    <div class="card__description">

                        <img src="images/images (70).jpeg" alt="" srcset="" class="review--img" />
                        <div class="card__description__name">
                            <div class="star">
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star-half-stroke"></em>
                            </div>
                            <h3>Jackson Paul</h3>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Voluptates tenetur quo est rem beatae, rerum, voluptas facere
                        expedita commodi eum.
                    </p>
                </article>

                <article class="card">
                    <div class="card__description">

                        <img src="images/images (69).jpeg" alt="" srcset="" class="review--img" />
                        <div class="card__description__name">
                            <div class="star">
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star"></em>
                                <em class="fa fa-star-half-stroke"></em>
                                <em class="fa fa-star-half-stroke"></em>
                            </div>
                            <h3>Opio Danson</h3>
                        </div>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Voluptates tenetur quo est rem beatae, rerum, voluptas facere
                        expedita commodi eum.
                    </p>
                </article>
            </div>
        </div>

        <div class="reviews__cards reviews__card--3">
            <article class="card">
                <div class="card__description">

                    <img src="images/images (91).jpeg" alt="" srcset="" class="review--img" />
                    <div class="card__description__name">
                        <div class="star">
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                        </div>
                        <h3>Linda Zani</h3>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Voluptates tenetur quo est rem beatae, rerum, voluptas facere
                    expedita commodi eum.
                </p>
            </article>


            <article class="card">
                <div class="card__description">

                    <img src="images/download (2).jpeg" alt="" srcset="" class="review--img" />
                    <div class="card__description__name">
                        <div class="star">
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                            <em class="fa fa-star"></em>
                        </div>
                        <h3>Nandi Zape</h3>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Voluptates tenetur quo est rem beatae, rerum, voluptas facere
                    expedita commodi eum.
                </p>
            </article>
        </div>
        </div>

        <div class="slide--btns">
            <div class="left--btn btn">
                <button id="left--btn">
                    <em class="fa fa-arrow-left"></em>
                </button>
            </div>
            <div class="right--btn btn">
                <button id="right--btn">
                    <em class="fa fa-arrow-right"></em>
                </button>
            </div>
        </div>
    </section>

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