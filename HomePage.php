


<?php
 session_start();

if(isset($_POST['login']))
{

  $username=$_POST['username'];
 
  $_SESSION['name']=$username; 

  $cookie_name="user";
  $cookie_value=$username;
  setcookie($cookie_name, $cookie_value, time()+(30*60));
}



?>

<?php
$conn=mysqli_connect('localhost','root','','puro_db');



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    
    
    <link rel="stylesheet"  href="Home.css">
    
    <style>
      body
      {
       margin: 0;
      }

      .navbar a:hover,
 .dropdown:hover .dropbtn {
     background-color: rgb(132, 132, 225);
 }


      .navbar 
      {
         
    
     overflow: hidden;
     background-color: #333;
     font-family: Arial;
     margin: 0;
     padding-left: 10%;
    
    }

    .navbar button
    {
      font-size: 15px;
      text-align: center;
      background-color:rgb(51, 0, 26);
    }

.textP {
     text-align: center;
     font-size: 40px;
     font-family: 'Playfair Display', serif;
     font-weight: bolder;
 }
 h2 {
    
    text-align: center;
 }
 .card1 {
  width: 25%;
  margin: 25px;
  padding: 5px;
  background-color:rgb(230, 230, 230);
  margin: 50px;

     
 }





 .name
 {
  text-align: center;
  font-size: 25px;
  font-weight: bolder;
  
 }




 .description
 {
  text-align:center;
  
 }
 .order
 {
  padding-left: 80px;
  padding-bottom: 5px;
 }

 .order button
{
  
  font-size: 15px;
  padding: 6px;
  text-align: center;
  
  
  margin-bottom: 20px;
  padding-left: 30px;
 
  padding-right: 30px;
  color: white;
  background-color: rgb(26, 26, 26);
  

}
.container2
{
  display: flex;
  width: 85%;
  padding-left: 70px;
  margin: 20px;
  margin-left:75px;
  background-color:rgb(255, 255, 230);
}

.container1
{
  display: flex;
  width: 85%;

  padding-left: 70px;
  margin: 20px;
  background-color: rgb(255, 255, 230);
  margin-left:75px;
}


 .mySlide {
    display: none;
    height: 600px;
    padding-top: 24px;
    padding-bottom: 10px;
   
}

.mySlides {
    width: 70%;
    margin-left: 220px;
}

.slideContainer {
    
  background-color: rgb(179, 179, 179);
    height: 650px;
    
    margin: 5px;
}


.topRated h2
{
  font-size: 40px;
  
  font-family: 'Playfair Display', serif;
  padding: 20px;
}


.back
{
    margin-top:25px;
    margin-left: 350px;
    width: 40%;
    background-color:rgb(153, 153, 153);
    padding: 20px;
    padding-left: 210px;
}        
.form-popup
     {      
            width: 65%;
            border: 2px solid rgb(5, 96, 87);
            background-color: rgb(255, 255, 255);
            right: 15px;
           
            
            
        }
        
        .form-header {
            text-align: center;
            font-size: 20px;
            padding-top: 15px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        .form-container {
            max-width: 300px;
            padding: 15px;
            background-color: white;
        }
        
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 15px 0;
            border: none;
            background: #f1f1f1;
        }
        
        

        .btn {
            background-color: #4f3d03;
            color: white;
            font-size: 20px;
            padding-left: 40px;
            padding-right: 40px;
            margin-top: 10px;
            
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }


    
.btncls2
{
  padding-left: 90px;
}

button
{
    font-size: 12px;
}


.moveToSignUp {
     padding: 20px;
     padding-left: 70px;
     border-radius: 5px;
 }

 .moveToSignUp button
 {
            background-color:#4f3d03;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 5px;
 }
    
 a
 {
    text-decoration: none;
    color: white;
 }

