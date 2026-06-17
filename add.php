<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include("header.php");
?>

<h2>Добави храна</h2>
<form action="insert.php" method="post">
  <input type="date" name="date" required><br>
  <input type="text" name="food" required placeholder="Храна"><br>
  <input type="number" name="calories" required min="0" placeholder="Калории"><br>
  <input type="submit" value="Запиши">
</form>
