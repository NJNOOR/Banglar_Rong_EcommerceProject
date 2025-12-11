
<!-- file connection -->

<?php
include('../includes/connect.php');
include('../functions/common_function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banglar_Rong</title>
    <!--bootstrape CSS ling-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font awesome link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS file-->
    <link rel="stylesheet" href="./style.css">

    <style>


.poduct_img{
    width:100px;
    object-fit:contain;

}
        </style>


</head>
<body>




<?php
require('header.php');
?>
        <div class="container mb-5 p-5 pe-0  bg-light rounded-lg border border-rounded shadow">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2 fs-1 text-uppercase text-secondary">Admin Area</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center">
                <div class="me-5 text-center">
                    <a href="#"><img src="../images/admin.png" alt="" class="admin_image"></a>
                    <p class="text-center">Banglar_Rong_2.0</p>
                    <button class="my-3 btn btn-danger w-100"><a href="destroySession.php?true=tt" class="nav-link text-light my-1">Log Out</a></button>
                    <a href="change-pwd.php?true=tt" class="text-dark">Change Password</a>
                </div>
                <div class="row gap-1 ml-5">
                <button class="my-3 btn btn-primary col-md-2"><a href="all-orders.php" class="nav-link text-light  my-1">All orders</a></button>
                <button class="my-3 btn btn-primary col-md-2"><a href="all-payments.php" class="nav-link text-light my-1">All payments</a></button>
                <button class="my-3 btn btn-primary col-md-2"> <a href="all-job.php" class="nav-link text-light my-1">All Jobs</a></button>  
                <button class="my-3 btn btn-primary col-md-2"><a href="current-order.php" class="nav-link text-light my-1">Current Orders</a></button>
                <button class="my-3 btn btn-primary col-md-2" ><a href="special_offer.php" class="nav-link text-light  my-1">Special Offers</a></button>
                <button class="my-3 btn btn-primary col-md-2">

                    <a href="all-products.php" class="nav-link text-light  my-1">View Products</a></button>
                    <button class="my-3 btn btn-primary col-md-2"> <a href="insert_product.php" class="nav-link text-light my-1">Insert Products</a></button>  
                    <button class="my-3 btn btn-primary col-md-2"><a href="index.php?insert_categories" class="nav-link text-light  my-1">Insert Categories</a></button>
                    <button class="my-3 btn btn-primary col-md-2"><a href="index.php?view_categories" class="nav-link text-light  my-1">View Catagories</a></button>
                    <button class="my-3 btn btn-primary col-md-2"><a href="index.php?insert_brands" class="nav-link text-light my-1">Insert Brands</a></button>
                    <button class="my-3 btn btn-primary col-md-2" ><a href="index.php?view_brands" class="nav-link text-light my-1">View Brands</a></button>
                    <button class="my-3 btn btn-primary col-md-2"> <a href="post-job.php" class="nav-link text-light my-1">Post Job</a></button>  
                    <button class="my-3 btn btn-primary col-md-2"> <a href="users.php" class="nav-link text-light my-1">Users</a></button>  
                    <button class="my-3 btn btn-primary col-md-2"> <a href="index.php?view_products" class="nav-link text-light  my-1">Delete & Update</a></button>
                </div>
            </div>
        </div>
        <!--fourth Child-->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }

            if(isset($_GET['view_products'])){
                include('view_products.php');
            }

            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }

            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }

            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }

            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }

            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }

            if(isset($_GET['edit_brands'])){
                include('edit_brands.php');
            }

            if(isset($_GET['delete_category'])){
                include('delete_category.php');
            }

            if(isset($_GET['delete_brands'])){
                include('delete_brands.php');
            }

            ?>
    </div>
    </div>

    <?php
require('footer.php')
?>




<!--bootstrape Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>