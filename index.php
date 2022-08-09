<?php
    session_start();

    include ('function.php');

    if(user_logged_in()) {
        header('location: admin.php');
    }


    if(isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $keep = isset($_POST['keep']);

        define('EMAIL', 'protapghosh937@gmail.com');
        define('PASSWORD', '12345');

        if($email == EMAIL && $password == PASSWORD) {

            $_SESSION['success'] = '';

            setcookie('success', '$keep', time() + 60*60*24*365);

            header('location: admin.php');
        }
        else {
            $error = "Email or Password is incorrect, try again";
        }

    }
    // else {
    //     setcookie('success', '');
    // }







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Facebook-log in or sing up</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="fb_text">
                    <img src="facebook.svg" alt="Facebook">
                    <h2>Facebook helps you connect and share with the people in your life.</h2>
                </div>
            </div>

            <div class="col-6">
                <div class="fb_login">
                    <form action="" method="POST">
                        <input type="text" name="email" Placeholder="Email address or phone number" required> <br />
                        <input type="password" name="password" placeholder="Password" required> <br />
                        <input type="checkbox" id="keep" name="keep" value="box">
                        <label for="keep"> Keep me logged in </label> <br />
                        <input type="submit" name="submit" value="Log In"> <br />
                        <a href="#">Forgotten password?</a>
                        <hr>
                        <button>Create New Account</button>
                    </form>
                    <p><a href="#">Create a Page </a> for a celebrity, brand or business.</p>

                    <?php if(isset($error)) {
                        echo "<strong>" .$error. "</strong>";
                    } ?>

                </div>
            </div>
        </div>
    </div>

    <div class="note">
        <i> <b> NOTE: </b>Please use these details to login (Invalid info is not acceptable).</i> <br/> <br/>
        <i>
            <b> Email Address: </b> protapghosh937@gmail.com  <br/>
            <b> Password: </b> 12345
        </i>
    </div>
    
    
</body>
</html>