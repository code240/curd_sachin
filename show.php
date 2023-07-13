<?php
$sername = 'localhost';
$user = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($sername, $user, $password, $database);
if (!$conn) {
    die("Database is not connected");
}


$qry = "SELECT * FROM user";
$result = mysqli_query($conn, $qry);
$len = mysqli_num_rows($result);

$firstname = [];
$lastname = [];
$email = [];
$phone = [];
$datetime = [];
$id = [];

for ($i = 0; $i < $len; $i++) {
    $all = mysqli_fetch_assoc($result);
    $firstname[$i] = $all['firstname'];
    $id[$i] = $all['id'];
    $lastname[$i] = $all['lastname'];
    $email[$i] = $all['email'];
    $phone[$i] = $all['phone_no'];
    $datetime[$i] = $all['time_stamp'];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .test {
            width: 60%;
            margin: 0 auto;
            margin-top: 10rem;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="test">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php


                // echo $len;
                for ($i = 0; $i < $len; $i++) {
                    $x = $_GET['firstname'];
                    echo<<<tableData
                    <tr>
                    <th scope="row">$id[$i] </th>
                    <td>$firstname[$i] </td>
                    <td>$lastname[$i] </td>
                    <td>$email[$i]</td>
                    <td>
                    <a href="update.php?user=$id[$i]">
                        <button class="btn btn-primary">Update</button>
                    </a>
                    <a href="delete.php?user=$id[$i]">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                    </td>
                    </tr>
tableData;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>