<?php

  require_once "connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>CRUD Operation</title>
</head>

<body>

  <div class="container">
    <a href="user.php" class="btn btn-primary my-5">Add User</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">SI no</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM crud;";
          $result = mysqli_query($con, $sql);
          if ($result) {
            
            while ($row = mysqli_fetch_assoc($result)) {
              ['id' => $id,
               'name' => $name,
                'email' => $email,
                 'mobile' => $mobile,
                 'password' => $password] = $row;
                 
              echo '<tr>
                      <th scope="row">' . $id . '</th>
                      <td>' . $name . '</td>
                      <td>' . $email . '</td>
                      <td>' . $mobile . '</td>
                      <td>' . $password . '</td>
                      <td>
                        <a class="btn btn-primary" href="update.php?id='. $id .'">Update</a>
                        <a class="btn btn-danger" href="delete.php?id='. $id .'">Delete</a>
                      </td>
                    </tr>';
            }

          }
        ?>

      </tbody>

  </div>



  </table>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>