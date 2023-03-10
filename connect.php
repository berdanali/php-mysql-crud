

<?php 
$dbhost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "crud";

$conn =mysqli_connect($dbhost,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("Something went wrong !!!");
    
}

?>