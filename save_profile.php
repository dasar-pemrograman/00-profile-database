<?php

// to read a POST parameter sent by form use the $_POST global array.
// the index of the $_POST is the name of the HTML element we want to read.
// the following line reads the value in the HTML element named 'full_name'
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$action= $_POST['action'];

// create an empty array
$profiles = [];

// check the session (at $_SESSION global variable) wheter it stores profiles.
if (isset($_SESSION['profiles'])) {
    // when the session does contain profiles use it by replacing the empty array.
    $profiles = $_SESSION['profiles'];
}

// add or simply replace a profile based on the input.
$profiles[$email] = [
    'full_name' => $full_name,
    'email' => $email
];

// put the profiles back to the session.
$_SESSION['profiles'] = $profiles;

// redirect to another page
header("Location: new_profile.php");
