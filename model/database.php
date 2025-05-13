<?php
$dsn      = "mysql:host=localhost;dbname=job_match";
$username = "itcrew";
$password = "USQ3600#";

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>

