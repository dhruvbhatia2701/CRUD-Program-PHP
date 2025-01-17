<?php 
include("connection.php");
$query = "insert into student values(3,'Kunwar','B.Tech')";
$data = mysqli_query($conn,$query);

if($data){


    echo "data inserted into database";
}
?>