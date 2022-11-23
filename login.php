<?php require_once "includes/header.php"; ?>
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
            <div class="form__signup">
                <h1 class="form--title">Sign Up</h1>

                <!-- signup form | start -->
                <form action="index.php" id="signup" method="post">
                    <label for="">Email</label>

                    <div class="form__row">
                        <div class="form__icon--wrapper">
                            <img src="images/icons8-envelope-64.png" alt="" srcset="" class="form__icon" />
                        </div>

                        <div class="form__input">
                            <input type="text" placeholder="example@gmail.com" id="email" class="email" name="email" />
                        </div>
                    </div>

                    <div class="form__row">
                        <label for="">Username</label>
                        <div class="form__icon--wrapper">
                            <img src="images/icons8-user-64.png" alt="" srcset="" class="form__icon" />
                        </div>

                        <div class="form__input">
                            <input type="text" placeholder="Username" id="username" class="username" name="username" />
                        </div>
                    </div>

                    <div class="form__row">
                        <label for="">Password</label>
                        <div class="form__icon--wrapper">
                            <img src="images/icons8-password-64 (1).png" alt="" srcset="" class="form__icon" />
                        </div>

                        <div class="form__input">
                            <input type="password" class="password" id="password" name="password" placeholder="Create password" />
                        </div>
                    </div>

                    <div class="form__row">
                        <label for="">Confirm password</label>
                        <div class="form__icon--wrapper">
                            <img src="images/icons8-password-64 (1).png" alt="" srcset="" class="form__icon" />
                        </div>

                        <div class="form__input">
                            <input type="password" class="confirm_password" id="confirm_password" name="confirm_password" placeholder="Confrim password" />
                        </div>
                    </div>

                    <div class="form__remember">
                        <div class="form__remember--con">
                            <input type="checkbox" name="" id="" name="remember" />
                            <p class="paragraph paragraph--terms">
                                By Siging up you accept the

                                <span>
                                    <a href="#">Terms </a>
                                </span>
                                and
                                <span>
                                    <a href="#">Privacy Policy </a>
                                </span>
                            </p>
                        </div>
                    </div>

                    <button type="submit" name="sign_up" class="btn btn--primary">
                        Sign up
                    </button>

                    <!-- <input type="submit" name="sign_up" class="btn btn--primary" /> -->

                </form>
                <!-- signup form | end -->
            </div>

            <div class="form__login notShown">
                <h1 class="form--title">Sign In</h1>
                <form action="" id="login">
                    <div class="form__row">
                        <label for="">Username/email</label>

                        <div class="form__icon--wrapper">
                            <img src="images/icons8-user-64.png" alt="" srcset="" class="form__icon" />
                        </div>

                        <div class="form__input">
                            <input type="text" placeholder="Username or email" id="login_email" class="login_email" name="login_name" />
                        </div>
                    </div>

                    <div class="form__row">
                        <label for="">Password</label>

                        <div class="form__icon--wrapper">
                            <img src="images/icons8-password-64 (1).png" alt="" srcset="" class="form__icon" />
                        </div>

                        <div class="form__input">
                            <input type="password" class="login_password" id="login_password" placeholder="Password" />
                        </div>
                    </div>

                    <div class="form__remember">
                        <div class="form__remember--con">
                            <input type="checkbox" name="" id="" name="remember" />
                            <p class="paragraph paragraph--remember">Remember Me</p>
                        </div>

                        <div class="forgot_password">
                            <p><a href="#">Forgot password?</a></p>
                        </div>
                    </div>

                    <button type="submit" name="signin" class="btn btn--primary" id="loginBtn">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once "includes/footer.php"; ?>