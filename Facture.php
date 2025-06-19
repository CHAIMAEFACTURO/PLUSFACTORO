<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter une facture</title>
</head>
<body>
  <h1>Ajouter une nouvelle facture</h1>
  <form method="POST" action="">
    <label>Nom du client :</label><br>
    <input type="text" name="client" required><br><br>

    <label>Montant :</label><br>
    <input type="number" name="montant" required><br><br>

    <label>Date :</label><br>
    <input type="date" name="date" required><br><br>

    <button type="submit">Enregistrer</button>
  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client = $_POST["client"];
    $montant = $_POST["montant"];
    $date = $_POST["date"];

    $ligne = "$client | $montant MAD | $date\n";
    file_put_contents("factures.txt", $ligne, FILE_APPEND);

    echo "<p>✅ Facture enregistrée avec succès !</p>";
}
?>
</body>
</html>
