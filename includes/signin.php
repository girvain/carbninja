<?php

session_start();

if (isset($_POST['login'])) {
  include 'db.php';

  $email = mysqli_real_escape_string($conn, $_POST['user_email']);
  $password = mysqli_real_escape_string($conn, $_POST['user_password']);

  // Error handling
  // check for empty fields
  if (empty($email) || empty($password)) {
    header("Location: ../login.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {
      header("Location: ../login.php?login=errornouser");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        // de-hashing password
        $hashedPasswordCheck = password_verify($password, $row['user_password']);
        if ($hashedPasswordCheck == false) {
          header("Location: ../login.php?login=errorwrongpass");
          exit();
        } elseif ($hashedPasswordCheck == true) {
          // log in user
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_name'] = $row['user_name'];
          $_SESSION['u_email'] = $row['user_email'];
          header("Location: ../home.php?login=success");
          exit();
        }
      }
    }
  }
} else {
  header("Location: ../login.php?login=error");
  exit();
}
