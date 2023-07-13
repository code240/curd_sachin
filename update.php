<?php
if(!isset($_GET['user'])){
    echo "STOP";
    header( "refresh:2;url=show.php" );
    exit;
}

$sername = 'localhost';
$user = "root";
$password = "";
$database = "test";

//connect to the database
$conn = mysqli_connect($sername, $user, $password, $database);
if(!$conn){
    die("Database is not connected");
}

$id = $_GET['user'];
// echo $id;
$query = "SELECT * FROM user WHERE id = '$id'";
$result = mysqli_query($conn, $query);

$allresult = mysqli_fetch_assoc($result);
// echo $allresult['firstname'];
// echo $allresult['lastname'];
// echo $allresult['phone_no'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>

    </style>
</head>

<body>
    <div>
        <form method="post" action="updated.php">
            <div class="inp_d">
                <label for="fname">Firstname</label>
                <input type="text" value="<?php echo $allresult['firstname']; ?>" id="fname" name="fname" placeholder="Enter your firstname">
            </div>
            <div class="inp_d">
                <label for="lastname">Lastname</label>
                <input type="text" value= "<?php echo $allresult['lastname']; ?>" id="lastname" name="lastname" placeholder="Enter your lastname">
            </div>
            <div class="inp_d">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $allresult['email']; ?>"id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="inp_d">
                <label for="phone">Phone No</label>
                <input type="number" value="<?php echo $allresult['phone_no']; ?>" id="phone" name="phone" placeholder="Enter your phone">
            </div>
            <div class="inp_d">
                <label for="password">Password</label>
                <input type="password" value="<?php echo $allresult['psw']; ?>" id="password" name="password" placeholder="Password">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <input type="submit" name="update" value="Update">
            <!-- <button>login</button> -->
        </form>
    </div>
</body>
</html>
