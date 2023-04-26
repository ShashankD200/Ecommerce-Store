<?php
session_start();
$userid=$_SESSION['session_id'];

?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Process Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Order Process Page</h2>
  <div class="row">
    <div class="col-sm-4">
   
      <div class="card">
        <img class="card-img-top" src="product.jpg" alt="Product Image">
        <div class="card-body">
          <h4 class="card-title">Product Name</h4>
          <p class="card-text">Product Description</p>
          <p class="card-text">Price: $X.XX</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Review Order</h4>
          
          <table class="table">
         
            <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            <?php
$sql="SELECT * FROM productcart where userid = $userid ";

$conn=mysqli_connect("localhost","root","asdfghjkl","practice");

$rs=mysqli_query($conn,$sql);
//echo 'aa='.$rs->num_rows;

$cartTotal = 0; 
if($rs->num_rows >0){  
while($row=mysqli_fetch_assoc($rs)){
 
  $cartTotal = $cartTotal + ($row["pprice"] * $row["quantity"]);
  if($cartTotal > 5000){
    $Delivery_charge = 0 ;
  }else{
    $Delivery_charge = 200 ;
  }
  
  $Total= $Delivery_charge + $cartTotal;
  ?>  
              <tr>
                <td><?=$row['pname']?></td>
                <td><?=$row['pprice']?>.00</td>
                <td><?=$row['quantity']?></td>
                <td><?=($row["pprice"] * $row["quantity"])?></td>
              </tr>
            </tbody>
            <?php
}
}
?>
          </table>
          <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
              <p>Subtotal: 
  <?=$cartTotal?>.00</p>
              <p>Delivery Charge : <?=$Delivery_charge?></p>
              <p>Total: <?=$Total?>.00</p>
              <a href="#" class="btn btn-primary">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
