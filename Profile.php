<?php
$conn=mysqli_connect('localhost','root','','puro_db');
 session_start();

if(isset($_POST['login']))
{

  $username=$_POST['username'];
 
  $_SESSION['name']=$username; 
}

$uName=$_SESSION['name'];

$result="SELECT * FROM `customer`   WHERE `customer`.`Username` ='$uName';";
$select=mysqli_query($conn,$result);


$order="SELECT * FROM `order_food`   WHERE `order_food`.`Username` ='$uName';";
$orderSelect=mysqli_query($conn,$order);

$count=mysqli_num_rows($orderSelect);

$_SESSION['total_order']=$count;









?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlets</title>

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
.des
{
    height: 300px;
}

.des h3
{
    font-size: 40px;
    margin: 50px;
    margin-left: 250px;
    margin-top:100px;
    
}


.container1
{
    width: 80%;
    background-color:rgb(234, 234, 250);
    margin: 85px;
    margin-left: 130px;
    height: 400px;
    display: flex;
    padding: 30px;
    

}
.content
{
    width: 50%;
    margin-right: 5px;
    padding-right: 80px;
    margin-top: 50px;
    margin-left:50px;
    
}

h2
{
    padding: 5px;
    font-family:  sans-serif;
    font-size: 30px;
}

p{
    font-size: 20px;
}
a
{
    text-decoration: none;
    color: white;
}

button
{
   
  
    background-color: rgb(77, 0, 0);
    text-align: center;
    color: white;
    padding: 8px;
    padding-left: 50px;
    padding-right: 50px;
}

.desc
{
    
    width: 40%;
    padding-left: 50px;
    background-color: rgb(255, 255, 230);
    
}





    </style>
</head>
<body>

    
<header>

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
    <a href="#home" style="float: right;"><?php echo $uName;?></a>
    
    <a href="Outlet.php" >Outlets</a>
  
    
</div>





</header>


<div class="container1">

<div class="content">

<img src="images/view.jpg" alt="" width="400px" height="300px">


</div>

<div class="desc">
<h2 style="text-align: center;"> <?php echo $_SESSION['name'] ;?></h2>
<img src="images/avatar.png" height="90px" width="90px" alt="">

<?php while($row=mysqli_fetch_assoc($select)){ ?>

    <p>Name : <?php echo $row['Name'];?> </p>
    <p>Address : <?php echo $row['Address']; ?></p>
    <p>Total No of Purchase : <?php echo $count ;?></p>


    <button><a href="Login.php">Logout</a></button>


    <?php } ?>
</div>

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