<?php 

//Connceter la base de données
$conn = mysqli_connect("localhost", "root", "", "dija_parf_db");

 //Vérifier la connexion

 if(isset($_POST['submit'])) {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO utilisateurs (prenom, nom, email, password) VALUES($prenom, $nom, $email, $password)";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Inscription réussie...";
    }
 } else {
    echo " Les informations saisie sont incorrectes! "

}


?>