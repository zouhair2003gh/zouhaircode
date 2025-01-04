<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page home</title>
    <style>
        *{
    padding: 0;
    margin: 0;

}
body{
    background: wheat;
    height: 100vh;
}
header{
    height: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header .logo img{
    width: 30px;
    height: 30px;
 border-radius: 7px;
 margin-left: 10px;
}
ul {
    margin-right: 20px;
    display: flex;
    align-items: center;
    gap: 20px;

    
}
ul li {
    list-style: none;
}
ul li a{
    scale:1 1;
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
    padding: 10px;
   
  
}
ul li a:hover{
  border-radius: 10px;
   background: #fff;
}
.content{
    display: flex;
    align-items: center;
    justify-content: space-between;
   
}
.content p{
    background:white;
    padding: 20px;
    border-radius: 20px;
    width: 500px;
    margin-top: 50px;
    letter-spacing: 1px;
    margin-left: 10px;
  
}
.content .imgs{
    display: flex;
    margin-right: 230px;
    align-items: center;
    gap: 10px;
}
img{
    width: 200px;
    height: 200px;
}
.imgs img{
    border-radius: 10px;
    width: 200px;
    height: 200px;
}
.imgs button{
border: none;
border-radius: 5px;
    height: 30px;
    width: 50px;
    font-size: 20px;
}
    </style>
</head>
<body>
   <div class="container">
<header>
    <div class="logo">
        <img src="code.jpg">
    </div>
    <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">photos</a></li>
        <li><a href="#">code</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">help</a></li>
    </ul>
</header>
<div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eaque eveniet 
        eligendi ab et totam a repudiandae inventore perspiciatis! Sunt optio ab error
         suscipit nesciunt tempore possimus unde provident autem. Cumque mollitia vel
          rem aut at ut soluta repudiandae officia. Voluptatum, veniam tenetur vero ipsam 
          qui distinctio, ullam perferendis eos velit quae natus fugiat nisi rem? Hic repellat 
          voluptas expedita, suscipit quisquam, explicabo veniam voluptates dicta maiores tenetur 
          veritatis, corporis totam. Veniam nesciunt similique eaque architecto cumque maxime 
          repudiandae, reprehenderit nihil illo. Recusandae quae officiis animi officia saepe perferendis
        , voluptate illo ab provident neque cum, veritatis reiciendis
         placeat, voluptatem quam.
        </p>
         <div class="imgs" id="imgs">
            <button id="prev-btn"><</button>
            <img id="img1" src="img1.jpg">
            <button id="next-btn">></button>
         </div>
    </div>
</div>
<script>
    const prev=document.getElementById('prev-btn');
const next=document.getElementById('next-btn');
const images=['img1.jpg','img2.jpg','img3.jpg','img4.jpg'];
let count=0;
function updateImage(){
    img1.src=images[count];
}
next.addEventListener('click',()=>{
    prev.style.display='block';
    count=count+1;
    updateImage();
    if(count>images.length-1){
        img1.src=images[3];
        next.style.display='none';
    }
    else{
        updateImage();
    }
    }
    );
prev.addEventListener('click',()=>{
    next.style.display='block';
    count=(count-1);
        updateImage();
        if(count<0){
            img1.src=images[0];
            prev.style.display='none';
          
           
        }
        else{
            updateImage();
        }
        
}
);
</script>
</body>
</html>