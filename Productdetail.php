<?php

$pname=$_POST['pname'];
$des=$_POST['description'];
$category=$_POST['category'];
$pprice=$_POST['pprice'];
$oprice=$_POST['oprice'];
$imgn=$_FILES['img']['name'];
$img=$_FILES['img']['tmp_name'];

$insert="INSERT into product(pname, category, pprice, img, description,oprice) VALUES('$pname', '$category', '$pprice', '$imgn','$des','$oprice')";

$rs=move_uploaded_file($img,"Upload/".$imgn);

$conn=mysqli_connect("localhost", "root", "asdfghjkl","practice");

$rs=mysqli_query($conn,$insert);

header('Location:Productadd.php?success=1')

?>