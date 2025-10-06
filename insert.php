<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Достъп отказан.");
}
include("conf.php");

if (
    isset($_POST['date'], $_POST['food'], $_POST['calories']) &&
    !empty(trim($_POST['food'])) &&
    is_numeric($_POST['calories']) && $_POST['calories'] >= 0
) {
    $conn = new mysqli($h, $u, $p, $db);

    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO meals (date, food, calories, user_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $_POST['date'], $_POST['food'], $_POST['calories'], $user_id);
    $stmt->execute();

    header("Location: index.php");
    exit;
} else {
    echo "Моля, попълнете всички полета коректно.";
}
?>
