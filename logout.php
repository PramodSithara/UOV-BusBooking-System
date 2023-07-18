<?php

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['$name'])) {
    // If not logged in, redirect to login page
    header("Location: index.html");
    exit();
}

// Check if user has logged out
if (isset($_SESSION['logged_out']) && $_SESSION['logged_out'] === true) {
    // If user has logged out, unset the session variable and redirect to login page
    unset($_SESSION['logged_out']);
    header("Location: index.html");
    exit();
}

// Your profile page code goes here

/*
// Start session
session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // If logged in, destroy session and redirect to login page
    session_unset();
    session_destroy();
    // Set session variable to indicate user has logged out
    $_SESSION['logged_out'] = true;
    header("Location: index.html");
    exit();
} else {
    // If not logged in, redirect to login page
    header("Location: index.html");
    exit();
}


/*
// Start session
session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // If logged in, destroy session and redirect to login page
    session_unset();
    session_destroy();

    // Prevent caching of the page
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Location: login.php");
    exit();
} else {
    // If not logged in, redirect to login page
    header("Location: index.html");
    exit();

    /*
    
    <?php
// Start session
session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // If logged in, destroy session and redirect to login page
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

    
}

*/
?>