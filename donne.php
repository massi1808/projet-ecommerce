<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
 die("La connexion a échoué: " . mysqli_connect_error());
}


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["email"];
$message = $_POST["message"];



$sql = "INSERT INTO infocontact (nom, prenom, mail, message)
VALUES ( '$nom', '$prenom', '$mail', '$message')";

if (mysqli_query($conn, $sql)) {
 echo "Nouvel enregistrement créé avec succès";
} else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}
?>

<?php
$sql = "SELECT * FROM infocontact";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 echo "<table><tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Message</th></tr>";
 while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td>" . $row["nom"]. "</td><td>" . $row["prenom"] ."</td><td>" . $row["mail"]. "</td><td>" . $row["message"]. "</td><td>";
 }
 echo "</table>";
} else {
 echo "0 results";
}
mysqli_close($conn);
?>