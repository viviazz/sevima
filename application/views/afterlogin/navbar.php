<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="http://localhost/sevima/CeKopit-Copy/assets/css/style.css"> -->

</head>
<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-5" href="#">CeKopit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('DataCovid') ?>">Data Covid-19</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('RSRujukan') ?>">RS Rujukan</a>
            </li>
            <li class="nav-item">
                <a class="btn btn_orange text-white" style="background-color: chocolate;" href="<?= site_url('Login/Logout') ?>">LogOut</a>
            </li>
        </ul>
    </div>
</nav>

<!--End Navbar-->

</html>