
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/sign_in_up.css">
    
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
    <!-- GG -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Serif+TC:wght@700;900&family=Press+Start+2P&display=swap" rel="stylesheet">
   
    </head>
   

    <body>
    
    <?php
if(!empty($_POST)){
    if($_POST['acc']=='admin'  && $_POST['pw']=='1234'){
        to("../back.php");
    }else{
        echo "<script>";
        echo "alert('帳號或密碼錯誤')";
        echo "</script>";
    }
}
?>

<link rel="stylesheet" href="../css/sign_in_up.css">
<link rel="stylesheet" href="../css/css.css">


     <nav class="navbar sticky-top navbar-light">
        <div class="container"></div>
        <a class="" id="index" href="../index.php">回前台</a>
    </nav>

   
        <div id="container"style=" background: #ccafea;">
            <div class="login-box mt-3">
                <div class="form-box">
                <div class="ic-account"><i class="fas fa-user-check"></i></div>
                    <form id="login-form" action="?do=login" method="post">
                        <input class="login-form-input" type="text" name="acc" placeholder="帳號">
                        <input class="login-form-input" type="password" name="pw" placeholder="密碼">
                        <button class="login-form-btn" type="submit">登入</button>

                    </form>
                </div>
                <div class="circle-01"></div>
                <div class="circle-02"></div>
            </div>
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
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        (function ($) {

            // Open Lightbox
            $('.open-lightbox').on('click', function (e) {
                e.preventDefault();
                var image = $(this).attr('href');
                $('html').addClass('no-scroll');
                $('body').append('<div class="lightbox-opened"><img src="' + image + '"></div>');
            });

            // Close Lightbox
            $('body').on('click', '.lightbox-opened', function () {
                $('html').removeClass('no-scroll');
                $('.lightbox-opened').remove();
            });

        })(jQuery);
    </script>

    <!--  -->
    <script>

    </script>


</body>

</html>









