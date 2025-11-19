
<?php
if (isset($_POST['submit'])) {

    // Connexion
    $conn = mysqli_connect("localhost", "root", "", "dija_parf_db");

    if (!$conn) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    // Sécurisation des données
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Hash du mot de passe
    $mot_de_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Requête préparée (sécurisée)
    $sql = "INSERT INTO utilisateurs (prenom, nom, email, mot_de_pass) 
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $prenom, $nom, $email, $mot_de_pass);

    if (mysqli_stmt_execute($stmt)) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
























