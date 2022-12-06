<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'techworld');
$sql = "SELECT * FROM products WHERE featured=1";
// query sql command
$featured = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../Basic-Shop-PHP/css/bootstrap.min (4).css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tech World</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tech World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Laptops</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Smart Phones</a>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="col-md-8"></div>

    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Top Products</h2> <br><br>
            <?php
            while ($product = mysqli_fetch_assoc($featured)) :

            ?>
                <div class="col-md-5">
                    <h4><?= $product['title']; ?></h4>
                    <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" />
                    <p class="1price">ZAR <?= $product['price']; ?></p>
                    <a href="details.php">
                        <button type="button" class="btn" data-toggle="modal" data-target="#details-1">More</button>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>