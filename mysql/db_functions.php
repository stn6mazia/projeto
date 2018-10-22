<?php
include 'db.php';



$getQuery = "SELECT * FROM users";
$getResult = mysqli_query($connection, $getQuery);
if (!$getResult) {
  die('querry failled' . mysqli_error());
}

function createUser(){
  global $connection;
  if (isset($_POST['create-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = 'jhlkjgkljgksjauyfasduyijbsdlfiuytikhgU##@%$#&76oiyojkgio7t9097*&%*&Ygii8769';
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);

    $user = [$username, $password];
    $createUserQuery = "INSERT INTO users(username,password) VALUES ('$user[0]', '$user[1]')";
    $postResult = mysqli_query($connection,$createUserQuery);
  };

  if(!$postResult){
    die('QUERY FAILLED' . mysqli_error($connection));
  }
}

function UpdateUser(){
  global $connection;
  if (isset($_POST['update-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = 'jhlkjgkljgksjauyfasduyijbsdlfiuytikhgU##@%$#&76oiyojkgio7t9097*&%*&Ygii8769';
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);

    $id = $_POST['id'];
    $uodateQuery = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
    $updateResult = mysqli_query($connection,$uodateQuery);

    if(!$updateResult){
      die('QUERY FAILLED' . mysqli_error($connection));
    }
  };
}

function deleteUser(){
  global $connection;
  if (isset($_POST['delete-submit'])) {
    $id = $_POST['id'];
    $uodateQuery = "DELETE FROM users WHERE id = $id";
    $updateResult = mysqli_query($connection,$uodateQuery);

    if(!$updateResult){
      die('QUERY FAILLED' . mysqli_error($connection));
    }
  };
}
?>