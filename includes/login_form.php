<?php
if (isset($_POST['signin'])) {
    $errors = validationUserLoginForm($_POST['login_email'], $_POST['login_password']);

    if (!$errors) {

        if (authenticateUser($conn, $_POST['login_email'], $_POST['login_password'])) {

            login();

            redirect("/book-share/index.php");
        } else {
            $errors = "Incorrect username/password, Please enter correct details";
        }
    }
}
?>

<div class="form__login notShown">



    <h1 class="form--title">Sign In</h1>
    <form id="login" method="post" class="form__wrapper">
        <div class="form__wrapper--row">
            <label for="login_email">Email</label>

            <div class="form__icon--wrapper">
                <img src="images/icons8-user-64.png" alt="" srcset="" class="form__icon" />
            </div>

            <div class="form__input">
                <input type="text" placeholder="Email" id="login_email" class="login_email" name="login_email" required />
            </div>
        </div>

        <div class="form__wrapper--row">
            <label for="login_password">Password</label>

            <div class="form__icon--wrapper">
                <img src="images/icons8-password-64 (1).png" alt="" srcset="" class="form__icon" />
            </div>

            <div class="form__input">
                <input type="password" class="login_password" id="login_password" placeholder="Password" name="login_password" required />
            </div>
        </div>

        <!-- <div class="form__remember">
            <div class="form__remember--con">
                <input type="checkbox" name="" id="" name="remember" />
                <p class="paragraph paragraph--remember">Remember Me</p>
            </div>

            <div class="forgot_password">
                <p><a href="#">Forgot password?</a></p>
            </div>
        </div> -->

        <button type="submit" name="signin" class="btn btn--primary">
            Sign In
        </button>
    </form>
</div>