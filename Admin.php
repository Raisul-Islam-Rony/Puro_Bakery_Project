<?php
$conn=mysqli_connect('localhost','root','','puro_db');




if(isset($_POST['add_product']))
{
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $product_image=$_FILES['product_image']['name'];
    $product_image_tmp_name=$_FILES['product_image']['tmp_name'];
    $product_image_folder='uploaded_img/'.$product_image;

    if(empty($product_image) || empty($product_name) || empty($product_price))
    {
        $message[]='Please Fill Out All Info';
    }

    else
    {
        $insert="INSERT INTO `product` ( `Name`, `Price`, `Image`) VALUES ( '$product_name', '$product_price', '$product_image');";
        $upload=mysqli_query($conn,$insert);
        if($upload)
        {
            
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[]='New Product Added Successfully';
        }

        else
        {
            $message[]='Could Not Add';
        }
    }

}

if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE FROM `product` WHERE `product`.`Id` = $id;");
    header('location:Admin.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<style>

    body
    {
        
        margin: 0px;
    }
    
.container {
    padding: 2.5rem;
    max-width: 900px;
    margin: 0 auto;
    

    margin-left: 350px;
    
}

.admin-product-form-container {
    max-width: 50rem;
    
    margin: 20px;
    padding: 2.5rem;
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

a
{
    text-decoration: none;
}
.btn
{
    display: block;
    width: 91%;
    padding: 0.5rem;
    font-size: 1rem;
    font-size: 15px;
    background-color:rgb(128, 0, 64);
    color: white;

    
    
}



.btn1
{
    display: block;
    margin-left: 40px;
    margin-right: 40px;
    padding: 0.5rem;
    font-size: 1rem;
    margin-top: 5px;
    margin-bottom: 10px;
    background-color:rgb(0, 179, 89);
    color: white;

}

.btn2
{
    display: block;
    margin-left: 40px;
    margin-right:40px;
    padding: 0.5rem;
    font-size: 1rem;
    background-color:rgb(102, 20, 0);
    color: white;
}
.Message
{
    text-align: center;
    display: block;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 1.7rem;
    padding: 10px;
    margin: 10px;


}

.product-display
{
    margin: 2rem 0;
    overflow-y: scroll;
    padding-left: 70px;
    padding-right: 70px;
    
}

.product-display-table
{
    width: 100%;
    text-align: center;
    
}

.product-display-table thead
{
   
    background-color:rgb(204, 204, 204);
    
    
}

.product-display-table th
{
    padding: 0.2rem;
    font-size: 1.5rem;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border-bottom: var(--border);
}

.product-display-table td
{
    font-size: 20px;
    text-align: center;
}
.admin-ph
{
    margin: 0px;
    
    background-color: #333;
    height: 75px;
    color: white;
    display: flex;
    
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
    
}
.desc
{
    width: 40%;
}

.logo
{
    float: right;
    margin-left: 400px;
}
.logo img
{
    margin-left: 30px;
}

.cake
{
    width: 90%;
    display: flex;
    flex-wrap: wrap;
    margin: 80px;
    margin-top:70px;
    
    margin-left:70px;
    background-color: rgb(230, 230, 230);
}

.content
{
    margin: 20px;
    margin-right: 50px;
    margin-top: 50px;
    margin-left: 50px;
    background-color: #fbf5f5;
    width: 25%;
    
    
    
}
.content p
{
    text-align: center;
    font-size: 25px;
   
}

.btn33
{
  
    
    padding: 0.5rem;
    margin-left: 50px;
    margin-top: 50px;
    font-size: 20px;
    padding-left: 15px;
    padding-right: 15px;
    background-color:rgb(128, 0, 64);
    
    
    color: white;

    
    
}

.btn56
{
  
    
    padding: 0.5rem;
    margin-left: 50px;
    margin-top: 50px;
    font-size: 20px;
    padding-left: 15px;
    padding-right: 15px;
    background-color:rgb(128, 0, 64);
    
    
    color: white;

    
    
}

</style>
<body>

<?php
$result="SELECT * FROM `product`;";
$select=mysqli_query($conn,$result);
$countProduct=mysqli_num_rows($select);


$result="SELECT * FROM `customer`;";
$select=mysqli_query($conn,$result);
$countCustomer=mysqli_num_rows($select);


$result="SELECT * FROM `order_food`;";
$select=mysqli_query($conn,$result);
$countOrder=mysqli_num_rows($select);



?>



<div class="admin-ph">
    <div class="image">
        <img src="images/client1.jpg" width="70px" height="60px"alt="">
    </div>

    <div class="desc">
        <p>Make Changes Carefully</p>
    </div>

   

</div>






<h2 style="font-size: 35px;  padding-left:60px;">Dashboard :</h2>

    <div class="dashboard" style="margin-left: 60px; display:flex; margin-bottom:30px; margin-left:120px;">
        <div class="c1" style="background-color: rgb(122, 122, 82); width:25%; height:150px;margin-left:50px; color:white">
        <p style="text-align: center; font-size:30px">Total Product</p>
        <p style=" font-size:30px ; padding-left: 25px"><?php echo $countProduct;?> </p>
    </div>



    <div class="c1" style="background-color: rgb(122, 122, 82); width:25%; height:150px;margin-left:50px; color:white">
        <p style="text-align: center; font-size:30px">Total Customer</p>
        <p style=" font-size:30px ; padding-left: 25px"><?php echo $countCustomer;?> </p>
        </div>




        
        <div class="c1" style="background-color: rgb(122, 122, 82); width:25%; height:150px;margin-left:50px; color:white">
        <p style="text-align: center; font-size:30px">Total Order</p>
        <p style=" font-size:30px ; padding-left: 25px"><?php echo $countOrder;?> </p>
    </div>
    </div>

<br>
<br>
<br>











<div class="container" style="margin-top: 50px;">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">

        <h3 style="font-size: 20px;">Add a New Product</h3>
        <input type="text" placeholder="Product Name" name="product_name" class="box">
        <input type="number" placeholder="Product Price" name="product_price" class="box">
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="product_image" class="box">
        <input type="submit" class="btn" name="add_product" value="Add Product">
        </form>

    </div>


</div>

<?php
    $select=mysqli_query($conn,"SELECT * FROM `product`;");
?>


<h2 style="font-size: 35px;  padding-left:600px;">Product Display</h2>

<div class="product-display">
    <table class="product-display-table" border="1px">
        <thead>
            <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th colspan="2">Action</td>
            </tr>
        </thead>

        <?php

        while($row=mysqli_fetch_assoc($select)){ ?>
        <tr>
            <td><img src="uploaded_img/<?php echo $row['Image'];?>" height="80px" width="80px" alt=" "></td>
            <td><?php echo $row['Name'];?></td>
            <td>BDT <?php echo $row['Price'];?>-/</td>
            <td>
                <a href="Admin_Update.php?edit=<?php echo $row['Id'];?>" class="btn1">Edit</a>
                <a href="Admin.php?delete=<?php echo $row['Id'];?>" class="btn2">Delete</a>
            </td>




            

        </tr>
        




<?php } ?>




        














    </table>
</div>










</div>

<?php 

$res="SELECT * FROM `review`";
$rev=mysqli_query($conn,$res);

?>



<h2 style="font-size: 35px;  padding-left:600px;">View Review</h2>

<div class="cake">
<?php while($row=mysqli_fetch_assoc($rev)){ ?>
    <div class="content">
       
   
    <p><?php echo $row['Review'];?></p>
   

    </div>
    <?php } ?>
    
</div>

    
</body>
</html>