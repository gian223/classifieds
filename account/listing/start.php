<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Classifieds</title>
    <?php include('../../template/head.php'); ?>
</head>

<body>
    <div id="app">
        <?php include('../../template/header.php'); ?>
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
                <div class="row">
                    <?php include('../menu.php'); ?>
                    <main class="col-lg-9">
                        <article class="card">
                            <div class="card-body">

                                <form method="POST" action="update.php" id="update">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4>Account Details</h4>
                                            <div class="alert alert-success fw-bold update_success d-none" role="alert">
                                                Account Details updated successfully.
                                            </div>
                                            <div class="row gx-3">
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">First name</label>
                                                    <input class="form-control" type="text" readonly value="<?php echo $user->first_name; ?>">
                                                </div>
                                                <div class="col-6  mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <input class="form-control" type="text" readonly value="<?php echo $user->last_name; ?>">
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" type="email" readonly value="<?php echo $user->email; ?>">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Username</label>
                                                    <input class="form-control" type="text" readonly value="<?php echo $user->username; ?>">
                                                </div>
                                                <div class="col-lg-12  mb-3">
                                                    <label class="form-label">
                                                        Address (Will not be visible to other users unless you specify it to show in your listings)
                                                    </label>
                                                    <input id="address" class="form-control" type="text" name="address" value="<?php echo $user->address; ?>">
                                                    <span class="text-danger" id="address_message"></span>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Region</label>
                                                    <select id="region" type="text" class="form-control" name="region" required>
                                                        <option value="0">Please select a region...</option>
                                                        <?php foreach (Region::get_all_regions() as $region) { ?>
                                                            <option <?php if ($region->id == $user->region) {
                                                                        echo 'selected';
                                                                    } ?> value="<?php echo $region->id; ?>"><?php echo $region->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <span class="text-danger" id="region_message"></span>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Town</label>
                                                    <select id="town" type="text" class="form-control" name="town" required>
                                                        <option value="0">Please select a town...</option>
                                                    </select>
                                                    <span class="text-danger" id="town_message"></span>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">zip_code</label>
                                                    <input id="zip_code" class="form-control" type="text" name="zip_code" value="<?php echo $user->zip_code; ?>">
                                                    <span class="text-danger" id="zip_message"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input id="phone" class="form-control" type="tel" name="phone" value="<?php echo $user->phone; ?>">
                                                    <span class="text-danger" id="phone_message"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <aside class="col-lg-4">
                                            <figure class="text-lg-center mt-3">
                                                <div class="profile__avatar">
                                                    <span class="profile__avatar--initial"><?php echo $user->first_name[0]; ?></span>
                                                </div>
                                                <!-- <img class="img-lg mb-3 img-avatar" src="../images/avatars/avatar1.jpg" alt="User Photo"> -->

                                                <figcaption>
                                                    <a class="btn  btn-sm btn-light" href="#">
                                                        <i class="fa fa-camera"></i> Upload
                                                    </a>
                                                    <a class="btn  btn-sm btn-outline-danger" href="#">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </figcaption>
                                            </figure>
                                        </aside>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>

                                <hr class="my-4">

                                <div class="row" style="max-width:920px">
                                    <div class="col-md-6">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-light btn-sm" href="#">Change</a>
                                            <p class="title mb-0">Password</p>
                                            <small class="text-muted d-block" style="width:70%">You can reset or change your
                                                password by clicking here</small>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-outline-danger btn-sm" href="#">Deactivate</a>
                                            <p class="title mb-0">Remove account</p>
                                            <small class="text-muted d-block" style="width:70%">Once you delete your account,
                                                there is no going back.</small>
                                        </article>
                                    </div>
                                </div>

                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>

        <?php include('../../template/footer.php'); ?>
    </div>
</body>

</html>