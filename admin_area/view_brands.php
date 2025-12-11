<h1 class="text-center text-success">All Brands</h1>
<table class="table table-bordered mt-5">
    <thead class="bg-secondary">
        <tr>
            <th>S.No</th>
            <th>Brand Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody class="bg-info text-light">

    <?php
    $select_brand="Select * from `brands`";
    $result=mysqli_query($con,$select_brand);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $brand_id=$row['brand_id'];
        $brand_title=$row['brand_title'];
        $number++;

?>
        <tr>
            <th><?php echo $number;?></th>
            <th><?php echo $brand_title;?></th>
            <td><a href='index.php?edit_brands=<?php echo $brand_id?>'>
            <i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_brands=<?php echo $brand_id?>'><i class='fa-solid fa-trash'></i></a></td>

            
        </tr>

        <?php

    }?>

    </tbody>


</table>