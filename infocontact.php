<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>infocontact</title>
   <link rel="stylesheet" href="css/style2.css"/>
</head>
<body>


    <nav align="left">
      <h1> <span class="logo">DM</span><em>clothing</em></h1>
       
      <img class="icon" src="images/g14" alt="hello!">
     
    
        <div class="link" >
          <a href="index.php">Accueil</a>
          <br><br>
            <a href="infocontact.php">Contact</a>
            <br><br>
            <a href="">Membre</a>
          <br><br>
          <a href="">Commandes</a>
          <br><br>
          <a href="">Produits</a>
        </div>
        </nav>
        
        
        <?php
$mysqli = new Mysqli("localhost", "root", "", "contact");
$résultat = $mysqli->query("SELECT * FROM infocontact");
echo '<table border="6"> <tr>';
while($colonne = $résultat->fetch_field())
{
echo '<th>' . $colonne->name . '</th>';
}
echo "</tr>";
while ($ligne = $résultat->fetch_assoc())
{
echo '<tr>';
foreach ($ligne as $indice => $information)
{
echo '<td>' . $information . '</td>';
}
echo '</tr>';
}
echo '</table>';

?>
<!-- <script src="js/jquery.js"></script>
<script src="js/app.js"></script> -->



</body>



</html>