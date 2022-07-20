<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .back
{
    margin: 100px;
    margin-left: 350px;
    width: 40%;
    background-color: rgb(153, 153, 153);
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
            font-size: 18px;
            padding-left: 40px;
            padding-right: 40px;
            margin-top: 10px;
            margin-left: 115px;
            
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
    
 .cancel {
            background-color: #4f3d03;
            color: white;
            font-size: 18px;
            padding-left: 40px;
            padding-right: 40px;
            margin-top: 15px;
            margin-left: 80px;
            
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
    <div class="form-popup" id="myForm">
        <div class="form-header">Welcome To Puro</div>

        <form action="HomePage.php" class="form-container" method="POST">

            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <div class="btncls">
            <input type="submit" class="btn" name="login" value="Login"><a href="HomePage.php"></a>

        </div>

        <div class="btncls1">
            <button type="button" class="cancel" ><a href="Registration.php">Register First</a></button>
        </div>

        </form>

       

    </div>
    </div>
</body>
</html>