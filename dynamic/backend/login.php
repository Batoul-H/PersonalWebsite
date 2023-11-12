<?php
    //$var=$_POST["name in html form"];

    $un =$_POST["username"];
    $ps=$_POST["password"];


    // Read existing users from JSON file
    $usersFile = 'users.json';
    $users = json_decode(file_get_contents($usersFile), true) ?? [];
    if (!file_exists($usersFile) || empty($users)) {
        // we dont have any users yet
        header('Location: ../pages/signup.html');
        exit;
    }

    // Check if the user exists
    $loggedIn = false;
    foreach ($users as $existingUser) {
        if ($existingUser['username'] === $un && $existingUser['password'] === $ps) {
            $loggedIn = true;
            break;
        }
    }

    if ($loggedIn) {
        // Redirect to a main
        header('Location: ../pages/main.html');
        exit;
    } else {
        // Redirect to a login failure page or perform other actions
        echo ("Login failed. Please try again or signup if you do not have an account.");
            
        // Use JavaScript to redirect after the content has been sent
        echo '<script>window.location.href = "../index.html";</script>';
        exit;
    }
    
?>