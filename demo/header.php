<?php include('database.php') ?>
<?php
if (isset($_POST['submit'])) {
  $email_id = $_POST['email_id'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $sql = "INSERT INTO reg(`email_id`,`password`,`address`,`address2`,`city`,`state`)
VALUES ('$email_id','$password','$address','$address2','$city','$state')";
  if (mysqli_query($conn, $sql)) {
    echo "Record inserted";
  } else {
    echo "Error:" . $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
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
  <!-- Start header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Logo</a>
    <div class="navbar-nav ml-auto">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">CONTACT</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="log.php">LOGIN</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end header -->
  <!-- start slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="am.jpeg" alt="First slide" height="350px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="am2.jpeg" alt="Second slide" height="350px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="am5.jpeg" alt="Third slide" height="350px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end slider -->
  <!-- stsrt about card -->
  <section id="about">
    <div>
      <h1>About</h1>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="agi.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="agi2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="agi4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="agi5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-sm-5">
        <img src="agi.jpg" alt="agi" height="600px" width="430px">
      </div>
      <!-- image end -->
      <form method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email_id">
          </div>
          <div class="form-group col-md-8">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group  col-md-8">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Enter the address" name="address">
        </div>
        <div class="form-group  col-md-8">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
            name="address2">
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city">
          </div>
          <div class="form-group col-md-8">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control" name="state">
              <option selected>Choose...</option>
              <option>up</option>
              <option>Bihar</option>
              <option>rachi</option>
              <option>mp</option>
              <option>uk</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
      </form>
    </div>
  </div>
</body>
<script src="Design/jquery/code.jquery.com_jquery-3.7.1.slim.min.js"></script>
<script src="Design/js/bootstrap.min.js"></script>

</html>