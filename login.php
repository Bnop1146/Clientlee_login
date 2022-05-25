<?php
session_start();
// Change this to your connection info.

require 'init.php';


// Now we check if the data from the login form was submitted, isset() will check if the data exists.

    if (!isset($_POST['username'], $_POST['password'])) {
        // Could not get the data that should have been sent.
        exit('Udfyld venligst både E-mail og Adgangskode felterne!');
    }

    $sql = "SELECT id, password FROM accounts WHERE username = :username";
    $bind = [":username" => $_POST['username']];
    $stmt = $db->sql($sql, $bind);

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $db->sql($sql, $bind)) {

    if (count($stmt) > 0) {

        $password = $stmt[0]->password;
        $id = $stmt[0]->id;

        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: home.php');

        } else {
            // Incorrect password
            echo 'Incorrect password!';
        }

    } else {
        // Incorrect username
        echo 'Incorrect username!';
    }
}



