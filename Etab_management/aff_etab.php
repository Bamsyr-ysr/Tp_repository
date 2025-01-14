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

$etabs = $conn->query("SELECT * FROM etab")->fetchAll();
?>
<div class="container">
<h2>Liste des Établissements</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Adresse</th>
    </tr>
    </thead>
    <?php foreach ($etabs as $etab): ?>
        <tbody>
        <tr>
            <td><?php echo $etab['id']; ?></td>
            <td><?php echo $etab['name']; ?></td>
            <td><?php echo $etab['address']; ?></td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
<a href="selection.php">Retour</a>
</div>
</body>
</html>
