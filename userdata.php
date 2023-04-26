<?php
$username=$_POST['Username'];
$Email=$_POST['email'];
$Mobilenumber=$_POST['mobilenumber'];
$P1=$_POST['password'];
$P2=$_POST['password1'];

if($P1 == $P2){
    $rs="INSERT into userdetail(Username, email, mobile, Password) VALUES('$username','$Email','$Mobilenumber','$P1')";
    
    $conn=mysqli_connect("localhost","root","asdfghjkl","practice");
    
    mysqli_query($conn,$rs);

    header('Location:signup.php?done');
}
else{
    header('Location:signup.php?pwdwrong');
}

?>
