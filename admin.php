<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>PHP + MySQL CRUD</h1>
  <p>Bine ai venit!</p>
  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
    <button type="button" class="btn btn-primary btn-lg btn-block">Create</button>
  </table>
  <form class="form-inline m-2" action="create.php" method="POST">

    <label for="title">Title:</label>
    <input type="text" class="form-control m-2" id="title" name="title">

    <label for="textt">Textt:</label>
    <input type="text" class="form-control m-2" id="textt" name="textt">

    <label for="category">Category:</label>
    <input type="text" class="form-control m-2" id="category" name="category">

    <label for="image">Image:</label>
    <input type="number" class="form-control m-2" id="image" name="image">
    
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</body>
</html>