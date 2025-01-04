<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation des salles</title>
   

    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
          background: #044;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
          
        }
        .container{
            background: #fff;
            width:500px;
            margin: auto auto;
            height: 500px;
            border-radius: 15px;
            overflow: auto;
            position: relative;
        }
        .description{
            background-color: #044;
            height: 15%;
            width: 60%;
            margin: auto;
            padding: 10px;
            border-radius:0 0 20px 20px;
        }
        .description p{
            text-transform: capitalize;
            color: #fff;
        }
        .container .inputs{
          
            display: flex;
            gap: 30px;
            justify-content: center;
            border: #044 2px solid;
             border-radius: 5px;
             width: 90%;
             margin: 0 auto;
             margin-top: 20px;

        }
        #reserver{
        background: #044;
        color: #fff;
        text-transform: capitalize;
        margin-left: 50%;
        transform: translateX(-50%);
        padding: 10px;
        border-radius: 10px;

       }
        select{
            width: 70%;
            border: none;
            height: 35px;
        }
      
        input{
            border: none;
        }
    span{
       position: absolute;
        color: red;
        bottom: 50%;
        left: 50%;
        transform: translateX(-50%);
    }
    h4{
        position: absolute;
        color: green;
        bottom: 46%;
        left: 50%;
        transform: translateX(-50%);
    }
    table{
        position: absolute;
        width: 34%;
        left: 60%;
        bottom: -100%;
        transform: translateX(-80%);
        
    }
    #email{
        margin-left: 24px;
        border: 1px solid #044;
        outline: none;
        padding: 5px;
        border-radius: 5px;
    }
    </style>
</head>
<body>
   
    <form  method="POST">
    <div class="container">
        <div class="description">
            <p>pour reserver une salle choisir le bloc puis
                 la salle et finalement l'heure</p>
        </div>
        <div class="inputs">
            <select name="bloc" id="bloc" onchange="update()" required>
                <option value="">--donner un bloc--</option>
                <option value="informatique" >informatique</option>
                <option value="technique">technique</option>
                <option value="exploitaion">exploitaion</option>
                <option value="bloc_B">bloc B</option>
                <option value="infographie">infographie</option>
            </select>
            <select name="salle" id="salle" required>
            <option value="">choisir le bloc d'abord</option>
            </select>
            <select id="heure" name="heure">
                <option value="8:00-10">8h:00-10h</option>
                <option value="10:00-12">10h:00-12h</option>
                <option value="13:00-14">13h:00-14h</option>
                <option value="14:00-16">14h:00-16h</option>
            </select>
         <input type="date" name="date_r" id="date" required min="2025-01-01">
        

        </div>
        <input type="email" name="email" placeholder="enter your email" required id="email">
        <input type="submit" id="reserver" value="reserver" name="reserver">
    </div>
 
    </form>
    <?php
  
     include('connect1.php');
     if(isset($_POST['reserver'])){
        $bloc=$_POST['bloc'];
        $salle=$_POST['salle'];
        $heure=$_POST['heure'];
        $date=$_POST['date_r'];
        $email=$_POST['email'];
        $quer="SELECT * FROM salle WHERE  nom_salle='$salle' and bloc='$bloc'  and heure='$heure'and date_r='$date' and email='$email' ";
            $result=mysqli_query($conn,$quer);
            if(mysqli_num_rows($result)==0){
                $sql="INSERT INTO salle(nom_salle,bloc,heure,date_r,email) VALUES('$salle','$bloc','$heure','$date','$email')";
                mysqli_query($conn,$sql);
                echo "<h4>".'la salle est reservee avec success' ."</h4>";
            }

        
        else{
            echo "<span>".'la salle choise est deja resevee essayer de changer l heure' ."</span>";
        }
 
    }
    ?>
 <script>
    const optionData={
        informatique:['I1','I2','I3','I4','labo1','labo2','labosic','sallecyber','conferrences'],
         technique:['T1','T2','T3','T4','T5','T6','T7','T8','cisco'],
         exploitaion:['E1','E2','E3','E4','E5'],
           bloc_B:['B1','B2','B3','B4','B5'],
           infographie:['I5','I6','I6','I7']

    }

   
   function update(){
    let bloc=document.getElementById("bloc");
    let salle=document.getElementById("salle");
    let selected=bloc.value;
if(optionData[selected]){
    let data;
  let  items=optionData[selected];
      for(let i=0;i<items.length;i++){
      data+=`
       <option value="${items[i]}">${items[i]}</option>

      `
      salle.innerHTML=data;
  
      }
    

}
   }

 
 </script>
</body>
</html>