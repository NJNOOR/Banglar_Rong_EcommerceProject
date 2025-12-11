<?php

// // To Remove unwanted errors
 error_reporting(0);

// Add your connection Code
include('includes/connect.php');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// Generate Random 6-Digit OTP
$verification_otp = random_int(100000, 999999);



function sendMail($send_to, $otp, $name) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Enter your email ID
    $mail->Username = "alokacharjye2001@gmail.com";
    $mail->Password = "qauaizhylffyxddt";


    // Your email ID and Email Title
    $mail->setFrom("alokacharjye2001@gmail.com", "Verification Code");

    $mail->addAddress($send_to);

    // You can change the subject according to your requirement!
    $mail->Subject = "Account Activation";

    // You can change the Body Message according to your requirement!
    $mail->Body = "Hello, {$name}\n A order place from your account! Now activate your account with OTP {$otp}.";
    $mail->send();
}

if(isset($_GET['username']) && isset($_GET['email'])  && isset($_GET['otp']))
{

$send_to_email = $_GET["email"];
// Full Name of User
$send_to_name = $_GET["username"];

$insertQuery = "UPDATE `users` SET `verify_code`='$verification_otp' WHERE `email`='$send_to_email'";
$result = mysqli_query($con, $insertQuery);
if($result)
{
  sendMail($send_to_email, $verification_otp, $send_to_name);
  header('Location: otp-send.php?true&username='.$send_to_email);
}else
{
  header('Location: cart.php?error');
}
}


?>


<?php
require('navbar.php');


if(isset($_SESSION['login_email']))
{


?>
<div class="container">


    <!--fourth child-->
    <div class="row px-1">
        <div class="col-md-10">
          <!--products section-->
          <div class="row">
          <?php 

if(!empty($_SESSION["products"]))
{



    if(isset($_GET['remove']) && isset($_GET['id']))
{
    $id = $_GET['id'];
 $key=array_search($id,$_SESSION['products']);
 if($key!==false)
    {
        unset($_SESSION['products'][$key]);
    }
    $_SESSION["products"] = array_values($_SESSION["products"]);
    $_SESSION['NumberOfProducts'] = count($_SESSION["products"] );
}

$array_data = (array)$_SESSION['products'];
$quantity= array_count_values($_SESSION["products"]);

foreach($quantity as $key => $val)
{
  getProduct($key,$val) ;
}

}else
{
    ?>
    <div class='text-center m-auto grid align-content-center mt-5'><p class='fs-2 text-secondary mt-5'>Add To Cart Product</p></div>
    <?php
}

?>
        <!--Row end-->
        </div>
        <!--colomn end-->
        </div>
                
          <!--sidenav-->  
        <div class="col-md-2  p-0 justify-content-center">
        <p class="text-bold fs-3">Total: <span><?php if(isset($_SESSION['products'])) price();else  echo 0;?>$</span></p>
        <?php 
if(isset($_GET['payment']) && $_GET['payment']=='true'){
  ?>
<h3 class="text-bold fs-5">Payment Method</h3>
        <div class="form-check d-flex align-items-center my-2 checkBox">
  <input class="form-check-input method-Choose" type="checkbox" value="bkash" id="flexCheckDefault" onclick="methodChoose1()" checked='true'>
  <label class="form-check-label" for="flexCheckDefault">
    <img class="rounded float-end" width='100px' src="images/BKash-Logo.wine.png" alt="">
  </label>
</div>
<div class="form-check checkBox">
  <input class="form-check-input method-Choose" type="checkbox" value="cashOn" id="flexCheckChecked"  onclick="methodChoose2()">
  <label class="form-check-label" for="flexCheckChecked">
    Cash On Delivery 
</div>

<p class="text-bold fs-5 mt-3 mb-2">Delivery Address:</p>
<div >
  <textarea class="form-control addr" name="addr" id="" rows="3" placeholder="Type your address"></textarea>
</div>


<a class='btn btn-info my-3 w-100' onclick="makePayment()">Payment</a>
<?php
}else
{
  $data = userData($_SESSION["login_email"]);
$username = $data['fname'];
$email = $data['email'];

echo "<a class='btn btn-primary my-3 w-100' href='cart.php?username=$username&email=$email&otp=true'>Place Order</a>";

} ?>
        </div>  
    </div>
    </div>


 
     

    
    <?php
}

else
{
  header('Location: sign_in_sign_up/login.php');
}
require('footer.php');
?>