<?php
session_start();
include "dbconn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data=trim($data);
       $data=stripslashes($data);
       $data=htmlspecialchars($data);
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

