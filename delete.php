<?php
include 'connection.php';
$rollno =$_GET['rn'];
$query = "delete from student where rollno='$rollno'";
$data = mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Record has been Deleted')</script>";
    ?>
<meta http-equiv="Refresh" content="0 URL=http://localhost:8080/jbwebphp/display.php">
<?php
   
}
else{
    echo "Unable to delete data";
}

?>