
<?php
require('navbar.php');
if((isset($_GET['username'])&& isset($_GET['otp']) && $_GET['otp']=='true')||isset($_POST['otpCheck'])){

  if(isset($_POST['otpCheck'])){
      $username = $_POST['username'];
      $otpCode = $_POST['otpCode'];
      
      $checkQuery = "SELECT `verify_code` FROM `users` WHERE `email`='$username'";
      $res = mysqli_query($con,$checkQuery);
      if( $res){
          $row = mysqli_fetch_assoc($res);
          if($otpCode==$row['verify_code']){

                  header("location:cart.php?payment=true");
          }else
          {
            header('Location: session/destroySession.php?true=tt');
          }

      }else
      {

        header('Location: session/destroySession.php?true=tt');
      }
      
     

  }
  }


if(isset($_SESSION['login_email']) || isset($_GET['username']))
{


?>

  <div class="container">
    <div class="row">
    <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <div class="login_form bg-dark p-5 px-2 d-flex justify-content-center items-center rounded shadow-lg">
        <form action="otp-send.php"  method="POST">
          <div class="form-group">
        <h3 class='text-center text-light my-2 mb-3'>Put Your OTP </h3>
            <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="otpCode" placeholder="OTP" class="form-control text-center">
            <input type="text" value='<?php echo $_GET['username']?>' name='username' hidden>
            </div>
          <button type="submit" name="otpCheck" class="btn d-flex justify-content-center w-100 btn-primary my-3 mx-auto">SUBMIT</button>
        </form>

        </div>
      </div>

</div>
</div>
</div>

<?php
}else
{
  header('Location: session/destroySession.php?true=tt');
}
require('footer.php');
?>