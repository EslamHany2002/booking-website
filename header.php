<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Solom<span>.Book</span> </a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="orders.php">Orders</a>
            <a href="contact.php">Contact</a>

         </nav>

         <p> new <a href="register.php">Register</a> | <a href="login.php"> Login</a> </p>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
            $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $cart_rows_number = mysqli_num_rows($select_cart_number);
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span></span> </a>
         </div>

         <div class="account-box">
            <div class="banner">
               <div class="avatar"></div>
            </div>
            <h1> <span><?php echo $_SESSION['user_name']; ?></span></h1>
            <div class="infooo">
               <div class="left">
                  <p><i class="fa-solid fa-envelope"></i></p>
                  <p><i class="fa-solid fa-phone"></i></p>
               </div>
               <div class="right">
                  <p> <span><?php echo $_SESSION['user_email']; ?></span></p>
                  <p> <span><?php echo $_SESSION['user_phone']; ?></span></p>
               </div>
            </div>




            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>