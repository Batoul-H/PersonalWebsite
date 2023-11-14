<?php
    session_start();
    if (!isset($_SESSION["username"])){
        $un = $_SESSION["username"];
        header("location:../index.php");
    }
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link href="../images/title-dark.png" rel="icon" >
        <title>Batoul Hariri</title>
        <link href="../css/icon.css" rel="stylesheet">
        <link href="../css/master.css" rel="stylesheet">
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

        <div class="intro">
            
            <div class="intro-text">
                <p >
                Hi. I’m Batoul, a Bioinformatics pre-medical student at the Lebanese American University. 
                I am also studying towards a minor in Computer Science. 
                As you can imagine, my schedule is pretty hectic. Nevertheless, I do my best to make time for things I enjoy.<br><br>
    
                I love contemporary literature, this genre dominates my bookshelf, my most recent book being "Before the Coffee gets Cold". 
                I also enjoy rewatching Studio Ghibli movies. While these movies are aimed at a younger audeince, 
                they give me a sense of nostalgia. <a class="link" href="https://www.youtube.com/watch?v=0jZNKV5ROBM" target="_blank">Hisaishi’s sweet melodies</a> and Miyazaki’s animations never cease to amaze me. <br><br>
    
                I adore my cat, Kiwi. You can see him in the gallery section.
                I also read and watch other genres. If you have any book or movie recommendations feel free to drop them in the contact section. ^-^
                </p> 
            </div>

            <div class="intro-image">
                <img src="../images/tripoli.jpg" alt="me in tripoli" />
            </div>

        </div>

        <script>
            function logout () {
                location.href = "../index.php";
            }
        </script>
        
        

    </body>

</html>