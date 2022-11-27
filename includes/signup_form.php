<?php

if (isset($_POST['signup'])) {
    $user_email = $_POST['email'];
    $username = $_POST['username'];
    $user_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = validationUserForm($user_email, $username, $user_password, $confirm_password);

    if (!$errors) {
        $userFound = checkUserEmail($conn, $user_email);

        if ($userFound) {
            $signup = createUser($conn, $user_email, $username, $user_password);

            if (!$signup) {
                $conn->errorInfo();
            }
        }
    } 
}
?>
<div class="form__signup">
    <!-- if button clicked and errors array empty then this will run -->
    <?php if (isset($_POST['signup']) && !$errors) : ?>
        <?php if (in_array($_POST['email'], $user = getAllUsers($conn, "email"))) : ?>
            <?php foreach ($user as $u) : ?>
                <div class='error--signup'>
                    <p>An account with <?= $u['email']; ?> already exits, please login to continue.</p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <?php foreach ($user as $u) : ?>

                <?php if ($u['email'] !== $_POST['email']) : ?>
                    <div class='success--signup'>
                        <p>User <?= $u['email']; ?> created successfully 😉, you are ready to login.</p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        <?php endif; ?>
    <?php endif; ?>

    <h1 class="form--title">Sign Up</h1>


    <!-- signup form | start -->
    <form id="signup" method="post" class="form__wrapper">
        <label for="email">Email</label>

        <div class="form__wrapper--row">
            <div class="form__icon--wrapper">
                <img src="images/icons8-envelope-64.png" alt="" srcset="" class="form__icon" />
            </div>

            <div class="form__input">
                <input name="email" type="text" placeholder="example@gmail.com" id="email" class="email" name="email" />
            </div>
        </div>

        <div class="form__wrapper--row">
            <label for="username">Username</label>
            <div class="form__icon--wrapper">
                <img src="images/icons8-user-64.png" alt="" srcset="" class="form__icon" />
            </div>

            <div class="form__input">
                <input type="text" placeholder="Username" id="username" class="username" name="username" />
            </div>
        </div>

        <div class="form__wrapper--row">
            <label for="">Password</label>
            <div class="form__icon--wrapper">
                <img src="images/icons8-password-64 (1).png" alt="" srcset="" class="form__icon" />
            </div>

            <div class="form__input">
                <input type="password" class="password" id="password" name="password" placeholder="Create password" />
            </div>
        </div>

        <div class="form__wrapper--row">
            <label for="">Confirm password</label>
            <div class="form__icon--wrapper">
                <img src="images/icons8-password-64 (1).png" alt="" srcset="" class="form__icon" />
            </div>

            <div class="form__input">
                <input type="password" class="confirm_password" id="confirm_password" name="confirm_password" placeholder="Confrim password" />
            </div>
        </div>

        <!-- <div class="form__remember">
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
        </div> -->

        <button type="submit" name="signup" class="btn btn--primary">
            Sign up
        </button>

        <!-- <input type="submit" name="sign_up" class="btn btn--primary" /> -->

    </form>
    <!-- signup form | end -->
</div>