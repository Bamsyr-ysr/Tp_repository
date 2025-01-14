<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="etab_mang.css">
    <title>Document</title>
</head>
<body>
<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO etab (name, address) VALUES (?, ?)");
    $stmt->execute([$name, $address]);
    header("Location: aff_etab.php");
}
?>
<div class="container">
    <h2>Ajouter un Établissement</h2>
    <form method="POST" action="">
        <label>Nom de l'Établissement : <input type="text" name="name" required></label><br>
        <label>Adresse : <input type="text" name="address" required></label><br>
        <button type="submit">Ajouter</button>
    </form>
    <a href="selection.php">Retour</a>
</div>

</body>
</html>
