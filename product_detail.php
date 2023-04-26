<?php
session_start();

$product_id=$_SESSION['session_p_id'];



$sql="SELECT * FROM product where id = $product_id  ";

$conn=mysqli_connect("localhost","root","asdfghjkl","practice");

$rs=mysqli_query($conn,$sql);
//echo 'aa='.$rs->num_rows;
if($rs->num_rows >0){  
while($row=mysqli_fetch_assoc($rs)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$row['pname']?></title>
</head>

<body>
  <?php include 'header.php'; ?>


  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?=$row['pname']?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Product</a></li>
            <li><?=$row['pname']?></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

 
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
      <div class="container">
      <?php

if (isset($_REQUEST['notadded'])) {
  ?>
<div class="alert alert-danger"> Please Login <a href="login.php">here.</a>
</div>
<?php
}

?>
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="Upload/<?=$row['img']?>" style="object-fit:contain;" height="500px" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
</div>


          <div class="col-lg-4">
            <div class="portfolio-info">
             
               <form method="post" action="cart.php"> 
               <?php
        if(isset($_SESSION['session_id']))
        {
            ?>
            <input type="hidden" name="userid" value="<?=$_SESSION['session_id']; ?>" >
            <?php
        }
?>
               <input type="hidden" name="pname" value="<?=$row['pname']?>" >
               <input type="hidden" name="category" value="<?=$row['category']?>" >
               <input type="hidden" name="pprice" value="<?=$row['pprice']?>" >
               <input type="hidden" name="img" value="<?=$row['img']?>" >
               <input type="hidden" name="description" value="<?=$row['description']?>" >
               <input type="hidden" name="id" value="<?=$product_id?>" >
               
              <h3><?=$row['pname']?></h3>
              <ul>
                <li><strong>Category</strong>:<?=$row['category']?></li>
                
                <li><strong>Product Size </strong>: <?=$row['description']?></li>
                <li><strong>Product Price </strong>: ₹<?=$row['pprice']?>.00</li>
                <li><input class="btn btn-warning" type="submit" value="Add to cart" name="cart" >
              </ul>
</form>
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

<?php
}
}
else{
    header('location:productshow.php?nodata');
}

unset($_SESSION['session_p_id']);
?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
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

</body>

</html>