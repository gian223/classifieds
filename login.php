<?php
require_once('include/init.php');
if ($session->is_signed_in()) {
  redirect("index.php");
}

if (isset($_POST['login'])) {

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $user_found = User::verify_user($username, $password);

  if ($user_found) {
    $session->login($user_found);
    redirect("index.php");
  } else {
    $the_message = "your password or username is incorrect.";
  }
} else {
  $username = "";
  $password = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home | Classifieds</title>
  <?php include('template/head.php'); ?>
</head>

<body>
  <div id="app">
    <?php include('template/header.php'); ?>
    <div class="container-fluid header">
      <div class="container text-white">
        <div class="row align-items-end">
          <div class="col-sm-8">
            <div class="row">
              <div class="card-body row align-items-end">
                <div class="col">
                  <div class="search">
                    <input type="text" class="form-control" placeholder="Search all classifieds">
                    <button class="btn btn-primary search__button">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid pt-3 pb-5">
      <div class="container">
        <div class="row gy-4">

          <aside class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-4">Sign in</h4>
                <form method="POST" action="login.php">

                  <div class="input-group mb-3">
                    <span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Username or Email" name="username">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">
                      <i class="fa fa-lock"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Password" name="password">
                  </div>

                  <div class="d-flex mb-3">
                    <label class="form-check me-auto">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-label"> Remember </span>
                    </label>
                  </div>

                  <input name="login" class="btn btn-primary w-100" type="submit" value="Sign in">

                </form>
              </div>
            </div>
          </aside>

          <aside class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-4">Don't have an account?</h4>
                <a href="#">Click here to register a new account</a>
              </div>
            </div>
          </aside>

        </div>
      </div>
    </div>

    <?php include('template/footer.php'); ?>
  </div>
</body>

</html>