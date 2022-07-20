<?php
$conn=mysqli_connect('localhost','root','','puro_db');
session_start();

if(isset($_GET['p_id']))
{
    $id = $_GET['p_id'];


$temp="INSERT INTO `cart` (`Id`) VALUES ('$id');";
$insertCart=mysqli_query($conn,$temp);
}

if(isset($_GET['cake']))
{
    $id = $_GET['cake'];


$temp="INSERT INTO `cart` (`Id`) VALUES ('$id');";
$insertCart=mysqli_query($conn,$temp);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <style>


body
        {
            margin: 0;
          
        }

.navbar 
      {
         
    
     overflow: hidden;
     background-color: #333;
     font-family: Arial;
     margin: 0;
     padding-left: 10%;
    
    }

        .navbar a {
     float: left;
     font-size: 20px;
     color: white;
     text-align: center;
     padding: 20px;
     text-decoration: none;
 }
 
 .navbar button {
     text-align: center;
     font-size: 20px;
 }
 
 .dropdown {
     float: left;
     overflow: hidden;
 }
 /* Dropdown button */
 
 .dropdown .dropbtn {
     font-size: 20px;
     border: none;
     outline: none;
     color: white;
     padding: 20px;
     background-color: inherit;
     font-family: inherit;
     /* Important for vertical align on mobile phones */
     margin: 0;
     /* Important for vertical align on mobile phones */
 }
 /* Add a red background color to navbar links on hover */
 
 .navbar a:hover,
 .dropdown:hover .dropbtn {
     background-color: rgb(6, 94, 19);
 }
 /* Dropdown content (hidden by default) */
 
 .dropdown-content {
     display: none;
     position: absolute;
     background-color: #fbf5f5;
     min-width: 160px;
     box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
     z-index: 1;
 }
 /* Links inside the dropdown */
 
 .dropdown-content a {
     float: none;
     color: black;
     padding: 15px;
     font-size: 15px;
     text-decoration: none;
     display: block;
     text-align: left;
 }
 /* Add a grey background color to dropdown links on hover */
 
 .dropdown-content a:hover {
     background-color: rgb(94, 74, 6);
 }
 /* Show the dropdown menu on hover */
 
 .dropdown:hover .dropdown-content {
     display: block;
 }
 
 .navbar input[type=text] {
     float: right;
     padding: 10px;
     border: none;
     font-size: 17px;
     margin-top: 10px;
     margin: 10px;
 }

 .navbar a:hover,
 .dropdown:hover .dropbtn {
     background-color: rgb(132, 132, 225);
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
.content img
{
    
    
    margin-top: 45px;
    margin-left: 50px;
    
}

.head1 
{
    text-align: center;
    font-family: 'Arial', 'Arial Narrow', sans-serif;
    font-size: 30px;
    
}

.head1
{
    background-color: rgb(122, 122, 82);
    color: #fbf5f5;
    width:400px;
    height: 40px;
    margin-left: 600px;
    width: 200px;
    margin-top: 10px;
}






.row {
    display: flex;
    flex-wrap: wrap;
}

ul {
    list-style: none;
}

.footer {
    background-color: #24262b;
    padding: 40px 0;
    margin: 0px;
}

.footer-col {
    width: 20%;
    padding: 0 15px;
}

.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
   
    margin-bottom: 35px;
    font-weight: 500;
    
    position: relative;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    padding-left: 10px;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
   
    width: 50px;
}

.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    text-align: left;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}

.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
}

.container
{
    margin: 0px;
}
.btn1
{
    display: block;
    margin-left: 40px;
    margin-right: 40px;
    padding: 0.5rem;
    font-size: 1.2rem;
    margin-bottom: 10px;
    background-color:rgb(51, 0, 26);
    color: white;
    text-align: center;
    margin-bottom: 25px;

}

.btn56
{
    display: block;
    margin-left: 40px;
    margin-right: 40px;
    padding: 0.5rem;
    font-size: 1.2rem;
    margin-bottom: 10px;
    background-color:rgb(102, 68, 0);
    color: white;
    text-align: center;
    margin-bottom: 25px;

}

.btn2
{
    display: block;
    margin-left: 30px;
    margin-right: 40px;
    padding: 0.5rem;
    font-size: 1rem;
    margin-bottom: 10px;
    background-color:rgb(51, 0, 26);
    color: white;
    text-align: center;
    margin-bottom: 25px;
    padding-left: 10px;
    padding-right: 10px;

}

.btn3
{
    display: block;
    margin-left: 90px;
    margin-right: 80px;
    padding: 0.5rem;
    font-size: 1rem;
    margin-bottom: 10px;
    background-color:rgb(51, 0, 26);
    color: white;
    text-align: center;
    margin-bottom: 25px;
    padding-left: 30px;
    padding-right: 30px;
    margin-top: 50px;
    float: right;

}



