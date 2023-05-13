<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>BackOffice</title>
 </head>
 <h1>BackOffice</h1>
 
 <body style="margin:50px;">
   <table class="table">
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Menu</th>
        <th>Invite</th>
        <th>Email</th>
        <th>Number</th>
        <th>Adresse</th>
        <th>Confirmation</th>
        <th>Info</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Projet2";

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Créer une requête SQL pour récupérer les données du menu


$sql = "SELECT * FROM Restaurant";
$result = mysqli_query($conn, $sql);
if(!$result){
    die("Invalid query: "  .$connexion ->error);
}
while($row = mysqli_fetch_assoc($result)) {  echo "<tr>
    <td>".$row["id"] . "</td>
    <td>".$row["mane"] ."</td>
    <td>".$row["menu"] ."</td>
    <td>".$row["invite"] ."</td>
    <td>".$row["email"] . "</td>
    <td>".$row["number"] ."</td>
    <td>".$row["adresse"] ."</td>
    <td>".$row["confirmation"] ."</td>
    <td>".$row["info"] . "</td>
    
    <td>
        <a class='btn btn-primary btn-sm' href='update'>Update</a>
        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
    </td>
    </tr>";
}

      
       ?>

    </tbody>
   </table>

    
 </body>
 </html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 