<!doctype html>
<html>
 <head>
  <title>Black Swan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="black swan">
  <meta name="keywords" content="black swan,effect,consulting,education">
  <meta name="author" content="myalice">
  <meta http-equiv="refresh"content="30">
  <style>
    *{box-sizing:border-box;}
    .container{
               display: flex;
               flex-direction:column;
               height:100px;
               border:1px solid white;
               flex-shrink:1;
           }
       .item1_container{
                 color:black;
                 height:73px;
                 background-color: #92B557;
                 border-bottom:1px solid white;
                 padding-left:17%;
                 padding-top:17px;
                 font-size:34px;
                 }
       .item2_container{
                 color:#d9f2d9;
                 background-color:#c6ebc6;
                 border-bottom:1px solid white;
                 text-align:right;
                 padding-right:30%;
                 }
     .content{
         display:flex;
         background-color: white;
         flex-direction:row;
            }
         .item1_content{
             margin-left:10px;
         }
         .item1_content:nth-child(1){
             flex-basis: 150px;
             flex-shrink:1;
         }
         .item1_content:nth-child(2){
             flex-basis: 1000px;
             flex-shrink:1;
         }
         .item1_content:nth-child(3){
             flex-shrink:1;
         }
         .content nav{
             border-right:1px solid #efefef;
             margin-left:150px;
         }
         .content aside{
             border-left:1px solid #efefef;
         }
     .footer{
       background-color:#f2f2f2;
       height:50px;
       font-size:10px;
     }
       .item1_footer{
                 border-top:1px solid white;
                 text-align: left;
                 }
     nav{
         flex-basis: 50px;
         flex-shrink: 0;
     }
     aside{
         flex-basis: 50px;
         flex-shrink: 0;
     }
     main{
         padding:10px;
         flex-shrink: 0;
     }
     ul.item1_content_list li, ol.item1_cont_list li{
       list-style: none;
       padding:5px 0px 5px 0px;
       margin-bottom: 5px;
       border-bottom: 1px solid #efefef;
       font-size: 12px;
       /*animation*/
       -webkit-transition: background-color 0.3s linear;
       -moz-transition: background-color 0.3s linear;
       -ms-transition: background-color 0.3s linear;
       -o-transition: background-color 0.3s linear;
       transition: background-color 0.3s linear;
     }
     ul.item1_content_list li:hover,
     ol.item1_cont_list li:hover{
       background-color: #f6f6f6;
       cursor:default;
     }

     ul.item1_footer_list{
       list-style:none;
       text-align:center;
       padding:0;
       margin:0;
     }
     ul.item1_content_list li:last-child,
     ol.item1_content_list li:last-child{
       border-bottom: 0px;
     }
     #topbar{color:white;}
     #login{color:gray;}
     #item1-footer_1{padding:12px;}
  </style>
 </head>
 <body>
   <div class="container">
     <header class="item1_container">
     <b><a href="index_bs.php" title="Go to Blackswan Home"
          style="text-decoration:none" id="topbar">
              Black Swan</a></b>
     </header>
     <header class="item2_container">
       <a href="login.php"title="Go to Login"
            style="text-decoration:none" id="login"> login</a>
    </header>
   </div>
   <div class="content">
     <nav class="item1_content">
       <ul class="item1_content_list">
         <li><a href="index_bs.php?id=satori" style="text-decoration:none"> SATORI</li></a>
         <li><a href="index_bs.php?id=column" style="text-decoration:none">COLUMN</li>
         <li><a href="index_bs.php?id=movie" style="text-decoration:none">MOVIE</li>
         <li><a href="index_bs.php?id=music" style="text-decoration:none">MUSIC</li>
         <li><a href="index_bs.php?id=board" style="text-decoration:none">BOARD</li>
       </ul>
     </nav>
     <?php
     if(isset($_GET['id'])){
       echo $_GET['id'];
     }else{
       echo "welcom";
     }
     ?>
     <main class="item1_content">
       <?php
       if(isset($_GET['id'])){
       $satori = file_get_contents("data/".$_GET['id']);
       echo $satori;}else{
         echo "hello folks";
       }
        ?>
     </main>
   </div>
 </body>
</html>
