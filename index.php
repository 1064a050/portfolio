<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/ticket.css">
    <link rel="stylesheet" href="./css/sign_in_up.css">
    <!-- jQuery v1.9.1 -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Serif+TC:wght@700;900&family=Press+Start+2P&display=swap"
        rel="stylesheet">




</head>
<style>

</style>

<body>
    <nav class="navbar sticky-top navbar-right navbar-expand-lg">
        <div class="container"></div>
        <a class="" id="index" href="#">TOP</a>
        <a class="" href="#about">About Me</a>
        <a class="" href="#portfolio">作品集</a>
        <a class="login" href="./front/api.php">API</a>
        <!-- <a href="https://github.com/1064a050"><i class="fa-brands fa-github"></i></a> -->
        <a class="login" href="./front/login.php">登入</a>
        <a href="./back/back.php">後台</a>


    </nav>
    <div class="container-fluid">


        <?php
        //根據網址帶的do參數內容來決定要include那一個檔案內容
        //建立要引入的檔案路徑
        // $do = (isset($_GET['do'])) ? $_GET['do'] : 'header';

        // $file = "./front/" . $do . ".php";
        // if (file_exists($file)) {
        //     include $file;
        // } else {
        
        // }
        ?>

        <?php
          include_once "./front/header.php";
        ?>

        <?php
        //根據網址帶的do參數內容來決定要include那一個檔案內容
        //建立要引入的檔案路徑
        // $do = (isset($_GET['do'])) ? $_GET['do'] : 'about_me';

        // $file = "./front/" . $do . ".php";
        // if (file_exists($file)) {
        //     include $file;
        // } else {
        //     include "./front/about_me.php";
        // }
        include_once "./front/about_me.php"
        ?>


        <?php include_once "./front/main.php";?>

        <!-- 加作品集 -->
        <div class="d-flex" id="portfolio" >
            <?php
            
            $rows = $Append->all(["sh" => 1]);
            foreach ($rows as $row) {
                ?>
            
                <div class="col-sm-4">
                    <div style="height: 550px;">
                        <div class="ticket">
                            <div class="ticket__content">
                                <div class="ticket-img">
                                    <a href="<?=$row['link'];?>" target="_blank">
                                        <img src="./img/<?=$row['img'];?>" class='img-fluid'></a>
                                </div>
                                <div class="ticket-border-top"
                                    style="border-top:3px dashed #ffde77;height: 1px;overflow:hidden"></div>
                            
                                    <div class="img_text_header">
                                        <?=$row['name'];?>
                                    </div>
                                    <div class="ticket-border-top" style=""></div>
                            </div>
                        </div>
                        <div class="img_text_block">
                            <p class="img_text_text"><?=$row['text'];?><br>...
                        
                            <img src="./img/qrcode.png" alt="" style="width:12%;margin-left:25%">
                        </p>
                        </div>
                    </div>
                </div>
           
            <?php
            }
            ?>
        </div>



        <?php
//  $do=(isset($_GET['do']))?$_GET['do']:'main';

//  $file="./front/".$do.".php";
//  if(file_exists($file)){
//      include $file;
//  }else{
//      include "./front/main.php";
//  }
// include_once "./front/main.php";

// include_once "./front/portfolio.php";
?>


    </div>



    <!-- 作品集區 結束 -->




    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script>
    (function($) {

        // Open Lightbox
        $('.open-lightbox').on('click', function(e) {
            e.preventDefault();
            var image = $(this).attr('href');
            $('html').addClass('no-scroll');
            $('body').append('<div class="lightbox-opened"><img src="' + image + '"></div>');
        });

        // Close Lightbox
        $('body').on('click', '.lightbox-opened', function() {
            $('html').removeClass('no-scroll');
            $('.lightbox-opened').remove();
        });

    })(jQuery);
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RSMMC1W0VX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-RSMMC1W0VX');
    </script>


</body>

</html>