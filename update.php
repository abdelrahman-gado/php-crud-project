<?php
require_once "connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM crud WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "UPDATE crud SET name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = $id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    //echo "updated successfully";
    header('Location: display.php');
  } else {
    die(mysqli_error($con));
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="conatiner mx-5 my-5">
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off" value="<?php echo $row['name'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off" value="<?php echo $row['email'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" name="mobile" class="form-control" placeholder="Enter your number" autocomplete="off" value="<?php echo $row['mobile']?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="off" value="<?php echo $row['password'] ?>">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>