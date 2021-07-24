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

    foreach ($rsrujukan as $value);
    ?>

    <div class="container">

        <h1 class="mt-5">Rumah Sakit Rujukan Covid-19 di Indonesia</h1><br>

        <br>
        <table class="table table-success table-striped">
            <tr>
                <th>No.</th>
                <th>Rumah Sakit</th>
                <th>Alamat</th>
                <th>Lokasi</th>
                <th>Kontak</th>
                <th>Provinsi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($rsrujukan as $value) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value['name']; ?></td>
                    <td><?= $value['address']; ?></td>
                    <td><?= $value['region']; ?></td>
                    <td><?= $value['phone']; ?></td>
                    <td><?= $value['province']; ?></td>
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