<?php

session_start(); // Start the session
//this file handles the user logout
// Unset session variables
session_unset();
unset($_SESSION["user"]);
unset($_SESSION["userEmail"]);
unset($_SESSION["userPassword"]);

// Redirect to home page
header("Location: ../home.php");
exit(); // Stop further execution
