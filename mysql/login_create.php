<?php
include "db.php";
include 'db_functions.php';

if(isset($_POST['create-submit'])) {
  createUser();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
<div>
  <ul>
    <li>
      <a href="login_create.php">create</a>
    </li>
    <li>
      <a href="login_read.php">list</a>
    </li>
    <li>
      <a href="login_update.php">update</a>
    </li>
    <li>
      <a href="login_delete.php">Delete</a>
    </li>
  </ul>
</div>
<div class="container">
  <div class="col-sm-6">
    <h1>Create User</h1>
    <form action="login_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <input class="btn btn-primary" value="CREATE" name="create-submit" type="submit">
    </form>
  </div>
</div>
</body>
</html>