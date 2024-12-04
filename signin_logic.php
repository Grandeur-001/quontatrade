<?php
include 'connection.php';

session_start(); // Start the session

$GLOBALS['ERROR'] = '';

if (isset($_POST['signin_btn'])) {
    login();
}

function login()
{
    global $conn;

    // Get user input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    

    // Retrieve user details from the database
    $select = "SELECT * FROM users WHERE email = '$email'";
    $sql = mysqli_query($conn, $select);

    if (mysqli_num_rows($sql) > 0) {
        $fetch = mysqli_fetch_assoc($sql);

        $storedPassword = $fetch['password'];
        $isPasswordCorrect = false;

        // Check if the stored password is hashed or plain text
        if (password_verify($password, $storedPassword)) {
            // If the password matches the hashed value
            $isPasswordCorrect = true;
        } elseif ($password === $storedPassword) {
            // If the stored password is plain text
            $isPasswordCorrect = true;

            // Hash the plain text password and update the database
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $updateQuery = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
            mysqli_query($conn, $updateQuery);
        }

        if ($isPasswordCorrect) {
            // Correct password
            $id = $fetch['user_id'];
            $name = $fetch['lastname']; 
            $name2 = $fetch['firstname']; // Adjust field as per your database
            $email = $fetch['email'];
            $dob = $fetch['dob'];
            $gender = $fetch['gender'];
            $nationality = $fetch['nationality'];
            $state = $fetch['state'];
            $phone = $fetch['phone']; // Fetch phone number from database

            // Store user details in session
            $_SESSION['user_id'] = $id;
            $_SESSION['user_firstname'] = $name;
            $_SESSION['user_lastname'] = $name2;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_dob'] = $dob;
            $_SESSION['user_gender'] = $gender;
            $_SESSION['user_nationality'] = $nationality;
            $_SESSION['user_state'] = $state;
            $_SESSION['user_phone'] = $phone; // Store phone in session

            header('Location:dashboard.php');
            exit();
        } else {
            // Incorrect password
            $GLOBALS['ERROR'] = 'Invalid login details.';
        }
    } else {
        // User not found
        $GLOBALS['ERROR'] = 'Invalid login details.';
    }

    
}

$phone = isset($_SESSION['user_phone']) ? $_SESSION['user_phone'] : '';


?>
