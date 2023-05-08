<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

   <link rel="stylesheet" href="css\style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

   <?php include 'header.php'; ?>

   <div class="contaniner-r" id="Contact Us">
      <div class="contact-box">
         <div class="left"></div>
         <div class="right">
            <h2>Contact Us</h2>
            <form action="" method="post">
               <input type="text" name="name" required placeholder="enter your name" class="box">
               <input type="email" name="email" required placeholder="enter your email" class="box">
               <input type="number" name="number" required placeholder="enter your number" class="box">
               <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
               <input type="submit" value="send message" name="send" class="btn">
            </form>
         </div>
      </div>
   </div>

   <?php include 'footer.php'; ?>

   <script src="js\script.js"></script>
</body>

</html>