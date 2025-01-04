
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           body{
            background:wheat;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #loginForm input{
            height: 12%;
            width: 75%;
            margin: 0 auto;
            outline: none;
            margin-left: 40px;
            margin-bottom: 20px;
            background: rgba(255,255,255,0.6);
            border: none;
            padding: 5px 5px;
            border-radius: 5px;
        }
        #loginForm{
            background:rgba(255,255,255,0.3);
            height: 280px;
            width: 300px;
            display:flex;
            flex-direction: column;
            justify-content: center;
          
            border-radius: 10px;
        }
        #loginForm #loginSend{
           background:linear-gradient(to left,#fff,green);
           border-radius: 5px;
           width: 50%;
           margin: 5px auto;
           height: 14%;
           cursor: pointer;
           text-transform: uppercase;
           font-size: 16px;
           font-weight: 600;
           color: #fff;
        }
        #loginForm #loginSend:hover{
            background:linear-gradient(to left,green,#fff);
        }
        h3{
           
            background: linear-gradient(to left,#fff,green);
            height: 10%;
            text-align: center;
            padding: 20px 0;
            border-radius: 10px 10px 0 0;
            margin-top: -10px;
            color: #fff;
            font-size: 25px;
            font-weight:700 ;
        }
    </style>
</head>
<body>
<?php
include("connect1.php");
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST["password"];
    $sqllog="SELECT * from user where email='$email' and password='$password'";
    $resultlogin=mysqli_query($conn,$sqllog);
    if(mysqli_num_rows($resultlogin)>0){
header(header: "location: reservation.php");
echo "<script>
let loginError='';
</script>";
}
else{
   echo "<script>
   let loginError='email or password incorrect';
   </script>";
 
}
}
?>
 <form action="login.php" method="POST"  >
            <div id="loginForm">
                <h3>LOG IN FORM</h3>
                <span id="loginError" style="color:red;margin-left:60px;">
                    <script> let span=document.getElementById('loginError');
                        span.innerHTML=loginError;
                    </script>
                   
                </span>
                <input type="email" placeholder="email" name="email" required>
                <input type="password" placeholder="password" name="password" required>
                 
                <input type="submit" value="login" name="login" id="loginSend" >
             </div>
          </form>
</body>
</html>