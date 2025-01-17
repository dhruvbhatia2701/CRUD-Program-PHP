<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Data Gathering</title>
    </head>
    <body>
        
<?php

echo " <a class='btn btn-primary p-3' href='insert.php'>Add Records</a>";
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM `student`";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0){
    ?>
    <table class="table table-striped">
    <tr><th>Roll No.</th>
    <th>Name</th>
    <th>Class</th>
    <th colspan="2">Operations</th>
    </tr>


    <?php

  
    while($result = mysqli_fetch_assoc($data)){
     
        echo "<tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
            <td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
            <td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'>Delete</td>
        </tr>";
       
    }
    
}
else{
    echo "No record found";
}


?>
<script>
    function checkdelete(){
        return confirm("Are you sure you want to delete the data ??");
    }
</script>

</table>
</body>
</html>