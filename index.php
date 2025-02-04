<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Blizz</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS File Link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid p-0">
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="./images/log.png" alt="Beauty Blizz Logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Total Price</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Secondary Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link active" href="#">Welcome Guest</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
    </nav>

    <!-- Content Section -->
    <div class="bg-light">
        <h3 class="text-center">New Launch Alert!!!!</h3>
        <p class="text-center">Discover the latest in beauty products</p>
    </div>

    <!-- Main Content Area -->
    <!-- Main Content Area -->
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <!-- Product Cards -->
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/mama_new.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Mamaearth Tea Tree Oil-Free Moisturizer </h5>
                            <p class="card-text">For Face For Oily Skin With Tea Tree & Salicylic Acid For Acne & Pimples 80g</p>
                            <p class="card-text">500/-</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Lakmé Absolute 3D Lipstick</h5>
                            <p class="card-text"> Elegant Pink,Long Lasting Liquid Lipstick, Smudge Proof, Non Transferable, 3.6 g</p>
                            <p class="card-text"> 779/-</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Short description of Product 2.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Short description of Product 2.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Short description of Product 2.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Short description of Product 2.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Short description of Product 2.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/lakme_lip_new.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Short description of Product 2.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/ras_newl.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">Short description of Product 3.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Sidebar -->
        <div class="col-md-2 bg-secondary p-0">
            <!-- Popular Brands -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Our Popular Brands</h4></a>
                </li>
                <?php
                $select_brands = "SELECT * FROM `brands`";
                $result_brands = mysqli_query($con, $select_brands);

                while ($row_data = mysqli_fetch_assoc($result_brands)) {
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo "<li class='nav-item'><a href='index.php=$brand_id' class='nav-link text-light'>$brand_title</a></li>";
                }
                ?>
            </ul>

         <!-- Categories -->
<ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    <?php
    // SQL query to fetch categories
    $select_category = "SELECT * FROM `categories`";
    $result_category = mysqli_query($con, $select_category);

    // Fetch and display each category
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='nav-item'><a href='index.php?category_id=$category_id' class='nav-link text-light'>$category_title</a></li>";
    }
    ?>
</ul>


            </ul>

    

    <!-- Footer -->
    <div class="bg-info p-3 text-center">
        <p>© 2025 BEAUTY BLIZZ E-RETAIL LIMITED All Rights Reserved.</p>
    </div>
</div>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