a:link 
{
    text-decoration: none;
}

.btn {
            background-color:rgb(51, 0, 26);
            color: white;
            font-size: 25px;
            padding-left: 40px;
            padding-right: 40px;
            margin-left: 100px;
            margin-top: 20px;
            
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
.range
{
    margin-left: 60px;
    margin-top: 15px;
}



.cartDesc
{

    margin: 30px;
    margin-left: 550px;
    border: 1px solid black;
    padding-left: 20px;
    padding-bottom: 20px;
    width: 500px;
    background-color: rgb(224, 224, 235);
}


.cartDesc p
{
    font-size: 30px;
}




    </style>
</head>
<body>




<div class=" navbar ">
  
  
<a href="HomePage.php">Home</a>
    <div class="dropdown ">
      <button class="dropbtn ">Porducts

      <i class="fa fa-caret-down "></i>

      </button>
      <div class="dropdown-content ">
      <a href="Cake.php">Cake </a>
      <a href="Cookies.php">Cookies</a>
      <a href="#">Pestry</a>
      <a href="CupCake.php"> Cup Cake</a>
    </div>
    </div>
    <a href="Cart.php">My_Cart</a>
    
    
    <form action="SearchResult.php" method="post" style="float: right;" >
      
    
    <input type="text" placeholder="Search..." name="search">
    <input type="submit" value="Search" style="font-size: 17px ;  margin-top:20px; background-color:rgb(51, 0, 26); color:#bbbbbb; margin-left:20px;">
    </form>
    <a href="Profile.php" style="float: right;"><?php echo $_SESSION['name'];?></a>
    
    <a href="Outlet.php" >Outlets</a>
  

</div>




<?php 

if(isset($_GET['Buy_Now']))
{
    $id = $_GET['Buy_Now'];

$temp="DELETE FROM `cart` WHERE `cart`.`Id`='$id';";
$insertCart=mysqli_query($conn,$temp);

}




?>

<?php

    $sum=0;
    
   
    $result="SELECT * FROM `product` NATURAL JOIN `cart`;";

    $pp=mysqli_query($conn,$result);
    $select=mysqli_query($conn,$result);

    while($xx=mysqli_fetch_assoc($pp))
    {
        $sum+=$xx['Price'];
    }

    $total=mysqli_num_rows($select);


    
    

   
?>

<div class="head1">
<p> Your Cart</p>
</div>



<div class="cake">
<?php while($row=mysqli_fetch_assoc($select)){ ?>
    <div class="content">
       
    <img src="uploaded_img/<?php echo $row['Image'];?>" height="240px"  width="240px" alt=" ">
    
    <p>Price : <?php echo $row['Price'];?> Taka</p>
    <a href="Cart.php?Buy_Now=<?php echo $row['Id'];?>" class="btn1">Remove From Cart</a>
    
   
    
   

    </div>
    <?php } ?>
    
</div>

<?php

$uName=$_SESSION['name'];

$order="SELECT * FROM `order_food`   WHERE `order_food`.`Username` ='$uName';";
$orderSelect=mysqli_query($conn,$order);

$count=mysqli_num_rows($orderSelect);
?>



<div class="cartDesc">
    <p>Total Number Of Product : <?php echo $total; ?> </p> 
    <p>Total Amount : <?php 
    if($count>=5)
    {
        echo $sum-0.1*$sum;
    }

    else
    {
        echo $sum;
    }
    
    
    
    
    ?>




        </p>

    <p>Discount Price : 

    <?php 
    if($count>=5)
    {
        echo 0.1*$sum;
    }

    else
    {
        echo '0';
    }
    
    
    
    
    ?>






    </p>
    <a href="PaymentGateWay.php?price=<?php echo $sum ;?>" class="btn56">CHECKOUT</a>
    
</div>










<footer class="footer">
  	 <div class="container ">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
  	 				<li><a href="#">About us</a></li>
  	 				<li><a href="#">Our Services</a></li>
  	 				<li><a href="#">Privacy Policy</a></li>
  	 				<li><a href="#">Affiliate Program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Get Help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">Shipping</a></li>
  	 				<li><a href="#">Returns</a></li>
  	 				<li><a href="#">Order status</a></li>
  	 				<li><a href="#">Payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Online Shop</h4>
  	 			<ul>
  	 				<li><a href="#">Cake</a></li>
  	 				<li><a href="#">Cup Cake</a></li>
  	 				<li><a href="#">Cookies</li>
  	 				<li><a href="#">Pestry</a></li>
  	 			</ul>
  	 		</div>
  	 		
         <div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 			<ul>
  	 				<li><a href="#">01748703341</a></li>
  	 				<li><a href="#">islamraisul.1314@gmail.com</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 	</div>
  	 </div>

    
</body>
</html>