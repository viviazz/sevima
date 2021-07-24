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

        <h1 class="mt-5">Login</h1><br>
        <br>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" action="<?php echo site_url('Login/AksiLogin/'); ?>" method="post" novalidate>
                <div class="row g-3">
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
                    <div class="col-md-12">
                        <label for="zip" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="" required>
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