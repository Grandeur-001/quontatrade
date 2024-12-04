<?php
include 'connection.php';

session_start();


// logic to update users details

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Retrieve user details from session
$user_id = $_SESSION['user_id'];
$user_fname = $_SESSION['user_firstname'];
$user_lname = $_SESSION['user_lastname'];
$email = $_SESSION['user_email'];
$phone = $_SESSION['user_phone'];

// Initialize feedback messages
$update_success = '';
$update_error = '';

// Check if the form was submitted
if (isset($_POST['update_profile'])) {
    // Get updated form data
    $new_fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $new_lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $new_email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Update query
    $update_query = "UPDATE users SET 
                        firstname = '$new_fname', 
                        lastname = '$new_lname', 
                        email = '$new_email', 
                        phone = '$new_phone' 
                     WHERE user_id = $user_id";

if (mysqli_query($conn, $update_query)) {
    $_SESSION['user_firstname'] = $new_fname;
    $_SESSION['user_lastname'] = $new_lname;
    $_SESSION['user_email'] = $new_email;
    $_SESSION['user_phone']= $new_phone;

    $_SESSION['update_message'] = "Profile updated successfully.";
    $_SESSION['update_type'] = "success";
    $_SESSION['update_time'] = time();
} else {
    $_SESSION['update_message'] = "Error updating profile: " . mysqli_error($conn);
    $_SESSION['update_type'] = "error";
    $_SESSION['update_time'] = time();
}

header("Location: profile.php");
exit();

}


// logic to update password


$update_success = '';
$update_error = '';

// Process the form submission when the button is clicked
if (isset($_POST['change_password_btn'])) {
    // Get the form input
    $current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Fetch the user's current password from the database
    $user_id = $_SESSION['user_id'];
    $query = "SELECT password FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        // Verify the current password
        if (password_verify($current_password, $stored_password)) {
            // Check if the new password matches the confirm password
            if ($new_password === $confirm_password) {
                // Hash the new password
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

                // Update the password in the database
                $update_query = "UPDATE users SET password = '$hashed_password' WHERE id = '$user_id'";
                if (mysqli_query($conn, $update_query)) {
                    $update_success = 'Password updated successfully.';
                } else {
                    $update_error = 'Error updating password. Please try again later.';
                }
            } else {
                $update_error = 'New password and confirm password do not match.';
            }
        } else {
            $update_error = 'Current password is incorrect.';
        }
    } else {
        $update_error = 'User not found.';
    }
}





?>
