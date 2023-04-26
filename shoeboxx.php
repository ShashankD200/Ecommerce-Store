
<?php include 'header.php'; ?>
<?php
session_start();
?>
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
<?php
if(isset($_REQUEST['casual'])){
?>
<div class="container-fluid">
    <div class="row">
    <?php
   

    $sql="SELECT * FROM product where category ='casual' ";

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
          
          <button type="submit" class=" button btn btn-warning" name="cart" ><img src="images/add-to-cart.png" height="30px" alt=""> Add to Cart</button>
          <button type="submit" class=" button btn btn-primary" name="productshow"><i class="fa fa-eye" aria-hidden="true"></i></button>
          
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


<?php
}
elseif(isset($_REQUEST['sports'])){
    ?>
    <div class="container-fluid">
    <div class="row">
    <?php
   

    $sql="SELECT * FROM product where category ='sports' ";

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
          
          <button type="submit"  id="cartto" class=" button btn btn-warning" name="cart" ><img src="images/add-to-cart.png" height="30px" alt=""> Add to Cart</button>
          <button type="submit" class=" button btn btn-primary" name="productshow"><i class="fa fa-eye" aria-hidden="true"></i></button>
          
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


    <?php
    
}
elseif(isset($_REQUEST['formal'])){

    ?>
    <div class="container-fluid">
    <div class="row">
    <?php
   

    $sql="SELECT * FROM product where category ='formal' ";

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
          
          <button type="submit" class=" button btn btn-warning" name="cart" ><img src="images/add-to-cart.png" height="30px" alt=""> Add to Cart</button>
          <button type="submit" class=" button btn btn-primary" name="productshow"><i class="fa fa-eye" aria-hidden="true"></i></button>
          
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


    <?php
    
}
elseif(isset($_REQUEST['sneakers'])){
    ?>
    <div class="container-fluid">
    <div class="row">
    <?php
   

    $sql="SELECT * FROM product where category ='sneakers' ";

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


    <?php
    
}
?>
<script>
    $(document).ready(function(){  
    $("#cartto").click(function(){  
        alert("This paragraph was clicked.");  
    });  
});  
    </script>