<?php
session_start();
$userid=$_SESSION['session_id'];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>My Cart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      /* Basic styling for the page */
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;

      }
      
      /* Styling for the cart items */
      .cart-item {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        background-color: #fff;
        border-bottom: 1px solid #ddd;
        height:500px;
      }
      
      .cart-item img {
        object-fit:cover;
        width:100%;
        height: 300px;
      }
      
      .cart-item .item-info {
        display: flex;
        flex-direction: column;
        margin-left: 10px;
      }
      
      .cart-item .item-info h3 {
        margin: 0;
      }
      
      /* Styling for the cart summary */
      .cart-summary {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        padding: 10px;
        background-color: #fff;
      }
      
      .cart-summary h2 {
        margin: 0;
      }
      
      .cart-summary button {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
      }
      
      /* Styling for the empty cart message */
      .empty-cart {
        text-align: center;
        margin-top: 50px;
        font-size: 24px;
      }
      .atc{
        display:flex;
        flex-direction: row;
        margin:2px;
        
        
      }
      .atc a{
        margin:2px
      }
      .qtc input{
        flex-direction: row;
        width:50px;
      }
    </style>
  </head>
  <?php include 'Header.php'?>
  <body>

  <hr>
    <h1 align="center">My Cart</h1>
    <div class="container-fluid">
    <div class="row">
    <?php
$sql="SELECT * FROM productcart where userid = $userid ";

$conn=mysqli_connect("localhost","root","asdfghjkl","practice");

$rs=mysqli_query($conn,$sql);
//echo 'aa='.$rs->num_rows;
$cartTotal = 0; 
if($rs->num_rows >0){  
while($row=mysqli_fetch_assoc($rs)){
 
  $cartTotal = $cartTotal + ($row["pprice"] * $row["quantity"]);
  
  ?>

<div class="col-md-3">
    <!-- Cart items section -->
    <form action="carthandle.php" method="post" >
      <div class="cart-items">
      <div class="cart-item">
        <img src="Upload/<?=$row['img']?>" alt="Product Image">
        <div class="item-info">
        <input type="hidden" name="pid" value="<?=$row['id']?>">  
        <input type="hidden" name="uid" value="<?=$userid?>">  
        
        <h3><?=$row['pname']?></h3>
          <p>Price: <?=$row['pprice']?></p>
          
          <div class="qtc">
            <label>Quantity: </label>
            <input value="<?=$row['quantity']?>" type="number" name="quantity">
          </div>
        </div>
        <div class="atc">
        
       <input type="submit" class="btn btn-danger m-1" name="Remove" value="Remove">
        <input  type="submit"  class="btn btn-warning m-1" name="Update" value="Update">
        </div>      
      </div>
      </div>
      </div>
</form>
<?php
}
}
?>

</div>
    
    <!-- Cart summary section -->
    <div class="cart-summary">
      <h2>Cart Summary</h2>
      <h2>Total Price: ₹ <?=$cartTotal?>.00</h2>
      <button>Proceed</button>
    </div>
    
  
    <!-- <div class="empty-cart">
      <p>Your cart is currently empty.</p>
    </div> -->
  </body>
</html>
