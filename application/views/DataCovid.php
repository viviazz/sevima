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

    foreach ($indonesia as $value);
    ?>

    <div class="container">

        <h1 class="mt-5">Data Sebaran Covid-19 di Indonesia</h1><br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Positif</h5>
                        <h1><?= $value['positif'] ?></h1>
                        <p class="card-text">Orang</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Sembuh</h5>
                        <h1><?= $value['sembuh'] ?></h1>
                        <p class="card-text">Orang</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Meninggal</h5>
                        <h1><?= $value['meninggal'] ?></h1>
                        <p class="card-text">Orang</p>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <h3 class="mt-4">Data Covid-19 per Provinsi di Indonesia</h3><br>
        <table class="table table-success table-striped">
            <tr>
                <th>No.</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <?php
            $no = 1;
            foreach ($provinsi as $value) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value['attributes']['Provinsi']; ?></td>
                    <td><?= $value['attributes']['Kasus_Posi']; ?></td>
                    <td><?= $value['attributes']['Kasus_Semb']; ?></td>
                    <td><?= $value['attributes']['Kasus_Meni']; ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>

    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>