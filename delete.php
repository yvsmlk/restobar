<?php
include 'connexion.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from 'menu' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"Deleted successfull";
    }else{
        die(mysqli_error($conn));
    }
}
?>