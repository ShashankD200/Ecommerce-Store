<?php

$pid=$_REQUEST['id'];

$conn=mysqli_connect("localhost","root","asdfghjkl","web1");
$query="INSERT INTO productcart (userid,pname,pprice,img,description)
 SELECT id,pname,category pprice,img,description 
 FROM product
  where id=$pid ";

$res=mysqli_query($conn,$query);

?>