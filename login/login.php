<?php

Session_start();
require_once 'connection.php';
$err = false;
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];


  $sql = "SELECT * FROM  registeration where email = '$email' AND pass = '$pass'";
  $exec = mysqli_query($con,$sql);
  if ($exec->num_rows >0){

    $_SESSION ['registeration'] = $exec->fetch_object();

    header("Refresh:1 ,url=index.php");
    
  }

  else {
    $err = true;
  }
}






?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login Form</title>
  </head>
  <body>
 
  <div>
<nav class="navbar navbar-dark bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <h1 class = "text-center ">Please Login </h1>

    <form class="d-flex">
      <button class="btn btn-outline-dark" type="submit"><a href = "registeration.php">Register</a></button>
    </form>
  </div>
</nav>
</div>



<div  class="card-body border border-4 border-success  m-5 pb-5">
<div class ="card-body text-center" style="width: 60rem;">
  
<?php
if(isset($_SESSION ['registeration'])){

  
  echo '<div class="alert alert-secondary" role="alert">
  Wellcome Dear'.$_SESSION['registeration']->fname.'</a>. 
</div>';


}
elseif($err == true){

  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Login falied!</strong> Invalid email and password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
?>
</div>


  
<form method = "post">


    
<div class="mt-5 container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">E-mail id</label>
  </div>
  <div class="col-auto">
    <input type="email" id=""  name = "email"class="form-control" aria-describedby="passwordHelpInline">
  </div>
  
</div>
    </div>
    
  </div>
</div>



<div class="mt-5 container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" name = "pass" class="form-control" aria-describedby="passwordHelpInline">
          

  </div>


  <button class="btn btn-warning " name = "submit"  style="width: 20rem;" >login</button>
</div>

    </div>
    
  </div>
</div>
    
    </form>
</div>
</div>

<?php
require_once 'footer.php';
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>