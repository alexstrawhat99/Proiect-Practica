<?php
  include 'db.php';
  $sql = "select * from items";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    // if ($row['id'] == $_GET['id']) {
     if ($id = isset($_GET['id']) ? $_GET['id'] : ''){
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="title" value="'.$row['title'].'"></td>';
      echo '<td><input type="text" class="form-control" name="textt" value="'.$row['textt'].'"></td>';
      echo '<td><input type="text" class="form-control" name="category" value="'.$row['category'].'"></td>';
      echo '<td><input type="number" class="form-control" name="image" value="'.$row['image'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['title'] . "</td>";
      echo "<td>" . $row['textt'] . "</td>";
      echo "<td>" . $row['category'] . "</td>";
      echo "<td>" . $row['image'] . "</td>";
      echo '<td><a class="btn btn-primary" href="admin.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>