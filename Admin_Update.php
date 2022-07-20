<?php

$conn=mysqli_connect('localhost','root','','puro_db');

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
    $message[]='Please Fill Out All Info';   
   }
   else{

     
      $update_data="UPDATE `product` SET `Name` = '$product_name', `Price` = '$product_price', `Image` = '$product_image' WHERE `product`.`Id` = $id;";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:Admin.php');
      }
      else{
        $message[]='Please Fill Out All Info';
      }

   }
};

?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>


<style>
.container {
    padding: 2rem;
    max-width: 900px;
    margin: 0 auto;
    

}

a
{
   text-decoration: none;
}

.admin-product-form-container {
    max-width: 50rem;
    
    margin: 20px;
    padding: 2rem;
    background-color:rgb(204, 204, 204);

}

 .admin-product-form-container h3 {
    text-align: center;
    margin-bottom: 1rem;
    font-size: 1.5rem;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    

} 




.box
{
    width: 90%;
    padding: 0.5rem;
    
    font-size: 0.7rem;
    margin: 0.5rem;
    
}

.btn
{
    display: block;
    width: 91%;
    padding: 0.5rem;
    font-size: 1rem;
    background-color:rgb(128, 0, 64);
    color: white;

    
    
    
}


.btn1
{
    display: block;
    width: 91%;
    margin-top: 10px;
    padding: 0.3rem;
    font-size: 1rem;
    margin-bottom: 10px;
    background-color:rgb(128, 0, 64);
    color: white;
    text-align: center;

}

.admin-ph
{
   margin:0px;
    
    background-color: #333;
    height: 75px;
    display: flex;
    color: white;
}
.image
{
    padding: 12px;
    width: 25%;
}
.desc p
{
    text-align: center;
    font-size: 30px;
    padding-top: 10px;
}
.desc
{
    width: 40%;
}
.logo img
{
    margin-left: 30px;
}

.logo
{
    float: right;
    margin-left: 400px;
}

.body
{
    margin: 0px;
}

</style>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>
<?php
    $select=mysqli_query($conn,"SELECT * FROM `product`;");
?>


<div class="admin-ph">
    <div class="image">
    <img src="images/client1.jpg" width="70px" height="60px"alt="">
    </div>

    <div class="desc">
        <p>Make Changes Carefully</p>
    </div>

    
</div>


<div class="container">


<div class="admin-product-form-container ">


   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 >Update The Product</h3>
      <input type="text" placeholder="Product Name" name="product_name" class="box">
        <input type="number" placeholder="Product Price" name="product_price" class="box">
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="product_image" class="box">
        <input type="submit" class="btn" name="update_product" value="Update Product">
      <a href="Admin.php" class="btn1">Go back!</a>
   </form>
   


   

   

</div>

</div>

</body>
</html>