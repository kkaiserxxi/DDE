<?php

include '../components/connect.php';

session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND password = ?");
    $select_admin->execute([$name, $pass]);
    $row = $select_admin->fetch(PDO::FETCH_ASSOC);

    if ($select_admin->rowCount() > 0) {
        $_SESSION['admin_id'] = $row['admin_id'];
        header('location:admin.php');
    } else {
        $message[] = 'incorrect username or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png">
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/73358cb070.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background: url(water.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        form {
            width: 30rem;
            height: 67vh;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 1em;
            box-sizing: border-box;
            display: grid;
            justify-items: center;
            align-content: stretch;
            margin: 0px 10px;
        }

        h2 {
            color: #fff;
            text-align: center;
            margin-top: 1.8em;
            font-size: 3em;
        }

        input[type="text"], [type="password"] {
            border: none;
            width: 99%;
            height: 2em;
            border-bottom: 0.1em solid #0094ff;
            background: none;
            padding: 0.6em;
            color: #fff;
        }

        #logoLogin {
            position: fixed;
            top: 12px;
            left: 10px;
            width: 4.7em;
            height: 4.7em;
        }

        .qqq {
            width: 75%;
        }

        #inputButtonLogin {
            width: 10.1em;
            height: 3.18em;
            background: #0077ff;
            border: none;
            color: #fff;
            border-radius: 0.9em;
            font-size: .9em;
        }

        #inputButtonLogin:hover {
            background: #fff;
            color: #0077ff;
            cursor: pointer;
        }

        .register-link {
            margin-top: 1em;
            color: #fff;
            font-size: 1em;
            text-align: center;
        }

        .register-link a {
            color: #0094ff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-link a:hover {
            color: #00ccff;
        }
    </style>

</head>

<body>
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo ' -->
            <div class="message">
                <span>' . $message . '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>

    <a href="admin_login.php"><img id="logoLogin" src="https://cdn.discordapp.com/attachments/1270507703516790856/1280842951731183736/DALLE_2024-08-21_14.51.40_-_A_business_logo_featuring_a_drone_with_a_camera_hovering_above_stylized_waves_with_the_text_DEEP_SEA_EXPLORER_below_it._The_drone_should_have_a_sl.webp?ex=66d98d74&is=66d83bf4&hm=e0723514dd23366976942b4983888495407509dfae934bd24b1f5491d74450ec&.png" alt="logo"></a>

    <form action="" method="post" enctype="multipart/form-data" id="loginForm">

        <h2>login Admin</h2>
        <div class="qqq">
            <input id="inputLoginText" name="name" type="text" placeholder="Your User Name">
            <p id="p1"></p>
        </div>

        <div class="qqq">
            <input id="inputLoginPassword" name="pass" type="password" placeholder="Enter password">
            <p id="p2"></p>
        </div>

        <input id="inputButtonLogin" name="submit" type="submit" value="login">

        <!-- Register Link -->
        <p class="register-link">Don't have an account? <a href="register.php">Register Here</a></p>
    </form>

    <script src="signup_in.js"></script>

</body>
</html>
