<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
    <style>

    </style>
</head>

<body>
    <div>
        <form method="post" action="./operation/submit.php">
            <div class="inp_d">
                <label for="firstname">Firstname</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter your firstname">
            </div>
            <div class="inp_d">
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter your lastname">
            </div>
            <div class="inp_d">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="inp_d">
                <label for="phone">Phone No</label>
                <input type="number" id="phone" name="phone" placeholder="Enter your phone">
            </div>
            <div class="inp_d">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <input type="submit">
            <!-- <button>login</button> -->
        </form>
    </div>
</body>

</html>