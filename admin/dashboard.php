<?php
require('include/includes.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<?php include_once('layout/header.php'); ?>
<div class="container-fluid text-center">    
  <div class="row content">
  <?php include_once('layout/navigation.php'); ?>
    <div class="col-sm-10 text-left"> 
      <!-- !CONTENT GOES HERE! -->
      content!
    </div>
  </div>
</div>
<?php include_once('layout/footer.php'); ?>

</body>
</html>

