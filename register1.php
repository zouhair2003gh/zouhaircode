<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/797ccfbe82.js" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background: url('background.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
        header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
          
        }
        nav{
            width: 100%;
        }
        header nav ul{
            display: flex;
            gap: 30px;
            background: #fff;
            width: 40%;
            margin: 0 auto;
            padding: 10px 0;
            border-radius: 10px;
        }
        ul li{
            list-style: none;
            width: 100%;
        }
        ul li a{
            color: #000;
            text-decoration: none;
            text-transform: capitalize;
            font-size: 18px;
          padding: 10px;
          border-radius: 5px;
            text-align: center;
        }
        ul li a:hover{
            background: #ff8;
        }
        header .logo img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-left: 10px;
        }
        .button{
            display: flex;
            gap: 20px;
            margin-right: 20px;
            width: 20%;
        }
        .button a{
            padding: 5px;
            cursor: pointer;
            border-radius: 5px;
            outline: none;
            border: none;
            text-decoration: none;
            color: #fff;
            background: #000;
            transition: 0.4s ease;
        }
        .button a:hover{
            background: #fff;
            color: #000;
        }
    
      
       
     
      
       
    
     
      h6{
        position: absolute;
        left: 50%;
        top: 30%;
        font-size: 16px;
        color: red;
      }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo"><img src="logo.jpg"></div>
            <nav>
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">photos</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">help</a></li>
                </ul>
            </nav>
            <div class="button">
                <a href="login.php" id="login" >LOG IN</butto>
                <a href="register.php" id="sinUp">SIN UP</butto>
            </div>
           </header>
        
    </div>
 

</body>
</html>