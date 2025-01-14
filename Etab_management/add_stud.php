<?php
include 'database.php';

$etabs = $conn->query("SELECT * FROM etab")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $etab_id = $_POST['etab_id'];

    $stmt = $conn->prepare("INSERT INTO stud (name, age, etab_id) VALUES (?, ?, ?)");
    $stmt->execute([$name, $age, $etab_id]);
    header("Location: aff_stud.php");
}
?>

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
<div class="container">
    <h2>Ajouter un Étudiant</h2>
    <form action="add_stud.php" method="POST">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Âge</label>
        <input type="number" id="age" name="age" required>

        <label for="etab_id">Établissement</label>
        <select name="etab_id" required>
            <option value="">--Sélectionnez un établissement--</option>
            <?php foreach ($etabs as $etab): ?>
                <option value="<?php echo $etab['id']; ?>"><?php echo $etab['name']; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Ajouter</button>
    </form>
    <a href="selection.php">Retour</a>
</div>

</body>
</html>


