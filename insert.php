<?php 
include("connection.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Data Gathering</title>
    </head>
    <body>
<?php echo " <a href='display.php'>Home</a>"."<br>"; ?>

        <form action="" method="GET">
        Roll No: <input type="text" name="Rollno" value=""/><br><br>
        Name: <input type="text" name="Studentname" value=""/><br><br>
        Class:<input type="text" name="Class" value=""/><br><br>
        <input type="submit" name="submit" value="Submit" >
        </form>

        <?php 


        if($_GET['submit']){
        $rn= $_GET['Rollno'];
        $sn= $_GET['Studentname'];
        $cl= $_GET['Class'];
        if($rn!="" && $sn!="" && $cl!="")
        {
            $query = "insert into student values('$rn','$sn','$cl')";
            $data = mysqli_query($conn,$query);
            if($data){
                echo "data inserted into database";
            }
        }
        else{
            echo "All fields are required!";
        }
    }
       
?>
    </body>
</html>