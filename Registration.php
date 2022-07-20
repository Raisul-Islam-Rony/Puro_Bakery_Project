<?php
$conn=mysqli_connect('localhost','root','','puro_db');




if(isset($_POST['register']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  $address=$_POST['address'];


  $insert="INSERT INTO `customer` (`Username`, `Name`, `Password`, `Address`) VALUES ('$username', '$name', '$password', '$address');";
  $upload=mysqli_query($conn,$insert);


}


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>

.back
{
    margin: 100px;
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




    </style>
</head>
<body>


    


<div class="back">


<div class="form-popup" id="myForm1">
        <div class="form-header">Fill Up The Neccessary Info</div>

        <form action="<?php $_SERVER['PHP_SELF']?>" class="form-container" method="POST">

            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label for="Name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="Address"><b>Address</b></label>
            <input type="text" placeholder="Address" name="address">



            <div class="btncls2">
            <input type="submit" class="btn" name="register" value="Register"> 

        </div>
        <div class="moveToSignUp">
          <button ><a href="Login.php">Already Registered? Move To Sign in?</a></button>
        </div>


        </form>

       
    </div>



</div>



</body>
</html>