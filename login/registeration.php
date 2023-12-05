<?php 
session_start();
require_once'connection.php';


if(isset($_POST['submit'])){
 
  $img = $_FILES['image']['name'];
    if(move_uploaded_file($_FILES['image']['tmp_name'],'uplods/'.$img)) 


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass= $_POST['pass'];
  $contact= $_POST['contact'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $state = $_POST['state'];
  $profile = $_POST['profile'];
  $hobies = $_POST['hobies'];




  $sql = "insert into registeration (fname,lname,image,email,pass,contact,gender,address,state,profile,hobies) 
  values 
  ('$fname','$lname','$img','$email','$pass','$contact','$gender','$address','$state','$profile','$hobies') ";
   $result =  mysqli_query($con,$sql);

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

    <title>Student Registration</title>
  </head>
  <body>


<div>
<nav class="navbar navbar-dark bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <h1 class = "text-center ">Student Registeration</h1>

    <form class="d-flex" enctype="multipart/form-data">
      <button class="btn btn-outline-dark" type="submit"><a href = "logout.php">Logout</a></button>
    </form>
  </div>
</nav>
</div>











<div class="container  border border-4 border-warning  m-5  pb-5" style="width: 100rem ;">
 
      <form method = "post" enctype="multipart/form-data">


      
      <div>
    <label for="fname" class="col-form-label">Uplod Photo</label>
        <input type="file" name = "image">

    </div>      
          
  <div class="row shadow-lg p-3 mb-5 bg-body rounded border border-warning">
  
    <div class="col-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="fname" class="col-form-label">First Name</label>
  </div>
  <div class="col-auto">
    <input type="text"  name = "fname" class="form-control" >
  </div>
</div>
    </div>
    <div class="col">
        
    
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="lname" class="col-form-label">Last Name</label>
  </div>
  <div class="col-auto">
    <input type="text"  name = "lname" class="form-control" >
  </div>
</div>
</div>
  </div>





  <div class="row shadow-lg p-3 mb-5 bg-body rounded border border-warning">
    
    <div class="col-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="fname" class="col-form-label">Email</label>
  </div>
  <div class="col-auto">
    <input type="email"  name = "email" class="form-control" >
  </div>
</div>
    </div>
    <div class="col">
        
    
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="lname" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password"  name = "pass" class="form-control" >
  </div>
</div>
</div>
  </div>


    
  <div class="row shadow-lg p-3 mb-5 bg-body rounded border border-warning">
    
    <div class="col-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="fname" class="col-form-label">Contact</label>
  </div>
  <div class="col-auto">
    <input type="text"  name = "contact" class="form-control" >
  </div>
</div>
    </div>
    <div class="col">
        
    
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="lname" class="col-form-label">Gender</label>
  </div>
  <div class="col-auto col">

  <div class="form-check col-mg-6">
  <input class="form-check-input" type="radio" name="gender" value ="male" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check col-mg-6">
  <input class="form-check-input" type="radio" name="gender" value ="female" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Femle
  </label>
</div>

  </div>
</div>
</div>
  </div>


      
  <div class="row shadow-lg p-3 mb-5 bg-body rounded border border-warning">
    
    <div class="col-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="fname" class="col-form-label">Address</label>
  </div>
  <div class="col-auto">
  <textarea class="form-control" placeholder="Leave a comment here" name ="address" id="floatingTextarea"></textarea>
  </div>
</div>
    </div>
    <div class="col">
        
    
  
  <label for="cars">Choose a State</label>

<select name="state" id="state">
  <option value="Uttar Pardesh">Uttar Pardesh</option>
  <option value="UttraKhand">UttraKhand</option>
  <option value="Delhi">Delhi</option>
  <option value="Madhya Pardesh">Madhya Pardesh</option>
</select>

</div>
  </div>


      
  <div class="row shadow-lg p-3 mb-5 bg-body rounded border border-warning">
    
    <div class="col-6">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="fname" class="col-form-label">Profile</label>
  </div>
  <div class="col-auto">
  <textarea class="form-control" placeholder="Leave a comment here"  name = "profile"id="floatingTextarea"></textarea>
  </div>
</div>
    </div>
    <div class="col">
        
    
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="lname" class="col-form-label">Hobies</label>
  </div>
  <div class="col-auto">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name = "hobies" value="Music">
  <label class="form-check-label" for="inlineCheckbox1">Music</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name = "hobies" value="Codeing">
  <label class="form-check-label" for="inlineCheckbox2">codeing</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name = "hobies" value="Marketing">
  <label class="form-check-label" for="inlineCheckbox2">Marketing</label>
</div>
  </div>
</div>
</div>
  </div>

  
<button class = "btn btn-warning btn-lg" name = "submit">Register</button>
</div>


    </form>    





    </div>



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