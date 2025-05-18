<?php
session_start();

// Redirect to home.php if user already logged in
if (isset($_SESSION['user_name'])) {
  header("Location: home.php");
  exit;
}

require_once 'connection.php';

$signupSuccess = false;
$loginError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // SIGN UP
  if (isset($_POST['signUp_Btn'])) {

    $id = $_POST[''];
    $fullName = $_POST['signUp_fullName'];
    $email = $_POST['signUp_email'];
    $phone = $_POST['signUp_phoneNumber'];
    $password = $_POST['signUp_password'];

    $stmt = mysqli_prepare($link, "INSERT INTO users (`Full_Name`, `Email`, `Phone_Number`, `Pass`) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email, $phone, $password);

    if (mysqli_stmt_execute($stmt)) {
      $signupSuccess = true;
    } else {
      die("Sign Up Error: " . mysqli_error($link));
    }

    mysqli_stmt_close($stmt);
  }

  // SIGN IN
  if (isset($_POST['signIn_Btn'])) {
    $email = $_POST['signIn_email'];
    $password = $_POST['signIn_password'];

    $stmt = mysqli_prepare($link, "SELECT Full_Name FROM users WHERE Email = ? AND Pass = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
      mysqli_stmt_bind_result($stmt, $fullName);
      mysqli_stmt_fetch($stmt);

      $_SESSION['user_name'] = $fullName;
      echo "<script>alert('Welcome, $fullName!'); 
      window.location.href = 'home.php';</script>";
      exit;
    } else {
      $loginError = true;
    }

    mysqli_stmt_close($stmt);
  }

  mysqli_close($link);
}


include 'sign_In_Up.php';
