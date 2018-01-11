<?php

if(isset($_POST['register'])) {
  include_once 'db.php';

  $username = mysqli_real_escape_string($conn, $_POST['user_name']);
  $email = mysqli_real_escape_string($conn, $_POST['user_email']);
  $password = mysqli_real_escape_string($conn, $_POST['user_password']);

  // error handling
  // check for empty fields
  if (empty($username) || empty($email) || empty($password)) {
    header("Location: ../register.php?signup=empty");
    exit();
  } else {
    // check for valid input
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("Location: ../register.php?signup=invalid");
      exit();
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?signup=invalidEmail");
        exit();
      } else {
        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../register.php?signup=userTaken");
          exit();
        } else {
          // hash password
          $hash = password_hash($password, PASSWORD_BCRYPT);
          // insert the user into the db
          $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$username', '$email', '$hash');";
          mysqli_query($conn, $sql);
          header("Location: ../index.php?signup=success");
          exit();
        }
      }
    }
  }

} else {
  header("Location: register.php");
  exit();
}
