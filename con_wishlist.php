<?php
extract($_GET);
                  
            include_once 'DBconfig.php';

            $sql = "INSERT INTO wishlist (ID, AdID) VALUES (NULL, '$id')";

            $result = mysqli_query($con,$sql);
if($sql)
{
    header("location:account-favourite-ads.php");
}
else{
    header("location: index.php");
}



            ?>