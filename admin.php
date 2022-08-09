<?php
    session_start();

    include ('function.php');
    
    $password = isset($_POST['password']) ? $_POST['password'] : "12345";
    $email = isset($_POST['email']) ? $_POST['email'] : "protapghosh937@gmail.com";

    if(!user_logged_in()) {
        header('location: index.php');
    }


    // if(!isset($_SESSION['success'])) {
    //     header('location: index.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Admin Panel</title>
    <style>
        .logout {
            /* display: block; */
            margin: auto;
            margin-top: 100px;
            width: 450px;
            padding:30px;
            text-align: center;
            border: 1px solid green;
            box-shadow: 5px 10px 30px 8px #10ac84;
            border-radius: 10px;
        }

        a {
            transition: 0.5s;
            padding: 8px 15px;
            text-decoration: none;
            border: 3px solid #82ccdd;
            background-color: #dff9fb;
        }

        a:hover {
            border: 3px solid #079992;
            background-color: #83fcdd;
        }
        
    </style>
</head>
<body>
    <div class="logout">
        <h1>Welcome to Log In</h1>
        <b>Password:</b> <?php echo $password; ?> <br />
        <b>Email Address:</b> <?php echo $email; ?> <br /> <br /> <br />

        <a href="logout.php">Log Out</a>
    </div>
</body>
</html>