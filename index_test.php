<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>

<h2>Entrez votre prénom et votre nom de famille :</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Prénom: <input type="text" name="prenom">
    <br><br>
    Nom de famille: <input type="text" name="nom">
    <br><br>
    <input type="submit" name="submit" value="Envoyer">
</form>

<?php
// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    // Vérification si les champs ne sont pas vides
    if (!empty($prenom) && !empty($nom)) {
        // Affichage du message de salutation
        echo "<h3>Salut, $prenom $nom !</h3>";
    } else {
        // Affichage d'un message d'erreur si les champs sont vides
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
    }
}
?>

</body>
</html>

