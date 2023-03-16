<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css\admin_style.css">

</head>
<body>
<?php include 'admin_header.php'; ?>    

<section class="users">
<h1 class="title"> user accounts </h1>

<div class="box-container">
   <?php
      $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
      while($fetch_users = mysqli_fetch_assoc($select_users)){
   ?>
   <div class="card-user">
  <div class="card-header-user">
  <p><span style="color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_users['user_type']; ?></span></p>
  </div>
  <div class="card-body-user">
    <p><strong>ID:</strong><span><?php echo $fetch_users['id']; ?></span></p>
    <p><strong>Name:</strong><span><?php echo $fetch_users['name']; ?></span></p>
    <p><strong>Email:</strong><span><?php echo $fetch_users['email']; ?></span></p>
    <p><strong>Phone:</strong><span><?php echo $fetch_users['phone']; ?></span></p>

    <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
  </div>
</div>
   <?php
      };
   ?>
</div>
</section>


<!-- <div class="card-user">
  <div class="card-header-user">
    User Information
  </div>
  <div class="card-body-user">
    <p><strong>ID:</strong><span><?php echo $fetch_users['id']; ?></span></p>
    <p><strong>Name:</strong><span><?php echo $fetch_users['name']; ?></span></p>
    <p><strong>Email:</strong><span><?php echo $fetch_users['email']; ?></span></p>
    <p><strong>Phone:</strong><span><?php echo $fetch_users['phone']; ?></span></p>
    <p><strong>User Type:</strong><span style="color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_users['user_type']; ?></span></p>
    <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
  </div>
</div> -->


<!-- <div class="card-user">
  <div class="user-info-user">
    <div class="user-image-user">
      <img src="images\pic-5.png" alt="User Image">
    </div>
    <div class="user-details-user">
      <h2 class="user-name-user">John Doe</h2>
      <p class="user-type-user">Administrator</p>
      <ul class="user-contact-user">
        <li><i class="fa fa-envelope"></i> <a href="mailto:johndoe@example.com">johndoe@example.com</a></li>
        <li><i class="fa fa-phone"></i> (555) 555-5555</li>
      </ul>
    </div>
  </div>
</div> -->

<!-- <div class="card-user">
  <div class="card-body-user">
    <h3>User Information</h3>
    <ul>
      <li><strong>ID:</strong> <span id="user-id">1234</span></li>
      <li><strong>Name:</strong> <span id="user-name">John Doe</span></li>
      <li><strong>Email:</strong> <span id="user-email">johndoe@example.com</span></li>
      <li><strong>Phone:</strong> <span id="user-phone">(555) 555-5555</span></li>
      <li><strong>User Type:</strong> <span id="user-type">Administrator</span></li>
    </ul>
  </div>
</div> -->



    <!-- custom admin js file link  -->
<script src="js\admin_script.js"></script>
</body>
</html>