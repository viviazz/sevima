<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php
    include "navbar.php";
    ?>

    <div class="container">

        <h1 class="mt-5">Daftar Vaksin</h1><br>
        <br>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" action="<?php echo site_url('Daftar/AddAccount/'); ?>" method="post" novalidate>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            NIK
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Nama
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="email" class="form-control" id="username" name="email" placeholder="Your Email" required>
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                        <div class="invalid-feedback">
                            Password code required.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Repeat Password</label>
                        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="" required>
                        <div class="invalid-feedback">
                            Password code required.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button type="submit" class="btn btn-success mb-5">Daftar!</button>

            </form>
        </div>

    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>