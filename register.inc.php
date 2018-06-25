
<?php

$hostname = "localhost";
$username = "root";
$password = "fanka321";
$db = "coba";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $email=$_POST['email'];
  $paswd=$_POST['paswd'];
  
  $query = "INSERT INTO REGISTER (uname, paswd) VALUES ('$email', '$paswd')";


    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. ');
    } else {

//$sql = "SELECT paswd FROM REGISTER WHERE uname='$email'";
  // $result = mysqli_query($dbconnect, $sql);

  // if (mysqli_num_rows($result) > 0) {
    //  while($row = mysqli_fetch_assoc($result)) {
       //  echo "Name:$email and Password: " . $row["paswd"]. "<br>";
   echo "succes.";
      
   } 
//}
     
//}


}


?>
