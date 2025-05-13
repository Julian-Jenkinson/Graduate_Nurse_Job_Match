<?php

session_start(); // Start the session
//this file handles the user logout
// Unset session variables
session_unset();
unset($_SESSION["employer"]);
unset($_SESSION["empEmail"]);
unset($_SESSION["empPassword"]);

// Redirect to home page
header("Location: ../home.php");
exit(); // Stop further execution
