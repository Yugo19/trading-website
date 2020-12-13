<?php 

include("server#1.php");
if(isset($_POST[''])){
    $search = $_POST[''];
     $qery = "SELECT * From enregistrement WHERE Nom_produit LIKE CONCAT('%',?,'%') 
     or Type_produit LIKE CONCAT('%',?,'%') or Prix LIKE CONCAT('%',?,'%') or Sotck LIKE CONCAT('%',?,'%')
     or Date_enregistrement LIKE CONCAT('%',?,'%')";
     $result = mysqli_query($con,$qery);
     if($result->num_rows >0){
         $output = "<th>Nom_produit</th>
         <th>Type_produit</th>
         <th>Stock</th>
         <th>Date_enregistrement</th>
      ";
         while($row = $resul->fetch_assoc()){
             $output .="<tr><td>".$row["Nom_produit"]."</td><td>"
             .$row["Type_produit"]."</td><td>"
             .$row["Prix"]."</td><td>".$row["Stock"].
             "</td><td>"/$row["Date_enregistrement"]."</td></tr>";
         }
     }
}

?>