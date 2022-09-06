<?php
$con = mysqli_connect('localhost','root');
 
if($con){
    echo "connection successful";
}else{
    echo "connection error";
}

 mysqli_select_db($con,'youtubeuserdata');
 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobileno = $_POST['mobileno'];
 $coment = $_POST['coment'];

 $query = "insert into userinfodata(user,email,mobileno,coment)
  values ('$user','$email','$mobileno','$coment')";

  mysqli_query($con,$query);




?>