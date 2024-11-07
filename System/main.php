<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <!-- End Fonts -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Laptop Reservation</title>
</head>
<body>
    <header>
        <!-- Header -->
        <div class="head">
            <div class="logo">
                <img src="img/logo.png" alt="" width="70px">
            </div>
            <div class="list">
                <li class="here">Dashboard</li>
                <li>Reservation</li>
                <li>Contact</li>
                <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">
                    <form class="modal-content animate" action="action_page.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <img src="img/user-circle.svg" alt="Avatar" class="avatar">
                        </div>
                        
                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                            
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                            
                            <button type="submit" class="btn">Login</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>
                        
                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn">Cancel</button>
                            <span class="psw">Don't have an Account? <a href="#">Register</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <div class="main">
        <div class="slideshow-container">
            <?php 
            // You can load images dynamically from an array
            $images = ['img/11.jpg', 'img/11.jpg', 'img/11.jpg'];
            foreach ($images as $image) { ?>
                <div class="mySlides fade">
                    <img src="<?php echo $image; ?>" style="width: 80%;">
                </div>
            <?php } ?>
            <div style="text-align:center; margin:-5vh; margin-right: 300px;">
                <?php for ($i = 0; $i < count($images); $i++) { ?>
                    <span class="dot"></span>
                <?php } ?>
            </div>
        </div>
    </div> 
</body>
<script src="Script.js"></script>
</html>
