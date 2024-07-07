<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Formulaire de connexion
    echo '
    <form action="update_content.php" method="post">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Connexion</button>
    </form>';
    exit();
}

// Afficher le formulaire de modification du contenu
include 'content.php';

echo '
<form action="update_content.php" method="post">
    <label for="header_title">Titre de l\'accueil :</label>
    <input type="text" id="header_title" name="header_title" value="' . $header_title . '" required>
    
    <label for="header_description">Description de l\'accueil :</label>
    <textarea id="header_description" name="header_description" required>' . $header_description . '</textarea>
    
    <button type="submit">Mettre à jour</button>
</form>';
?>
