<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="about">
        <div class="flex">

            <div class="image">
                <img src="images\about2.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere id officia assumenda temporibus?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>
    </div>


    <section class="authors">

        <h1 class="title">Owner</h1>

        <div class="box-container">

            <div class="box">
                <img src="images\eslam hany.jpeg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Eslam Hany Mohamed</h3>
            </div>

            <div class="box">
                <img src="images\islam hamza.jpeg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Islam Mohamed Hamza</h3>
            </div>



        </div>

    </section>

    <div class="clint" id="clint">
        <div class="container-clint">
            <div class="special-heading">REVIEWS</div>
            <p>Some Client Speaks</p>
            <hr>
            <div class="clint-content">
                <div class="col">
                    <div class="person">
                        <div class="img"><img src="images\pic-1.png" alt=""></div>
                        <div class="text">
                            <h4 class="name">Dennis Jacques</h4>
                            <p class="address">User from USA</p>
                        </div>
                    </div>
                    <p class="comment">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ratione doloribus laboriosam facilis exercitationem quasi cupiditate ipsam dolores vel minus quidem
                    </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="col">
                    <div class="person">
                        <div class="img"><img src="images\pic-3.png" alt=""></div>
                        <div class="text">
                            <h4 class="name">Jay Shah</h4>
                            <p class="address">Founder at Icomatic Pvt Ltd</p>
                        </div>
                    </div>
                    <p class="comment">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum rem natus culpa, dolore vitae libero, placeat itaque facere eveniet ipsam quidem soluta qui velit. Quasi blanditiis error ullam odit voluptates.
                    </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                </div>
                <div class="col">
                    <div class="person">
                        <div class="img"><img src="images\pic-2.png" alt=""></div>
                        <div class="text">
                            <h4 class="name">Jay Shah</h4>
                            <p class="address">Founder at Icomatic Pvt Ltd</p>
                        </div>
                    </div>
                    <p class="comment">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum rem natus culpa, dolore vitae libero, placeat itaque facere eveniet ipsam quidem soluta qui velit. Quasi blanditiis error ullam odit voluptates.
                    </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                </div>
                <div class="col">
                    <div class="person">
                        <div class="img"><img src="images\pic-4.png" alt=""></div>
                        <div class="text">
                            <h4 class="name">Jay Shah</h4>
                            <p class="address">Founder at Icomatic Pvt Ltd</p>
                        </div>
                    </div>
                    <p class="comment">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum rem natus culpa, dolore vitae libero, placeat itaque facere eveniet ipsam quidem soluta qui velit. Quasi blanditiis error ullam odit voluptates.
                    </p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="js\script.js"></script>
</body>

</html>