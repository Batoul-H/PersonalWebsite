<?php
    session_start();
    session_unset();
    session_destroy();
?>

<html>
    <head>
        <link href="./images/title-dark.png" rel="icon" >
        <title>Batoul Hariri - Log In </title>
        <link href="./css/login.css" rel="stylesheet">
        <link href="./css/master.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

    <body>
        <div class="login">
            <div class="login-left">

                <div style="vertical-align: middle; margin: auto;">
                    <h1 style="text-align: left;">Welcome Back !</h1>
                    <h2>Login to your account</h2>

                    <div>  
                        <form id="login-form" name="login-form" method="post" action="./backend/login.php">

                            <label for="un">Username</label>
                            <br>
                            <div class="input-cont">
                                <i class="fa fa-user" aria-hidden="true" style=" float: left;"></i>
                                <input id="un" type="text" name="username" placeholder="Your username" class="input-txt">
                            </div>
                            <br>

                            <label for="ps">Password</label>
                            <br>
                            <div class="input-cont">
                                <i class="fa fa-lock" aria-hidden="true" style=" float: left;"></i>
                                <input id="ps" type="password" name="password" placeholder="Your password" class="input-txt"> 
                                <i id="togglePassword" class="fa fa-eye-slash" aria-hidden="true" style=" float: right; cursor: pointer;"></i>
                            </div>
                            <br>
                            
                            <input type="button" value="LOG IN" onclick="login()" class="button" style="margin: 25px auto 0px; " >
                            
                            <div style="margin: 20px auto 0px;">
                                <a href="./pages/signup.html" style="color: #D3AC9D ; cursor: pointer; text-align: center;"><p>Don't have an account? Sign up here!</p></a>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

            <div class="login-right">
                <img src="./images/abstract.jpg">
            </div>


        </div>

        <script>
                function login(){
                    //to get the input
                    var form=document.getElementById('login-form');
                    var un = document.getElementById('un').value.trim();
                    var ps = document.getElementById('ps').value.trim();
                    const togglePassword = document.getElementById('togglePassword');

                    //creating the error message
                    var error = '';

                    //checking if required fields are empty
                    if (un === '' ){
                        error += 'Username is required\n';
                    }
                    if(ps ==='' ){
                        error += 'Password is required\n';
                    }

                    //printing the error
                    if(error != ''){
                        alert(error);
                    }
                    else{
                        form.submit();
                    }

                    
                }
                
                //adding the event listener to toggle the eye
                togglePassword.addEventListener("click", function () {
                    // toggle the type attribute
                    const type = ps.getAttribute("type") === "password" ? "text" : "password";
                    ps.setAttribute("type", type);
                        
                    // toggle the icon
                    this.classList.toggle("fa-eye");
                    this.classList.toggle("fa-eye-slash");
                });
                    
        </script>


    </body>

</html>