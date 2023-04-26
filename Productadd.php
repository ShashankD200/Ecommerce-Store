

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<?php include 'Header.php'?>    

  <div class="container-fluid text-center">    
        <div class="row content">
          <div class="col-md-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
          </div>
          <div class="col-md-8 text-left"> 
            <h1>Welcome</h1>
            <div>
                <form action="Productdetail.php" method="post" class="form-group" enctype="multipart/form-data" >
                    <label>Please Enter Product name</label>
                    <input type="text" name="pname" class="form-control">

                    <label>Please Select Product Category</label>
                    <select name="category" class="form-control">
                        <option value="Sports">Sports</option>
                        <option value="Formal">Formal</option>
                        <option value="Sneakers">Sneakers</option>
                        <option value="Casual">Casual</option>
                    </select>

                    <label>Please Enter Product Price</label>
                    <input type="number" name="pprice" class="form-control">

                    
                    <label>Please Enter Offer Price</label>
                    <input type="number" name="oprice" class="form-control">

                    <label>Please Enter Product Description</label>
                    <input type="text" name="description" class="form-control">



                    <label>Please Upload Product Image</label>
                    <input type="file" name="img" class="form-control">
                    <hr>
                    <input type="submit" value="Submit" class="btn btn-success form-control">
                    <hr>
                    <?php

                    if (isset($_REQUEST['success'])) {
                      ?>
                    <div class="alert alert-danger"> Your Product has been Added !!
                    </div>
                  <?php
                  }
                    
                    ?>
                </form>
            </div>
            <hr>
            <div>
            <h3>PRODUCTS DETAILS</h3>


<table class="table p-3 m-2">
  <tr>
    <th>Product ID </th>
    <th>Product Name </th>
    <th>Product Category </th>
    <th>Product Price </th>
    <th>Product Image </th>
  </tr>
  <?php
$sql="SELECT * FROM product";

$conn=mysqli_connect("localhost","root","asdfghjkl","practice");

$rs=mysqli_query($conn,$sql);
if($rs->num_rows>0){  


  while($row=mysqli_fetch_assoc($rs)){

?>
  <tr>
      <td><?=$row['id']?></td>
      <td><?=$row['pname']?></td>
      <td><?=$row['category']?></td>
      <td><?=$row['pprice']?></td>
      <td><?=$row['img']?></td>
      <td><a class="btn btn-primary"href="">Edit</a></td>
      <td><a class="btn btn-danger" href="delete.php">Delete</a></td>
   </tr>
   <?php
  }
}
  else{
    echo "NO Records";
  }


?>
</table>
</div>

          </div>
          <div class="col-md-2 sidenav">
            <div class="well">
              <p>ADS</p>
            </div>
            <div class="well">
              <p>ADS</p>
            </div>
          </div>
        </div>
      </div>
<!--       
      <footer class="container-fluid text-center">
        <p>Footer Text</p>
      </footer> -->
      
      </body>
      </html>
      
