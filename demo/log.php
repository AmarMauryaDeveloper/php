<?php include('database.php') ?>
<?php
if (isset($_POST['login'])) {
  $email_id = $_POST['email_id'];
  $password = $_POST['password'];
  $sql = " SELECT * FROM reg where email_id='$email_id' AND `password`='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    echo "login successful";
    header('location:header.php');
  } else {
    echo "invalid userid or password";
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Design/css/bootstrap.min.css">
  <link rel="stylesheet" href="Design/js/bootstrap.min.js">
</head>

<body>
  <Div class="container card mt-5">
    <div class="row mt-5 ms-5 justify-content-center">
      <form method="POST" enctype="multipart/form-data">
        <h1 class="text-center">Login</h1>
        <!-- Email input -->
        <div class="form-outline mb-4 ">
          <input type="email_id" id="form2Example1" class="form-control" name="email_id" />
          <label class="form-label" for="form2Example1">email_id</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form2Example2" class="form-control" name="password" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>

          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="login">login</button>

        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="#!">Register</a></p>
          <p>or sign up with:</p>
        </div>
      </form>
    </div>
  </Div>
</body>

</html>