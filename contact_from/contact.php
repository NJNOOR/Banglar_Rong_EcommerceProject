

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
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-title">
                    <h1 class="text-center py-2">Contact Us</h1>
                    <hr>

                    <?php
                    $Msg = "";
                    if(isset($_GET['error'])){
                        $Msg = " Please fill in the blanks ";
                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                    }

                    if(isset($_GET['success'])){
                        $Msg = " Your message successfuly Sent ";
                        echo '<div class="alert alert-success">'.$Msg.'</div>';
                    }





                ?>


                </div>
                <div>
                <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>


<footer class="bg-light p-3 m-0 h-100 text-white footer mx-auto mt-5 mb-0 bg-dark w-100">
        <div class="text-center">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Sylhet, Bangladesh</p>
            <p><strong>Phone:</strong>  01752025512 / 01608626223</p>
            <p><strong>Whatsapp:</strong> 01608626223</p>
            <p><strong>Email:</strong> banglr_rong@gamil.com</p>
            <p><strong>Open:</strong>  9:00 am - 10:00 pm,  sat - thu</p>   
        </div>
    </footer>

<!--bootstrape Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

