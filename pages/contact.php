<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../images/title-dark.png" rel="icon"  >
        <title>Batoul Hariri</title>
        <link href="../css/icon.css" rel="stylesheet">
        <link href="../css/master.css" rel="stylesheet">
        <link href="../css/contact.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

    <body>
        <div class="row" id="header">
            <div id="dropdown-menu">
                <span><i class="icon menu-icon"></i>Menu</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="./main.php"> 
                            <li>Main</li>
                        </a>
                        <a href="./cv.php">
                            <li>CV</li>   
                        </a>
                        <a href="./gallery.php">
                            <li>Gallery</li>   
                        </a>
                        <a href="./contact.php">
                            <li>Contact</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="welcome-msg" style="float: right;">
                <div class="welcome-text" style="display: inline-block;"> 
                    <?php
                        echo '<p>';
                        echo "Welcome, ";
                        echo $_SESSION["username"];
                        echo '</p>';
                    ?>
                </div>
                <button class="welcome-button" style="display: inline-block;" id="button" onclick="logout()">
                    <i class="fa fa-power-off"></i> 
                </button>
            </div>

        </div>
        
        <div class="contact-img">
            <img src="../images/flowers.jpg">
        </div>


        <div class="contact-text">
            <h1 style="text-align: center; font-weight: normal; font-size: medium; margin-left: 25%; margin-right: 25%; text-transform: none; letter-spacing: 0.1rem;">
                If you want to connect, drop some book or movie recommendations, 
                or just want more cat photos, feel free to check the links below.
            </h1>
        </div>

        <div class="contact-gallery" >

            <div class="small">
                <a class="img-link" href="https://www.linkedin.com/in/batoul-hariri-494598218/" target="_blank"><img src="../images/Linkedin1.png"></a>
            </div>
           
            <div class="small">
                 <a class="img-link" href="https://www.facebook.com/batoul.hariri.77" target="_blank"><img src="../images/facebook.png"></a>
            </div>

            <div class="small">
                <a class="img-link" href="https://www.instagram.com/batoul.i.hariri/" target="_blank"><img src="../images/instagram.png"></a>
            </div>

        </div>

        <script>
            function logout () {
                location.href = "../index.php";
            }
        </script>

    </body>

</html>
