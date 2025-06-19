<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des factures</title>
</head>
<body>
  <h1>Liste des factures enregistrées</h1>

<?php
$filename = "factures.txt";

if (file_exists($filename)) {
    $factures = file($filename);
    
    if (count($factures) > 0) {
        echo "<ul>";
        foreach ($factures as $facture) {
            echo "<li>" . htmlspecialchars($facture) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucune facture enregistrée pour le moment.</p>";
    }
} else {
    echo "<p>Fichier des factures introuvable.</p>";
}
?>

</body>
</html>
