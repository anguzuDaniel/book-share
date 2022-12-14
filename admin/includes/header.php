<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <script defer src="../css/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/js/all.min.js"></script>
    <link rel="stylesheet" href="../css/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.min.css">
    <script type="text/javascript" src="../js/script.js" defer></script>
    <link rel="stylesheet" href="../css/sass/vendors/open-props/open-props.min.css">
    <!-- <link rel="stylesheet" href="../css/sass/vendors/open-props/normalize.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    session_start();
    ob_start();
    require_once "../config/dbConfig.php";
    require_once "../functions/functions.php";
    requireLogin();
