<?php
  include 'db.php';
  $title = $_POST["title"];
  $textt = $_POST["textt"];
  $category = $_POST["category"];
  $image = $_POST["image"];
  $sql = "insert into items (title, textt, category, image) values ('$title', '$textt', '$category', '$image')";
  $conn->query($sql);
  $conn->close();
  header("location: admin.php");
?>