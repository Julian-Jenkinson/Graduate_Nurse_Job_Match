
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//require('model/database.php');
//require('model/jobs_db.php');
 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'home';
    }
}
if ($action == 'home') {
    include('home.php');
} 
?>






