<?php
$user = 'root';
$password = 'root';
$db = 'Projet2';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if($conn-> connect_error){
    die('connection failed:' .$conn->connect_error);
}
else
echo'connection successful';

?>
