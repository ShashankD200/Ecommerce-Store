
<?php

$em=$_POST['em'];
$pwd=$_POST['pwd'];

// $insert="INSERT into userdetail(Username, Password) VALUES('$Name', '$Pass')";

$sql_check="SELECT id,Username,Password,email FROM userdetail WHERE email='$em' and Password='$pwd'";
$conn=mysqli_connect("localhost", "root", "asdfghjkl", "practice");

$rs=mysqli_query($conn,$sql_check);


if($rs->num_rows>0)
{
    $rowdata=mysqli_fetch_assoc($rs);
    session_start();
    $_SESSION['session_un']=$rowdata['Username'];
    $_SESSION['session_id']=$rowdata['id'];
    $_SESSION['session_email']=$rowdata['email'];

    header('Location:index.php?login=succes');
}
else{
    header('Location:login.php?login=error');
}

?>