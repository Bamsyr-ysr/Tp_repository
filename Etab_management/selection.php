<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: connect.php");
    exit();
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
<div class="container2">
<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>

    <div class="ch">
    <a href="add_stud.php">Ajouter Étudiant</a>
    </div>
    <div class="ch">
    <a href="add_etab.php">Ajouter Établissement</a>
    </div>
    <div class="ch">
    <a href="aff_stud.php">Afficher Étudiants</a>
    </div>
    <div class="ch">
    <a href="aff_etab.php">Afficher Établissements</a>
    </div>

</div>
</body>
</html>
