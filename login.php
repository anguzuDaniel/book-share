<?php require_once "includes/header.php"; ?>

<?php
$conn = getConn();



?>
<!-- main page wrapper -->
<main class="signup" method="post">

    <!-- signup form -->
    <div class="form">
        <div class="form__controls">
            <div class="btn__control">
                <button class="btn btn__control--signup" id="showSignup">
                    Sign Up
                </button>
            </div>

            <div class="btn__control">
                <button class="btn btn__control--login" id="showLogin">
                    Sign In
                </button>
            </div>
        </div>

        <div class="form__wrapper">
            <?php require_once "includes/signup_form.php" ?>

            <?php require_once "includes/login_form.php"; ?>
        </div>
    </div>
</main>