<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jbwebphp";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn) {
    echo "";

}else{
  die("Connection failed because ".mysqli_connect_error());
}

?>