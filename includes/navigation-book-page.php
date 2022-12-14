<header class="scrollEffect header header--book-page">
    <h1 class="logo">Book<span>Share</span></h1>

    <nav class="header__nav--list">
        <a href="">About</a>
        <a href="">Latest</a>
        <a href="">Reviews</a>
    </nav>

    <div class="cta">
        <?php if (isLoggedIn()) : ?>
            <a href="/book-share/logout.php" class="login__btn">logout</a>
            <a href="/book-share/admin/index.php" class="signup__btn">admin</a>
        <?php else : ?>
            <a href="login.php" class="login__btn">Login</a>
            <a href="login.php" class="signup__btn">Signup</a>
        <?php endif; ?>
    </div>

    <button class="humbuger">
        <span class="humbuger__bar bar--1"></span>
        <span class="humbuger__bar" bar--2></span>
        <span class="humbuger__bar" bar--3></span>
    </button>
</header>