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

$studs = $conn->query("
    SELECT stud.id, stud.name AS stud_nom, stud.age, etab.name AS etab_nom
    FROM stud
    LEFT JOIN etab ON stud.etab_id = etab.id
")->fetchAll();
?>
<div class="container">
    <h2>Liste des Étudiants</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Âge</th>
            <th>Établissement</th>
            <th>Actions</th>
        </tr>
        </thead>
        <?php foreach ($studs as $stud): ?>
            <tbody>
            <tr>
                <td><?php echo $stud['id']; ?></td>
                <td><?php echo $stud['stud_nom']; ?></td>
                <td><?php echo $stud['age']; ?></td>
                <td><?php echo $stud['etab_nom'] ?: 'Non assigné'; ?></td>
                <td class="actions">
                    <a href="modif_stud.php?id=<?php echo $stud['id']; ?>">Modifier</a>
                    <a href="del_stud.php?id=<?php echo $stud['id']; ?>" onclick="return confirm('Êtes-vous sûr ?');" class="delete">Supprimer</a>
                </td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
    <a href="selection.php">Retour</a>
</div>

</body>
</html>
