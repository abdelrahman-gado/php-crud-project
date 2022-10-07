<?php

require_once "connect.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM crud WHERE id = $id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: display.php');
  } else {
    die(mysqli_error($con));
  }

}