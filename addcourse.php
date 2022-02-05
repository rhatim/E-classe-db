<?php
  $title = $_POST['title'];
  $conn = new mysqli('localhost', 'root','', 'e_classe_db');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO course(title) VALUES(?)");
    $stmt->bind_param("s",$title);
    $stmt->execute();
    echo "<script>window.location.replace('course.php')</script>";
    $stmt->close();
    $conn->close();
  }
?>