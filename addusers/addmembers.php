<?php

require_once("database.php");

$f_name = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$l_name = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$dob = filter_input(INPUT_POST, 'dob');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password');
$password_hash = md5($password);

$query = "INSERT INTO users(fname, lname, dob, email, username, password) VALUES (:fname, :lname, :dob, :email, :username, :password)";
$statement1 = $db->prepare($query); 
$statement1->bindValue(":fname", $f_name); 
$statement1->bindValue(":lname", $l_name);
$statement1->bindValue(":dob", $dob);
$statement1->bindValue(":email", $email);
$statement1->bindValue(":username", $username); 
$statement1->bindValue(":password", $password); 
$statement1->execute(); 
$statement1->closeCursor(); 


 
