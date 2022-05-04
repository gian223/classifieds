<?php
require_once('include/init.php');
if ($session->is_signed_in()) {
    $user = User::find_user_by_id($_SESSION['user_id']);
}
// echo $user->first_name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("page-title")</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

</head>

<body>
    <div id="app">
        <div class="container-fluid p-2 bg-white border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.php">
                            <img class="header__logo" src="images/place-holder-logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-8 pt-1">
                        <ul class="nav float-end">
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Cart
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="">
                                    <i class="fa-solid fa-binoculars"></i>
                                    Watchlist
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="">
                                    <i class="fa-solid fa-pencil"></i>
                                    Start a listing
                                </a>
                            </li>
                            <?php if (!$session->is_signed_in()) { ?>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="">Register</a>
                            </li>
                            <?php } else { ?>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fa-solid fa-user"></i>
                                    My Account
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php" class="text-white">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Logout
                                </a>
                            </li>
                            <?php } ?>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid header pb-4 pt-4">
            <div class="container text-white">
                <div class="row align-items-end">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="card-body row align-items-end">
                                <div class="col">
                                    <h3 class="pb-1">New Zealands #1 FREE Online Auction and Classifieds</h1>
                                        <h1 class="pb-1">What are you looking for today?</h1>

                                        <div class="search">
                                            <input type="text" class="form-control" placeholder="Search all classifieds">
                                            <button class="btn btn-primary search__button">Search</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img class=" align-top img-responsive" src="images/test.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-3 pb-5">
            <div class="container">
                Content here!
            </div>
        </div>




        <div class="container-fluid p-5 bg-secondary text-white text-center">
            <h1>Footer</h1>
            <p>Resize this responsive page to see the effect!</p>
        </div>


    </div>
</body>

</html>