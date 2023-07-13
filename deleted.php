<?php


$sername = 'localhost';
$user = "root";
$password = "";
$database = "test";

//connect to the database
$conn = mysqli_connect($sername, $user, $password, $database);
if(!$conn){
    die("Database is not connected");
}
$id = $_POST['delete'];
// echo $id;
$query = "DELETE FROM `user` WHERE `id` = '$id'";
$result = mysqli_query($conn, $query);

if(!$result){
    echo "<br><br><center><h1>Something went wrong!</h1></center>";
    header( "refresh:2;url=./show.php");
}
else{
    echo "<br><br><center><h1>User record deleted successfully</h1></center>";
    header( "refresh:2;url=./show.php");
}
?>