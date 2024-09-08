<?php

include '../components/connect.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
    $select_admin->execute([$name]);

    if ($select_admin->rowCount() > 0) {
        $message[] = 'Username already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password not matched!';
        } else {
            $insert_admin = $conn->prepare("INSERT INTO `admins`(name, password, email) VALUES(?, ?, ?)");
            $insert_admin->execute([$name, $cpass, $email]);
            $message[] = 'New admin registered successfully!';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
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
    width: 100%;
    align-items: center;
    flex-direction: column;
    justify-content: space-evenly;
        }

        form {
            width: 30rem;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 1em;
            box-sizing: border-box;
            display: grid;
            justify-items: center;
            align-content: stretch;
            padding: 1.5em;
            margin: 0px 10px;
        }

        h2 {
            color: #fff;
            text-align: center;
            margin-top: 1em;
            font-size: 2.5em;
        }

        .inputBox input {
            border: none;
            width: 99%;
            height: 2em;
            border-bottom: 0.1em solid #0094ff;
            background: none;
            padding: 0.6em;
            color: #fff;
            margin-bottom: 1em;
        }

        .messages {
         background: #ff4d4d;
    color: #fff;
    padding: 0.5em 1em;
    border-radius: 5px;
    font-size: 1em;
    width: 400px;
    display: flex;
    text-align: center;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
        }

        .messages i {
            cursor: pointer;
        }

        .add-btn {
            background: #0077ff;
            color: #fff;
            border: none;
            border-radius: 0.9em;
            padding: 0.7em 1.5em;
            font-size: .9em;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .add-btn:hover {
            background: #fff;
            color: #0077ff;
        }

        .login-link {
            margin-top: 1em;
            color: #fff;
            font-size: 1em;
            text-align: center;
        }

        .login-link a {
            color: #0094ff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: #00ccff;
        }
    </style>
</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '
            <div class="messages">
               <span>' . htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') . '</span>
               <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <h2>Register Admin</h2>
        <div class="inputBox">
            <input type="text" name="name" required placeholder="Enter Username For New Admin" maxlength="20"
                class="box" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>
        <div class="inputBox">
            <input type="email" name="email" required placeholder="Enter Email For New Admin" maxlength="50"
                class="box" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <div class="inputBox">
            <input type="password" name="pass" required placeholder="Enter Password" maxlength="20" class="box"
                oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <div class="inputBox">
            <input type="password" name="cpass" required placeholder="Confirm Password" maxlength="20" class="box"
                oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <input type="submit" value="Register Now" class="add-btn" name="submit">

        <div class="login-link">
            Already have an account? <a href="admin_login.php">Log in</a>
        </div>
    </form>

    <script src="script.js"></script>
</body>

</html>
