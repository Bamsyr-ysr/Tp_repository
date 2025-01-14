<?php
include 'database.php';


$id = $_GET['id'];
$stud = $conn->prepare("SELECT * FROM stud WHERE id = ?");
$stud->execute([$id]);
$stud = $stud->fetch();


$etabs = $conn->query("SELECT * FROM etab")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $etab_id = $_POST['etab_id'];

    $stmt = $conn->prepare("UPDATE stud SET name = ?, age = ?, etab_id = ? WHERE id = ?");
    $stmt->execute([$name, $age, $etab_id, $id]);
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
<h2>Modifier l'Étudiant</h2>
<form method="POST" action="">
    <label>Nom : <input type="text" name="name" value="<?php echo $stud['name']; ?>" required></label><br>
    <label>Âge : <input type="number" name="age" value="<?php echo $stud['age']; ?>" required></label><br>
    <label>Établissement :
        <select name="establishment_id" required>
            <option value="">--Sélectionnez un établissement--</option>
            <?php foreach ($etabs as $etab): ?>
                <option value="<?php echo $etab['id']; ?>" <?php echo $etab['id'] == $stud['establishment_id'] ? 'selected' : ''; ?>>
                    <?php echo $etab['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <button type="submit">Modifier</button>
</form>
<a href="aff_stud.php">Retour</a>
</div>
</body>
</html>

