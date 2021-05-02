<?php
    $url = file_get_contents('http://54.169.201.229:8081/api/product');
    $data = json_decode($url, true);

    $data =$data["data"];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="row">
        <?php foreach($data as $row) : ?>
        <div class ="col-md-3">
            <div class="card mb-3">
                <img src="<?= $row["image"];?>"
                class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["name"];?></h5>
                    <p class="card-text"><?= $row["detail"];?></p>
                    <h5 class="card-title">Price Rp :<?= $row["price"];?></h5>
                    <h5 class="card-title">Discount Rp:<?= $row["discount"];?></h5>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Detail</th>
                <th scope="col">Stock</th>
                <th scope="col">Image</th>
                <th scope="col">Created at</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($data as $row) : ?>
            <tr>
                <th scope="row"><?= $row["id"];?></th>
                    <td><?= $row["name"];?></td>
                    <td><?= $row["price"];?></td>
                    <td><?= $row["discount"];?></td>
                    <td><?= $row["detail"];?></td>
                    <td><?= $row["stock"];?></td>
                    <td><img src="<?= $row["image"];?>" class="img-thumbnail"></td>
                    <td><?= $row["created_at"];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>

    </table>
</tbody>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>