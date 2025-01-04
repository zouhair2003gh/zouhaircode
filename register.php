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
        #sinUpForm{
            background-color:rgba(255,255,255,0.3);
          height: 300px;
            width: 300px;
            display:flex;
            flex-direction: column;
            justify-content: center;
          
            border-radius: 10px;
           
        }
        #sinUpForm #sinUpSend{
            color: white;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 16px;
            line-height: 10px;
            background: linear-gradient(to left,#fff,green);
            cursor: pointer;
        }
        #sinUpForm #sinUpSend:hover{
            background: linear-gradient(to left,green,#fff);
        }
         #sinUpForm input{
            height: 30px;
            width: 75%;
            margin: 0 auto;
            outline: none;
            margin-bottom: 20px;
            margin-left: 40px;
            border: none;
            background: rgba(255,255,255,0.6);
            padding:10px 5px;
            border-radius: 4px;
        }
         h3{
         
            background: linear-gradient(to left,#fff,green);
            height: 25%;
            text-align: center;
         margin-top: 0;
         line-height: 60px;
            border-radius: 10px 10px 0 0;
            color: #fff;
            font-size: 25px;
            font-weight: 700;
        }
      
    </style>
</head>
<body>
    <?php
   include("connect1.php");
if(isset($_POST["register"])){
if(empty($_POST['name'])){
    echo "<script>
   let error='veillez enter'+' '+'name';
 
    </script>";
}
else if(empty($_POST['email'])){
    echo "<script>
   let error='veillez enter'+' '+'email';

    </script>";
}
else if(empty($_POST['password'])){
    echo "<script>
   let error='veillez enter'+' '+password';
  
    </script>";
}
else{
   
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $register=$_POST["register"];
    $quer="SELECT * from user_r WHERE name='$name' and email='$email'";
    $result=mysqli_query($conn,$quer);
    if(mysqli_num_rows($result)==0){
        $sql="INSERT INTO user_r values('$name','$email','$password')";
        mysqli_query($conn,$sql);
        echo "<script>
        let error='inscription correct';
       
         </script>";
    }
    else{
        echo "<script>
        let error='deja inscrit';
       
         </script>";
    }
 }
     
}

?>
    <form  method="POST">
        <div id="sinUpForm">
              <h3>SIN UP FORM</h3>
              <span id="error" style="color:red;margin-left:80px;"><script>
                let span=document.getElementById('error');
                if(error=='inscription correct'){
                    span.style.color='green';
                }
                else{
                    span.style.color='red';
                }
                span.innerHTML=error;
               
                
              </script></span>
                <input type="text"  id='name' placeholder="name" name="name" >
                <input type="email" placeholder="email" name="email" id="email" >
                <input type="password" placeholder="password" name="password" id="password" >
            <input type="submit" value="register" name="register" id="sinUpSend"  >
           </div>

      </form>
</body>
</html>