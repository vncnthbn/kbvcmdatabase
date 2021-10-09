<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn = mysqli_connect("localhost", "root", "", "kbvcmdatabase");
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
  $query = "SELECT * FROM login WHERE username=? AND password=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $query)) {
    header("Location: ../index.php?databaseerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $query2 = "SELECT * FROM login;";
    $result = mysqli_stmt_num_rows($stmt);
    $fetch = mysqli_query($conn, $query2);
    if ($result > 0) {
      while ($row = mysqli_fetch_assoc($fetch)) {
        if ($row['username'] == $username) {
          echo "<style>";
          include_once '../styles/loginStyles.css';
          echo "</style>";
          echo "<div id='bgloginmodal'>";
            echo "<div id='loginmodal' align='center'>";
              echo "<div id='close'>+</div>";
              echo "<img src='../images/" . $row['photo'] . "'>";
              echo "<p id='p1'>" . $row['class'] . "</p>";
              echo "<p id='p2'>" . $row['firstname'] . " " . $row['lastname'] . "</p>";
            echo "</div>";
          echo "</div>";
          echo "<script type='text/javascript'>";
            include_once '../scripts/loginmodal.js';
          echo "</script>";
        }
      }
    } else {
      header("Location: ../index.php?loginerror");
      exit();
    }
  }
 ?>
