<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Products</title>

</head>

<body>
<?php include 'header.php';?>

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Products</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Products</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
       
      <style>
.op{
    height:100px;
    text-align:center;
    background-color:white;
}
.op p{
    font-size:50px;
    font-weight:800;
    padding:10px;
}
.Imagesize{
    
    width:100%;
   height: 250px;
   object-fit:cover;
   
   transition: 1s ease;
}
.Imagesize:hover{
  
    object-fit:contain;
    transition: 1s ease;
}

.cado{
    height:450px;
    transition: 1s ease;
}
.cado:hover{
    transition:1s ease;
background-color:black;
color:white;
}
.oprice{
    text-decoration:line-through;
    font-size:15px;
     margin:0px
}
.off{
    font-size:10px
}
.button{
    position: relative;
    left:75px;
    bottom:38px;
    transition: 0.5s ease;
    height:50px;
    
}
.button:hover{
    color:black;
   
  
    
}
.card-image-section{
    height:250px;
    
    transition: 1.5s ease;
}
.card-image-section:hover{
    height:max-content;
    -webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(1.1);
transition: 1.5s ease;

}
</style>
<body>
    



        <div class="op"> 
            <p>Our Products</p>
        </div>
        <?php

if (isset($_REQUEST['notadded'])) {
  ?>
<div class="alert alert-danger"> Please Login <a href="login.php">here.</a>
</div>
<?php
}

?>
<div class="container-fluid">
    <div class="row">
    <?php
   

    $sql="SELECT * FROM product ";

$conn=mysqli_connect("localhost","root","asdfghjkl","practice");

$rs=mysqli_query($conn,$sql);
//echo 'aa='.$rs->num_rows;
if($rs->num_rows >0){  
while($row=mysqli_fetch_assoc($rs)){

?>
       
       <div class="col-md-3">
       
       <form method="post" action="cart.php" >

        <div class="cado card m-2" style="width: 18rem;">
        
        <?php
        if(isset($_SESSION['session_id']))
        {
            ?>
            <input type="hidden" name="userid" value="<?=$_SESSION['session_id']; ?>" >
            <?php
        }
?>
        <input type="hidden" name="id" value="<?=$row['id']?>" >

        <input type="hidden" name="img" value="<?=$row['img']?>">

        <div class="card-image-section">
        <img src="Upload/<?=$row['img']?>" class="Imagesize"  alt="...">
        </div>

        <div class="card-body">

          <input type="hidden" name="pname" value="<?=$row['pname']?>">
          <h5 class="card-title"><?=$row['pname']?></h5>

            <input type="hidden" name="description" value="<?=$row['description']?>">
          <p class="card-text"><?=$row['description']?></p>

          <input type="hidden" name="pprice" value="<?=$row['pprice']?>">
          <p><h2>₹<?=$row['pprice']?>.00</h2>


          <h2 class="oprice">₹<?=$row['oprice']?>.00</h2> <div class="off">30%off</div> </p>
          
          <button type="submit" class="button btn btn-warning" name="cart" ><img src="images/add-to-cart.png" height="30px" alt="">Add to Cart</button>
          <button type="submit" class=" button btn btn-primary" name="productshow"><img src="Images/eye-scanner.png" height="20px"></button>
          
          </form>
        </div>
    </div>
        </div>
        <?php
}
}
?>
    </div>

</div>




      

  </main>
  


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    document.getElementById("product").onclick = function () {
        location.href = "product_detail.php";
    };
</script>
</body>

</html>