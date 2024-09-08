<!-- <?php

include '../components/connect.php';

// session_start();

// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:admin_login.php');
// }

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $cpass = $_POST['cpass'];

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
   $select_admin->execute([$name]);

   if($select_admin->rowCount() > 0){
      $message[] = 'username already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_admin = $conn->prepare("INSERT INTO `admins`(name, password,email) VALUES(?,?,?)");
         $insert_admin->execute([$name, $cpass,$email]);
         $message[] = 'new admin registered successfully!';
      }
   }

}

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- Boxicons -->
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <!-- My CSS -->
   <link rel="stylesheet" href="style.css">

   <title>Dashbord</title>
</head>

<body>


<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="messages">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

   <section class="add-products">
      <form action="" method="post" enctype="multipart/form-data">
         <div class="flex">
            <div class="inputBox">

               <input type="text" name="name" required placeholder="Enter Username For New Admin" maxlength="20"
                  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="inputBox">

               <input type="email" name="email" required placeholder="Enter Email For New Admin" maxlength="20"
                  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <div class="inputBox">
               <input type="password" name="pass" required placeholder="Enter Password" maxlength="20" class="box"
                  oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <div class="inputBox">
               <input type="password" name="cpass" required placeholder="confirm Password" maxlength="20" class="box"
                  oninput="this.value = this.value.replace(/\s/g, '')">
            </div>


         </div>

         <input type="submit" value="register now" class="add-btn" name="submit">

         </div>
      </form>


   </section>

   <!-- ______________________________ -->
   </div>

   </div>
   </main>
   <!-- MAIN -->
   </section>
   <!-- CONTENT -->


   <script src="script.js"></script>
</body>

</html>