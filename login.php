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
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Type some info">
  <meta name="author" content="Type name">
  <title>Classifieds | Login</title>
</head>

<body>

  <section class="bg-secondary py-5">
    <div class="container">
      <h2 class="text-white">
        Login
      </h2>
    </div>
  </section>


  <section class="padding-y">
    <div class="container">
      <div class="row gy-4">

        <aside class="col-lg-4 col-md-6">
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
                  <a href="#" class="text-decoration-none">Forgot password</a>
                </div>

                <input name="login" class="btn btn-primary w-100" type="submit" value="Sign in">

                <p class="mb-0 mt-4 text-center">Dont have an account? <a href="#">Sign Up</a></p>

              </form>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>

</body>

</html>