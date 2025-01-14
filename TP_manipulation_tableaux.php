<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f8ff;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #444;
        }

        h2{
            color: #0078d7;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #0078d7;
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .result {
            margin: 20px 0;
            padding: 15px;
            background: #eef;
            border-left: 5px solid #0078d7;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tableaux en PHP</h1>

    <?php
    echo "<h2>1. Tableau Initial</h2>";
    $tab1 = array("Karim", "Marwa", "Aya", "Mohammed", "Fatima");
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $nom) {
        echo "<tr><td>$index</td><td>$nom</td></tr>";
    }
    echo "</table>";

    $tab1[] = "Salim";
    echo "<h2>2. Ajout de Salim</h2>";
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $nom) {
        echo "<tr><td>$index</td><td>$nom</td></tr>";
    }
    echo "</table>";

    array_shift($tab1);
    echo "<h2>3. Suppression de Karim)</h2>";
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $nom) {
        echo "<tr><td>$index</td><td>$nom</td></tr>";
    }
    echo "</table>";

    echo "<h2>4. Recherche de Mohammed</h2>";
    if (in_array("Mohammed", $tab1)) {
        $index = array_search("Mohammed", $tab1);
        echo "<div class='result'>Mohammed est dans le tableau, index: $index.</div>";
    } else {
        echo "<div class='result'>Mohammed n'est pas dans le tableau.</div>";
    }

    $tab1[array_search("Salim", $tab1)] = "Daniel";
    echo "<h2>5. Update de Salim en Daniel</h2>";
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $name) {
        echo "<tr><td>$index</td><td>$name</td></tr>";
    }
    echo "</table>";

    echo "<h2>6. Affichage élément par élément</h2>";
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $name) {
        echo "<tr><td>$index</td><td>$name</td></tr>";
    }
    echo "</table>";

    sort($tab1);
    echo "<h2>7. Ordre Alphabétique</h2>";
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $name) {
        echo "<tr><td>$index</td><td>$name</td></tr>";
    }
    echo "</table>";

    rsort($tab1);
    echo "<h2>8. Ordre inverse</h2>";
    echo "<table><tr><th>Index</th><th>Nom</th></tr>";
    foreach ($tab1 as $index => $name) {
        echo "<tr><td>$index</td><td>$name</td></tr>";
    }
    echo "</table>";

    $nb_students = count($tab1);
    echo "<h2>9. Nombre d'Étudiants</h2>";
    echo "<div class='result'>Nombre d'étudiants : $nb_students</div>";

    $multi_tab = array(
        "Karim" => 20,
        "Marwa" => 25,
        "Aya" => 19,
        "Mohammed" => 22,
        "Fatima" => 22,
        "Daniel" => 23
    );
    echo "<h2>10. Tableau Multidimensionnel</h2>";
    echo "<table><tr><th>Nom</th><th>Âge</th></tr>";
    foreach ($multi_tab as $nom => $age) {
        echo "<tr><td>$nom</td><td>$age</td></tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>
