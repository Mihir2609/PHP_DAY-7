<?php
$connection = mysqli_connect("localhost","root","","db_phpinternship");

$id = $_GET['deleteid'];
$q = mysqli_query($connection,
        "delete from tbl_user where user_id='{$id}'")
        or died(mysqli_error($connection));
        
        if($q)
        {
            echo "<script>alert('Record Deleted');window.location='table.php';</script>";
        }
?>
