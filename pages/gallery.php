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
        <link href="../css/gallery.css" rel="stylesheet">
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
        


        <div class="gallery">
           

            <?php
            
                # note that since we want to print the value of $var not literal, we must echo with double quotes
                $imageNames = file('../gallery.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach($imageNames as $image){
                    $imageLink = "../images/" . $image;
                    echo '<div class="img-cont">';
                        echo "<a class=\"img-link\" href=\"$imageLink\" target=\"_self\" >";
                            echo "<img src=\"$imageLink\">";
                        echo '</a>';
                    echo '</div>';

                }

            ?>


        </div>
            

        <script>
            function logout () {
                location.href = "../index.php";
            }
        </script>

    </body>

</html>