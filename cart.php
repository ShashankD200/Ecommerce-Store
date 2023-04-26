<?php

if(isset($_REQUEST['productshow'])){

    session_start();
    $_SESSION['session_p_id'] = $_REQUEST['id'];
    header('location:product_detail.php');

}

elseif(isset($_REQUEST['cart'])){


$user_id=$_POST['userid'];
$imgn=$_POST['img'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$des=$_POST['description'];

$sql="INSERT into productcart(userid, pname, pprice,img, description) Values('$user_id', '$pname', '$pprice','$imgn','$des')";

$conn=mysqli_connect("localhost", "root", "asdfghjkl", "practice");

$rs=mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn) > 0){
    
    header('Location:products.php?addedtocart');

}
else{
    header('Location:products.php?notadded=1');

}
    
    
}

?>