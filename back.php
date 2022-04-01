<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/levelb.css">
    
    <!-- jQuery v1.9.1 -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->

    <!--  -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
    <!-- GG -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Serif+TC:wght@700;900&family=Press+Start+2P&display=swap" rel="stylesheet">
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
      line-height:150px;
      padding:10px 1px 10px 1px;
      font-size:30px;
  }
</style>

<body>
    <nav class="navbar sticky-top navbar-light">
        <div class="container"></div>
        <a class="" id="index" href="./index.php">回前台</a>
    </nav>
      
    <div class="main">
        <div class="menu">
            <a href="?do=title">網頁標題管理</a>
            <a href="?do=about_me">個人資料管理</a>
            <a href="?do=portfolio">作品集管理</a>

        
    </div>
    <?php

        $do=isset($_GET["do"])?$_GET["do"]:'title';
        $file="./back/".$do.".php";
        if(file_exists($file)){
            include $file;
        }else{
            //echo "檔案不存在";
            include "./back/append.php";
        }	

    ?>

        

    </div>




    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    


    

</body>

</html>