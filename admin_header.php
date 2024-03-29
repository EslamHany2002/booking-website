<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Book<span> Shop</span></a>

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <div class="banner">
            <div class="avatar"></div>
         </div>
         <h1> <span><?php echo $_SESSION['admin_name']; ?></span></h1>
         
         <div class="left">
            <p><i class="fa-solid fa-envelope"></i></p>
            <p><i class="fa-solid fa-phone"></i></p>
         </div>
         <div class="right">
            
            <p> <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <p>  <span><?php echo $_SESSION['admin_phone']; ?></span></p>
         </div>

         
         
         <a href="logout.php" class="delete-btn">logout</a>
      </div>
      

   </div>

</header>