<?php
if(isset($_REQUEST['Update'])){
    
$pid=$_REQUEST['pid'];
$uid=$_REQUEST['uid'];
$qnt=$_REQUEST['quantity'];

$update="UPDATE productcart SET quantity=$qnt where id=$pid AND userid=$uid";
$conn=mysqli_connect("localhost","root","asdfghjkl","practice");

$Update_result=mysqli_query($conn,$update);

header('location:cartshow.php?Updated');



}
elseif(isset($_REQUEST['Remove'])){

    $pid=$_REQUEST['pid'];
    $qnt=$_REQUEST['quantity'];
    $uid=$_REQUEST['uid'];
    
    $delete="DELETE from  productcart Where id=$pid AND userid=$uid";
    $conn=mysqli_connect("localhost","root","asdfghjkl","practice");
    
    $delete_rs=mysqli_query($conn,$delete);
    
    header('location:cartshow.php?removed');
}
?>