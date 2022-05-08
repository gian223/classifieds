<?php
// require_once('include/init.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classifieds/include/init.php');

if ($session->is_signed_in()) {
    $user = User::find_user_by_id($_SESSION['user_id']);
}
// echo $user->first_name;

?>
<div class="container-fluid p-2 bg-white border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="index.php">
                    <img class="header__logo" src="/classifieds/images/place-holder-logo.png" alt="">
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
                            <a href="account.php" class="nav-link">
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

