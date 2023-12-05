


 <?php 
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'student';


 mysqli_report(MYSQLI_REPORT_STRICT);
 try{
    $con = new mysqli($servername,$username,$password,$database);
    date_default_timezone_set('Asia/kolkata');
}
catch (Exception $ex){

    echo "connection failed". $ex->getMessage();
    exit;
}
 
 
 
 ?>