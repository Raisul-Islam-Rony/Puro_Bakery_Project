<?php
 session_start();

if(isset($_POST['login']))
{

  $username=$_POST['username'];
 
  $_SESSION['name']=$username; 
}



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







.outContainer
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    margin-left: 300px;
    margin-right: 100px;
    margin-top: 25px;

   
    
    margin-bottom: 50px;
    
}


.card1
{
    height: 250px;
    width: 350px;

    background-color: rgb(209, 209, 224);
    
    
    margin-top: 20px;
    margin-left: 40px;
    margin-right: 40px;
}

button
{
    margin-left: 100px;
    margin-top: 25px;
    background-color: rgb(26, 26, 26);
    padding-left: 10px;
    padding-right: 10px;
}
a
{
    text-decoration: none;
    color: #fbf5f5;
    font-size: 20px;
}

.head p
{
    text-align: center;
    font-family: 'Arial', 'Arial Narrow', sans-serif;
    font-size: 30px;
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
.navbar a:hover,
 .dropdown:hover .dropbtn {
     background-color: rgb(132, 132, 225);
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
    <a href="Profile.php" style="float: right;"><?php echo $_SESSION['name'];?></a>
    
    <a href="Outlet.php" >Outlets</a>
  
    
</div>





</header>

<div class="head1">
<p>  Our Outlets</p>
</div>



<div class="outContainer">
    <div class="card1">
    <p style="text-align: center; font-size:25px "><b>Banani</b> </p>
    <p style="padding-left: 10px;">Navana Rowshan Sayed Plaza, Ground Floor, Plot 47, Block H, Road 11, Banani, Dhaka.. </p>

    <p style="font-size: 20px; padding-left: 10px;">Call: 01777784877</p>
    
    <button><a href="https://goo.gl/maps/3Yb98HqRdd3JKVah8">Get Direction</a></button>
    
 
    </div>



    <div class="card1">
    <p style="text-align: center; font-size:25px "><b>Gulshan</b> </p>
    <p style="padding-left: 10px;">Rupayan Golden Age, (Ground Floor), 99, Gulshan Avenue, Dhaka-1212, Bangladesh. </p>

    <p style="font-size: 20px; padding-left: 10px;">Call: 01777784877</p>
    
    <button><a href="https://goo.gl/maps/hJT1bBxtzBf3E5Uq5">Get Direction</a></button>
    
 
    </div>
    
    <div class="card1">
    <p style="text-align: center; font-size:25px "><b>Bansree</b> </p>
    <p style="padding-left: 10px;">House 33, Road 1, Block C, Banasree, Rampura, Dhaka </p>
    <p style="font-size: 20px; padding-left: 10px;">Call: 01777784877</p>
    
    <button><a href="https://goo.gl/maps/EYjM8y6erTU7DKLp6">Get Direction</a></button>
    
 
    </div>



    <div class="card1">
    <p style="text-align: center; font-size:25px "><b>Uttara Sector 1</b> </p>
    <p style="padding-left: 10px;">Aftab Heritage Commercial Complex, 1st floor, House 02,Road 04, Sector 01, Uttara, Dhaka. </p>

    <p style="font-size: 20px; padding-left: 10px;">Call: 01777784877</p>
    
    <button><a href="https://goo.gl/maps/tTeLQHCY5VoXiwsm6">Get Direction</a></button>
    
 
    </div>

    <div class="card1">
    <p style="text-align: center; font-size:25px "><b>Mohakhali</b> </p>
    <p style="padding-left: 10px;">Shop No- 35, Ground Floor, SKS Tower, VIP Road, Mohakhali, Dhaka </p>

    <p style="font-size: 20px; padding-left: 10px;">Call: 01777784877</p>
    
    <button><a href="https://goo.gl/maps/LtY3t62r3wuZcwd4A">Get Direction</a></button>
    
 
    </div>


    <div class="card1">
    <p style="text-align: center; font-size:25px "><b>Khilkhet</b> </p>
    <p style="padding-left: 10px;">Lake City Concord (Beside One Stop), Khilkhet, Dhaka</p>

    <p style="font-size: 20px; padding-left: 10px;">Call: 01777784877</p>
    
    <button><a href="https://g.page/puro-pastry-bakery?share">Get Direction</a></button>
    
 
    </div>


    
    
 
    
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