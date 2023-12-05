<?php 
session_start();
require_once 'connection.php';
if(!isset($_SESSION ['registeration'])){
  header('location:login.php');
}




?>





<?php
require 'nav.php';


$sql = "select * from  registeration";
$result = mysqli_query($con,$sql);

$id = 0;
?>



  <table class="table table table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail </th>
      <th scope="col">Pssword</th>
      <th scope="col">Contact </th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">Profile</th>
      <th scope="col">Hobbies</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

 
  

  <?php

while ($rec = mysqli_fetch_assoc($result)) 

{?>
   


    <tr>
      <th> <?php echo $id = $id +1; ?></th>
      <th>
     
      <img src="<?php echo "uplods/" . $rec['image']  ?>" style="height:50px  " >
      </th>
      <td> <?php echo $rec['fname']?>
       <?php echo $rec['lname']?></td>
      <td> <?php echo $rec['email']?></td>
      <td> <?php echo $rec['pass']?></td>
      <td> <?php echo $rec['contact']?></td>
      <td> <?php echo $rec['gender']?></td>
      <td> <?php echo $rec['address']?></td>
      <td> <?php echo $rec['state']?></td>
      <td> <?php echo $rec['profile']?></td>
      <td> <?php echo $rec['hobies']?></td>
      
      <td>
        <div class ='col'>
        <button class= '  btn  btn-danger '><a href = "edit_registration.php?id=<?php echo "$rec[id]" ?>">Edit</a></button>
         <button class= ' btn btn-success '><a href = "del_reg.php?id=<?php echo "$rec[id]" ?>">Dlete</a></button>
   
        </div>
        </td>

    </tr>
                                                    
    <?php  
}?>    
  </tbody>
</table>

    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   
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

<?php require 'footer.php' ?>
