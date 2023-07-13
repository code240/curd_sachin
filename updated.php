<?php
// $sername = 'localhost';
// $user = "root";
// $password = "";
// $database = "test";

// $conn = mysqli_connect($sername, $user, $password, $database);
// if (!$conn) {
//     die("Database is not connected");
// }

if(!isset($_POST['fname']) ){
    echo "STOP";
    header( "refresh:2;url=show.php" );
    exit;
}

$firstname = $_POST['fname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pswd = $_POST['password'];
$id = $_POST['id'];

$sername = 'localhost';
$user = "root";
$password = "";
$database = "test";

//connect to the database
$conn = mysqli_connect($sername, $user, $password, $database);
if(!$conn){
    die("Database is not connected");
}

$query = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone_no = '$phone', psw = '$pswd' WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if(!$result){
    echo "<br><br><center><h1>Something went wrong!</h1></center>";
    header( "refresh:2;url=./show.php");
}
else{
    echo "<br><br><center><h1>User record updated successfully</h1></center>";
    header( "refresh:2;url=./show.php");
}
?>