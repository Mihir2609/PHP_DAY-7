<?php
$connection = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deletename'];
$q = mysqli_query($connection,
        "delete from tbl_user where user_name='{$name}'")
        or died(mysqli_error($connection));
        
        if($q)
        {
            echo "<script>alert('Record Deleted');window.location='table.php';</script>";
        }
?>
