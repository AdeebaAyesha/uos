<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONLINE SHOP</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
    <div class="navbar">
    <img src="im/online2.PNG" class="logo">
    <nav>
       <ul id="menulist">
         <li><a href="">Chinese Food</a></li>
         <li><a href="">Chicken Special</a></li>
         <li><a href="">Drinks</a></li>
         <li><a href="">Customized food</a></li>
       </ul>
    </nav>
    <img src="im/menu2.PNG" class="logo2" onclick="togglemenu()">
    </div>
           <div class="row">
             <div class="col-1">
               <h2>PS4<br>DualStock</h2>
               <h3>Wireless Controller</h3>
               <button >Buy Now</button>
             </div>
             <div class="col-2">

             </div>
           </div>

           <script>
             var menulist=document.getElementById("menulist");
             menulist.style.maxHeight="0px";
             function togglemenu(){
               if(menulist.style.maxHeight="0px")
               {
                 menulist.style.maxHeight="130px";
               }
               else {
                 {
                   menulist.style.maxHeight="0px";
                 }
               }
             }
           </script>
  </body>
</html>