.container {
    margin: auto;
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

.btncls2
{
  padding-left: 100px;
}

.mailHead
{
  background-color:  rgb(122, 122, 82);
  height: 65px;
  width: 40%;
  margin-left: 450px;
  margin-top: 100px;
  display: flex;
}
 

 .mailHead p
 {
  text-align: center;
  color: white;
  font-size: 30px;
  margin-top: 13px;
  margin-left: 120px;
 }

 .mailHead img
 {
  margin: 7px;
 }



 .container33
{
    width: 80%;
    background-color:rgb(230, 230, 230);
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

.desc h2
{
    padding: 5px;
    font-family:  sans-serif;
    font-size: 30px;
}

.desc p{
    font-size: 20px;
}

.desc button
{
    margin-left: 250px;
    margin-top: 50px;
    background-color: rgb(77, 0, 0);
    text-align: center;
    color: white;
    padding: 8px;
    padding-left: 25px;
    padding-right: 25px;
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

<section class="home" id="home">
        <div class="homeContent">
            <h2>Taste The Best Cake In Town</h2>

            </p>
            <div class="home-btn">
                <a href="About_Us.php"><button>See More..</button></a>
            </div>
        </div>
    </section>

 
    <div class="mailHead" style="margin-bottom:40px;">
  <img src="images/cupcake2.jpg" height="50px" width="50px" alt="">
  <p >New Featured Product</p>
    </div>
  
   

 <div class="container2">

 <div class="card1">
    <img src="images/backUnplash.jpg" width="100%"  height="300px"alt="Cake1">
    <div class="name">
      <p>Chocolate Double Deccer</p>
      
    </div>
    

    <div class="order">
      <button><a href="Cake.php">Product Page</a></button>
    </div>

 
    
   </div>

   <div class="card1">
    <img src="images/cakeUnplash1.jpg" width="100%" height="300px" alt="Cake1">
    <div class="name">
      <p>Mixed Vanilla</p>
    </div>
    

    <div class="order">
    <button><a href="Cake.php">Product Page</a></button>
    </div>

 
    
   </div>


   <div class="card1">
    <img src="images/ck.jpg" width="100%" height="300px" alt="Cake1">
    <div class="name">
      <p>Chocolate Cake</p>
    </div>
    

    <div class="order">
    <button><a href="Cake.php">Product Page</a></button>
    </div>

 
    
   </div>

   
 </div>

 <br>
 <br>
 <br>


 

 <div class="container1">

<div class="card1">
   <img src="images/cakeUplash3.jpg" width="100%" height="300px" alt="Cake1">
   <div class="name">
     <p>Dark Creamy Cake</p>
   </div>
   
   <div class="order">
   <button><a href="Cake.php">Product Page</a></button>
   </div>


   
  </div>

  <div class="card1">
   <img src="images/cocolatecake.jpg" width="100%" height="300px" alt="Cake1">
   <div class="name">
     <p>Puro_Special</p>
   </div>
   

   <div class="order">
   <button><a href="Cake.php">Product Page</a></button>
   </div>


   
  </div>


  <div class="card1">
   <img src="images/cupcake4.jpg"width="100%" height="300px" alt="Cake1">
   <div class="name">
     <p>Cup Cake</p>
   </div>
   

   <div class="order">
   <button><a href="Cake.php">Product Page</a></button>
   </div>


   
  </div>

  
</div>



<div class="mailHead" style="margin-bottom:40px;">
  <img src="images/cupcake.jpg" height="50px" width="50px" alt="">
  <p >Our Availabe Product</p>
  <br>
  
  
 
</div>

<div class="slideContainer">

<div class="mySlides">

<a href="Cake.php">
<img src="images/cakeUnplash1.jpg" alt="cake" class="mySlide" width="100%">
    <img src="images/backUnplash.jpg" alt="cake" class="mySlide" width="100%">
    
    <img src="images/ck.jpg" alt="cake" class="mySlide" width="100%">
    <img src="images/cocolatecake.jpg" alt="cake" class="mySlide" width="100%">
    <img src="images/cupcake4.jpg" alt="cake" class="mySlide" width="100%">
    <img src="images/cookies.jpg" alt="cake" class="mySlide" width="100%">
</a>
    


</div>

</div>





<div class="container33">

<div class="content">

<img src="images/view.jpg" alt="" width="400px" height="300px">


</div>

<div class="desc">
<h2 style="text-align: center;">About Us</h2>

    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum quo aut quidem hic id nam similique minima fugit fuga nostrum, animi odit, ullam quis inventore! Voluptatem, eos. Explicabo eaque iure repellat temporibus illum ipsum autem culpa corporis nemo! Quasi quibusdam, ipsam sunt exercitationem saepe voluptas ea assumenda numquam non quae.</p>
    <a href="HomePage.php"><button>Know More...</button></a>
</div>

</div>





















<div class="mailHead">
  <img src="images/cupcake4.jpg" height="50px" width="50px" alt="">
  <p>Share Your Views</p>
  
 
</div>




<div class="back">


<div class="form-popup" id="myForm1">
        

        <form action="<?php $_SERVER['PHP_SELF']?>" class="form-container" method="POST">

            
            <label for="message"><b>Message</b></label>
            <br>
        
            <textarea name="message" rows="5" cols="35"></textarea>



            <div class="btncls2">
            <input type="submit" class="btn" name="sent" value="Send"> 

        </div>
       


        </form>

       
    </div>



</div>

<?php

if(isset($_POST['sent']))
{
  $view=$_POST['message'];
  $Name=$_SESSION['name'];
  $viewIns="INSERT INTO `review` (`UserName`, `Review`) VALUES ('$Name', '$view');";
  $select=mysqli_query($conn, $viewIns);
}


?>


<div>
  <br>
  <br>
  <br>
  <br>
  
  
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














    <script>
        

        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlide");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>


</form>
</div>



   

</body>
</html>