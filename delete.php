<?php
  include 'db.php';
  $id = $_GET['id'];
  $sql = "delete from items where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: admin.php");
?>