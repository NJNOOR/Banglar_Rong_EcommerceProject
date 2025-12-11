<?php

require('navbar.php');

if(isset($_GET['order'])=='true')
{
  if(isset($_SESSION['NumberOfProducts']))
  {
    unset($_SESSION['products']);
    unset($_SESSION['NumberOfProducts']);
    header('Location: index.php?orderPlaced=true');
  }
}
?>


<div class="container-fluid px-5">
  
<?php if(isset($_GET['orderPlaced']) && $_GET['orderPlaced']='true')
{
  ?>

<div class="modal d-block bg-dark bg-opacity-75" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success fw-bold"><i class="bi bi-check2-circle"></i> Order Placed Successfully!</h5>
      </div>
      <div class="modal-body">
        <p class='text-capitalize text-center'>successfully payment and thanks for Being with us</p>
      </div>
      <div class="modal-footer">
        <a href='index.php' class="btn btn-secondary" >Close</a>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
    <!--fourth child-->
    <div class="row">
        <div class="col-md-10 gap-1">
          <!--products section-->
          <div class="row">
          <!-- fetching products -->

          <?php
          //function call
      getproducts();
      get_unique_categories();
      get_unique_brands();

?>

        <!--Row end-->
        </div>
        <!--colomn end-->
        </div>
                
          <!--sidenav-->  
        <div class="col-md-2  p-0 gap-1 mr-2">
          <!--brands to be displayed-->
            
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-dark">
                    <a href="#" class="nav-link text-light link-underline-secondary"> <h4>Delivery Brands</h4></a>
                </li>
                
                <?php
                getbrands()


?>

                <!--categories to be displayed-->

                <ul class="navbar-nav text-center">
                <li class="nav-item bg-dark">
                    <a href="#" class="nav-link text-light"> <h4>Categories</h4></a>
                </li>

                <?php
                getcategories()

?>

 

                </ul>
        </div>  
    </div>
    </div>

    
    <?php

require('footer.php');
?>