<?php
//DB connection
$connection = mysqli_connect("localhost","root","","db_internship");
 //Query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($q)){
 
    echo "<tr>";
    echo "<td>{$row['user_name']}</td>";
      echo "<td>{$row['user_gender']}</td>";
        echo "<td>{$row['user_mobile']}</td>";
       echo "<td><a href='Delete.php?deletedname={$row['user_name']}'>Delete</a></td>"; 
        echo "</tr>";
}
echo "</table>";
echo"<a href='connection.php'>Add Record</a>";
?>