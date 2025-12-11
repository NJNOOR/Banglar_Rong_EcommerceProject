<?php

if(isset($_POST['btn-send'])){
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)){
        header('location:contact.php?error');

    }
    else{

        $to= "naeemkhannak32@gmail.com";
        if(mail($to,$Subject,$Msg,$Email)){
            header('location:contact.php?success');
        }
    }

    // else {
    //     $to = "naeemkhannak32@gmail.com";
    //     if (mail($to, $Subject, $Msg, $Email)) {
    //         header('location: contact.php?success');
    //         //exit; 
    //         // Add this line to terminate the script after redirection
    //     }
    // }
    

}

else{
    header("location:contact.php");
}

?>