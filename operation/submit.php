<?php
// Example URL: http://example.com/index.php?name=John&age=25

// Accessing the 'name' parameter from the URL

if( !isset($_POST['firstname']) ){
    echo "STOP";
    header( "refresh:2;url=./../register.php" );
    exit;
}


$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

// Accessing the 'age' parameter from the URL
$psw = $_POST['password'];

if($firstname == "" || $lastname=="" || $phone == "" || $email == "" || $psw == ""){
    echo "All field are required.";
    echo "<script>setTimeout(()=>{history.back()},2000)</script>";
    exit;
}


$psw = base64_encode($psw);

$sername = 'localhost';
$user = "root";
$password = "";
$database = "test";

//connect to the database
$conn = mysqli_connect($sername, $user, $password, $database);
if(!$conn){
    die("Database is not connected");
}
$query = "INSERT INTO user (firstname, lastname, email, phone_no, psw) VALUES ('$firstname', '$lastname', '$email', '$phone', '$psw')";

$result = mysqli_query($conn, $query);

if(!$result){
    echo "<br><br><center><h1>Sorry the user is not registered!!</h1></center>";
    header( "refresh:2;url=./../register.php" );
}
else{
    echo "<br><br><center><h1>User is registered successfully</h1></center>";
    header( "refresh:2;url=./../show.php" );
}


?> 
