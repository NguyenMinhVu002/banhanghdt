<!doctype html>
<html class="no-js" lang="vi-vn">
<!-- view: nơi hiển thị giao diện người dùng -->
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DTP Phone - Điện thoại, ốp lưng, phụ kiện chính hãng</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/img/icon.png">

    <link rel="apple-touch-icon" href="public/apple-touch-icon.png">
    <!-- Place icon.png in the root directory -->
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="public/css/materialdesignicons.min.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="public/css/jquery.simpleLens.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="public/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="public/css/meanmenu.min.css">
    <!-- nivo.slider css -->
    <link rel="stylesheet" href="public/css/nivo-slider.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="public/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="public/css/responsive.css">
    <!-- modernizr js -->
    <script src="public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- header section start -->
    <?php
    require_once("header_footer/header.php")
    ?>
    <!-- header section end -->

    <!-- slider-section-start -->
    <?php
    require_once("dieuhuong.php")
    ?>
    <!-- slider section end -->

    <!-- footer section start -->
    <?php
    require_once("header_footer/footer.php")
    ?>
<!-- ....................................................... -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "112170718647740");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<!-- ......................................................................... -->


    <!-- footer section end -->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="public/js/vendor/jquery-1.12.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="public/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="public/js/jquery.meanmenu.js"></script>
    <!-- countdown JS -->
    <script src="public/js/countdown.js"></script>
    <!-- nivo.slider JS -->
    <script src="public/js/jquery.nivo.slider.pack.js"></script>
    <!-- simpleLens JS -->
    <script src="public/js/jquery.simpleLens.min.js"></script>
    <!-- jquery-ui js -->
    <script src="public/js/jquery-ui.min.js"></script>
    <!-- load-more js -->
    <script src="public/js/load-more.js"></script>
    <!-- plugins js -->
    <script src="public/js/plugins.js"></script>
    <!-- main js -->
    <script src="public/js/main.js"></script>
</body>

</html>