
<?php include("server#1.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="searching">
        <form class="box" action="sever#2.php">
            <input type="text" placeholder="Type something to search" name="search">
        </form>
    </div>
   <table>
   <th>Nom_produit</th>
   <th>Type_produit</th>
   <th>Stock</th>
   <th>Date_enregistrement</th>

   <?php
     
    $query = "SELECT Nom_produit, Type_produit, Prix, Stock, Date_enregistrement from enregistrement";
    $result = mysqli_query($con,$query);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo"<tr><td>".$row["Nom_produit"]."</td><td>"
            .$row["Type_produit"]."</td><td>"
            .$row["Prix"]."</td><td>".$row["Stock"].
            "</td><td>"/$row["Date_enregistrement"]."</td></tr>";
        }
    }
    echo "</table>"
   ?>
   </table>
</body>
</html>