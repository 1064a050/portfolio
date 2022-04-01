<?php include_once "../base.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/js.js"></script>

   
</head>
<style>
    .main{
     
     width:1000px;
     height:700px;
     border:2px solid #ccc;
     margin: 20px auto;
 }
 .menu{
     /* flex-basis:calc(900px - 200px); */
     height:150px;
     width:100%;
     background:#ccc;
     display:block;
     position:relative;
     text-align:center;
     /* line-height:150px; */
     padding:10px 1px 10px 1px;
     font-size:30px;
 }
</style>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
        <?php include "../modal/portfolio.php" ?> 
        </div>
        </div>
    </div>
    
    <div class="container">
        
    <nav class="navbar sticky-top navbar-light">
        <div class="container"></div>
        <a class="" id="index" href="../index.php">回前台</a>
    </nav>
      
    <div class="main">
        <div class="menu">
            <a href="./append.php">網頁標題管理</a>
            <a href="?do=about_me">個人資料管理</a>
            <a href="?do=portfolio">作品集管理</a>

   
    

    <?php

        include "portfolio.php";
	
        ?>
 </div>
        
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>

