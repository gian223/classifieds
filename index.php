<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Classifieds</title>
    <?php include('template/head.php'); ?>
</head>

<body>
    <div id="app">
        <?php include('template/header.php'); ?>
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
                        <img class="header__image img-responsive" src="images/test.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-3 pb-5">
            <div class="container">
                Content here!
            </div>
        </div>

        <?php include('template/footer.php'); ?>
    </div>
</body>

</html>