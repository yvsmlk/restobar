<?php
include "connexion.php";
if(
    isset($_POST["login"])
)

    $name=$_POST['name'];

    $menu=$_POST['menu'];

    $invite=$_POST['invite'];

    $email=$_POST['email'];

    $number=$_POST['number'];

    $adresse=$_POST['adresse'];

    $confirmation=$_POST['confirmation'];

    $info=$_POST['info'];

    
    $sql = "INSERT INTO Restaurant(name,menu,invite,email,number,adresse,confirmation,info)
    VALUES ('$name ','$menu ','$invite ', '$email','$number','$adresse', '$confirmation', '$info')";
    if(mysqli_query($link,$sql)){
        echo'insertion effectuer';
    }
    else{
        echo'insertion ratee '.$sql. "<br>". mysqli_error($link);
    
    

    
        
    

}





