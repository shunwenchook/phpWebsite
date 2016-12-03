<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Interstellar - <?= $pageTitle ?> </title>
    <style>
        @import "css/membershipForm.css";
        @import "css/style.css";
        @import "css/navbar.css";

        .blockA {
            background-color: <?= $backgroundColor ?>;
        }

        form {
            background-color: <?= $backgroundColor ?>;
        }

        <?= $cssStyleRule ?>
    </style>
</head>

<body>
    <?php
    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);

    //-- login / logout ---
    require_once __DIR__ . '/_login_details.php';


    ?>



    <header>

        <img src="images/interstellar_header.jpg" id= "header" alt="Interstellar header">
        <!--<a href="index.html"> <span id="head"> Interstellar </span> </a> -->
    </header>



    <?php
    require_once __DIR__ . '/../templates/_nav.php';
    ?>

</body>