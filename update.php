<?php
  include 'db.php';
  $id = $_POST['id'];
  $title = $_POST['title'];
  $textt = $_POST['textt'];
  $category = $_POST['category'];
  $image = $_POST['image'];
  $sql = "update items set title='$title', textt='$textt', category='$category', image='$image' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: admin.php");
?>