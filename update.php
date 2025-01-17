<?php
include("connection.php");
error_reporting(0);


?>


<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Data Gathering</title>
    </head>
    <body>
        <form action="" method="GET">
        Roll No: <input type="text" name="Rollno" value="<?php echo $_GET['rn']; ?>"/><br><br>
        Name: <input type="text" name="Studentname" value="<?php echo $_GET['sn']; ?>"/><br><br>
        Class:<input type="text" name="Class" value="<?php echo $_GET['cl']; ?>"/><br><br>
        <input type="submit" name="submit" value="Update" >
        </form>

     <?php 
        if($_GET['submit']){
            $rollno= $_GET['Rollno'];
            $name= $_GET['Studentname'];
            $class= $_GET['Class']; 
            $query = "UPDATE `Student` SET name='$name' ,class='$class' where ROLLNO='$rollno'";
            $data = mysqli_query($conn,$query);
            if($data)
            {
                echo "<font color='green'>Record Updated Successfully.<a href='display.php'> Check here.</a>";
            }
            else{
                echo "Record not Updated!";
                echo "<a href='display.php'> Check here.</a>";
            }
    }
    else{
            echo "<a href='display.php'> Check List here.</a>";
        }
        
    
       
?>
    </body>
</html>