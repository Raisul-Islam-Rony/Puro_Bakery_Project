<?php
$conn=mysqli_connect('localhost','root','','puro_db');
session_start();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cup Cake</title>

    <style>
        body
        {
            margin: 0;
            
        }
        .btn3
{
    display: block;
    margin-left: 90px;
    margin-right: 80px;
    margin-top: 50px;
    padding: 0.5rem;
    font-size: 1rem;
    margin-bottom: 10px;
    background-color:rgb(51, 0, 26);
    color: white;
    text-align: center;
    margin-bottom: 25px;
    padding-left: 30px;
    padding-right: 30px;
    float: right;

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
    background-color:  rgb(122, 122, 82);
    color: #fbf5f5;
    width:400px;
    height: 40px;
    margin-left: 525px;
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


a:link 
{
            text-decoration: none;
}

p
{
    text-align: center;
    font-size: 30px;
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
.navbar a:hover,
 .dropdown:hover .dropbtn {
     background-color: rgb(132, 132, 225);
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

if(isset($_POST['filter']))

{
 $result="SELECT * FROM `product`   WHERE `product`.`Name` LIKE '%Cup%' ORDER BY (`product`.`Price`);";
 
 $select=mysqli_query($conn,$result);
}
 
elseif(isset($_POST['rangeFilter']))
   {
        $minVal=$_POST['mini'];
        $maxVal=$_POST['max'];
        $result="SELECT * FROM `product` WHERE `product`.`Name` LIKE '%Cup%' AND `product`.`Price` BETWEEN $minVal AND $maxVal;";
        $select=mysqli_query($conn,$result);
   }
else
{
 $result="SELECT * FROM `product`   WHERE `product`.`Name` LIKE '%Cup%' ;";
 $select=mysqli_query($conn,$result);

}
    
    
?>

<div class="head1">
<p> Cup Cake For Purchase</p>
</div>


<div class="head">

<form action="<?php $_SERVER['PHP_SELF']?>"  method="POST">
<input type="submit" name="filter" class="btn3" value="Filter">
</form>
</div>


<div class="range">
<form action="<?php $_SERVER['PHP_SELF']?>"  method="POST">
<label for="Min">Min</label>
<input type="number" name="mini">
<br>
<br>
<label for="Max">Max</label>
<input type="number" name="max" value="Maxi">
<br>
<br>

<input type="submit" name="rangeFilter"  value="Range" class="btn2">

</form>
</div>


<?php 

if(isset($_GET['Buy_Now']))
{
    $id = $_GET['Buy_Now'];


$temp="INSERT INTO `cart` (`Id`) VALUES ('$id');";
$insertCart=mysqli_query($conn,$temp);
}

function exist($isb)
{
    $conn=mysqli_connect('localhost','root','','puro_db');
    $select=mysqli_query($conn,"SELECT * FROM `cart` WHERE `cart`.`Id`=$isb ;");

    $row=mysqli_num_rows($select);
    if($row)
    {
        return true;
    }


    else
    {
        return false;
    }

}





?>















<div class="cake">
<?php while($row=mysqli_fetch_assoc($select)){ ?>
    <div class="content">
       
    <img src="uploaded_img/<?php echo $row['Image'];?>" height="240px"  width="240px" alt=" ">
    <p>Price : <?php echo $row['Price'];?> Taka</p>

    <a href="Product_Desc.php?Buy_Now=<?php echo $row['Id'];?>" class="btn1">Product_details</a>
    <a href="CupCake.php?Buy_Now=<?php echo $row['Id'];?>" class="btn1">

    <?php
        if(exist($row['Id']))
        {
            echo "Added To Cart";
        }

        else
        {
            echo "Add To Cart";
        }
    ?>





</a>
    
   

    </div>
    <?php } ?>
    
</div>







<?php

$count=mysqli_num_rows($select);

    
    if(!$count)
    {
        echo "<P> Sorry, Right Now There Are None!!!</p> <br>";
        $var=10;
        while($var)
        {
            echo "<br>";
            $var--;
        }
    }
?>



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