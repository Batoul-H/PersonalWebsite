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
        <link href="../css/master.css" rel="stylesheet">
        <link href="../css/cv.css" rel="stylesheet">
        <link href="../css/icon.css" rel="stylesheet">
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
        

        <div class="left" >
            <div style="margin-top: 120px; ">
               <h1 style="text-align: center;">  Batoul Hariri </h1>
               <h3 class="subtitle" style="text-align: center;">Pre-medical Student | Programmer | Volunteer</h3>
 
            </div>
            
            <div style="position: static ; top: 90px;">
                <div class="container">
                    <h2 style="margin-top: 80px;">profile</h2>
                    <p>
                        Hi ! I’m Batoul, a bioinformatics pre-medical student at the Lebanese American University. I aspire to become a doctor as I am fascinated with the intricate design of the human anatomy. I also love programming which is why I am also working towards a minor in computer science. Through my major, I am able to use programming to solve biological problems.
                        <br><br>I have received multiple certifications from the WHO displayed on my LinkedIn profile.  Additionally, I received a scholarship from google to study Data Analytics. I also love giving back to the community and I do so through volunteering. I am open to any new opportunity that would widen my scopes and teach me something new!
                    </p>
                </div>

                <div >
                    <h2 class="container" style="padding-bottom: 0;margin-bottom: 0;" >volunteering</h2>

                    <section class="subcontainer" style="padding-top: 0px;">
                        <h3>Biology Tutor (Education)</h3>
                        <h4>MMKN (NGO) | Online | NOV 2020 – DEC 2020, MAR 2021 – May - 2021 </h4>
                        <ul >
                            <li>Reviewing the concepts grade 8 students took in their biology course. </li>
                            <li>Re-explaining the concepts they did not understand in class </li>
                            <li> Solving exercises with the students to prepare them for their exams.</li>
                            <li> Answering their questions on the material</li>
                        </ul>
                    </section>

                    <section class="subcontainer">
                        <h3>Class Coordinator (Education) </h3>
                        <h4>MMKN (NGO) | Online | NOV 2021 – DEC 2022</h4>
                        <ul>
                            <li>Tracking student’s attendance through Microsoft Excel and reporting to MMKN  </li>
                            <li>   Sending reminders to tutors before their sessions </li>
                            <li>  Keeping track of the session time and the concepts covered.</li>
                        </ul>
                    </section>

                    <section class="subcontainer">
                        <h3>Raising Awareness about Blood Donation (Health) </h3>
                        <h4>Donner Sang Compter (DSC) | Beirut, Lebanon | JAN 2022 – MAY 2023</h4>
                        <ul >
                            <li> Recruiting blood donors in blood drives </li> 
                            <li> Taking care of the donors in the post-donation resting station </li>
                            <li>Data entry in stands (of contact information) </li>
                            <li>Fundraising in stands</li>
                        </ul>
                    </section>

                    <section class="subcontainer">
                        <h3>Newsletter Writer (Education)</h3>
                        <h4>All Girls Code (AGC) | Beirut, Lebanon | May 2023 - PRESENT</h4>
                        <ul >
                            <li>Writing parts of the monthly newsletter which contains book suggestions, icon of the month, and opportunities to inspire and allow girls all over Lebanon to pursue their passion for STEM fields</li>
                        </ul>
                    </section>

                    <section class="subcontainer">
                        <h3>Chemistry Article Writer (Education)</h3>
                        <h4>Chemistry Talk | California, USA | June 2023 - PRESENT</h4>
                        <ul>
                            <li>Writing articles on the website to explain challenging chemistry concepts in a clear and understandable manner.</li>
                        </ul>
                    </section>

                </div>
                

            </div>

        </div>



        <div class="right" >
            <img src="../images/selfie.jpg" class="profile" />

    
            <div style="position: static; padding-top:45px;">
                <div class="container" id="contact" >
                    <h2> Contact </h2>

                    <table style="text-align: left; ">
                        <tr>
                            <td> <img src="../images/Phone.png"/> </td>
                            <td> <h4  id="table-row" >+961 71 513 494</h4></td>
                        </tr>
                        <tr>
                            <td> <img src="../images/mail.png"/> </td>
                            <td><h4  id="table-row" >batoul.hariri@lau.edu</h4></td>
                        </tr>
                        <tr>
                            <td><img src="../images/location.png"/></td>
                            <td><h4  id="table-row" >Beirut, Lebanon</h4></td>
                        </tr>
                        <tr>
                            <td><img src="../images/Linkedin.png"/></td>
                            <td><h4  id="table-row" ><a class="link"  href="https://www.linkedin.com/in/batoul-hariri-494598218/" target="_blank">batoul-hariri-494598218</a></h4></td>
                        </tr>
                    </table>
                    
                    

                </div>

                <div  class="container" style="padding-top:40px;" > 
                    <h2>Education</h2>

                    <div class="subcontainer" style="padding: 0; margin-left: 0; margin-top: 0; "> 
                        <h3>B.S. in Bioinformatics / MAJOR </h3>
                        <h4>
                            Lebanese American University<br>2020–2024<br>
                        </h4>
                    </div>

                    <div class="subcontainer" style="padding-right: 0;padding-left: 0; padding-bottom: 0;margin-left: 0;"> 
                        <h3>Computer Science / Minor </h3>
                        <h4>
                            Lebanese American University<br>2020–2024<br>
                        </h4>
                    </div>
                    
                    <div class="subcontainer" style="padding-right: 0;padding-left: 0; padding-bottom: 0; margin-left: 0;"> 
                        <h3>Data Analytics / Certification</h3>
                        <h4>
                            Google through Coursera Platform<br>2022
                        </h4>
                    </div>


                </div>

                <div  class="container" >
                    <h2> skills </h2>
                    <ul>
                        <li>Java and Python programming </li>  
                        <li>Oracle database management </li>
                        <li>Script programming (RegEx, Bash shell)  </li>
                        <li>Data organization, cleaning, analysis, and visualization on excel</li>
                        <li>Data analysis and ML building on R </li>
                        <li>Data visualizations on Tableau</li>
                        <li>Using Chimera for protein structure display </li>
                        <li>Using BLAST on UNIPROT/SWISSPROT</li>
                        <li>Writing research protocols for the IRB </li>
                        <li>Formal analysis of artwork </li>
                        <li>Islamic architectural analysis </li>
                        <li>Extensive knowledge in: Chemistry (general and organic), Physics (classical and modern), Biology, Biochemistry, History of Islam, Europe, and the Middle East</li>
                        
                    </ul>

                </div>
            </div>
        
        </div>

        <script>
            function logout () {
                location.href = "../index.php";
            }
        </script>


        
    </body>

</html>