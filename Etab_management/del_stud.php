<?php
include 'database.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM stud WHERE id = ?");
$stmt->execute([$id]);

header("Location: aff_stud.php");

