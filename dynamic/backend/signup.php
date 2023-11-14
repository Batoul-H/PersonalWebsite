<?php

    //retrieving the data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $gender = $_POST['rgender'];

    //saving into a user array
    $newUser = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'gender' => $gender,
    ];


    //opening the JSON file storing the data
    $usersFile = 'users.json';
    if (!file_exists($usersFile)) {
        // Create an empty JSON file if it doesn't exist
        file_put_contents($usersFile, '[]');
    }

    // Read existing users from JSON file and decoding it into a php file
    //The ?? [] part is the null coalescing operator. It ensures that if the file is empty or doesn't exist, an empty array is assigned to $users.
    $users = json_decode(file_get_contents($usersFile), true) ?? [];

    // Check if the user already exists by looking at parts of the arrays
    foreach ($users as $existingUser) {
        if ( (isset($existingUser['username']) && isset($existingUser['email'])) && ($existingUser['username'] === $newUser['username'] || $newUser['email'] === $existingUser['email']) ) {
            
            // User already exists, return an error
            echo "User already exists, login if you have an account or use another username and email"; 
            
            // Use JavaScript to redirect after the content has been sent
            echo '<script>window.location.href = "../index.php";</script>';
            exit;
            
        }
    }

    // User doesn't exist, proceed to add them
    $users[] = $newUser;
    // Save updated users to JSON file
    file_put_contents($usersFile, json_encode($users));
    // Redirect to a success page or perform other actions
    header("Location: ../index.php");
    exit(); // Ensure that no further code is executed after the redirect



?>