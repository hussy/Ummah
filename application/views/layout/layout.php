<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UMMA | A community space modeled after the Prophet PBUH ﷺ">
    <meta name="author" content="UMMA">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <title><?php echo $pageTitle;?></title>
    <script src="<?php echo ASSETS_URL;?>js/jquery.js"></script>
    <link href="<?php echo ASSETS_URL;?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo ASSETS_URL;?>slick/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL;?>slick/slick/slick.css"/>
    <link href="<?php echo ASSETS_URL;?>css/style.css?v=10" rel="stylesheet">
    <script>
        var assets_url = '<?php echo ASSETS_URL; ?>';
        $(document).ready(function() {
            setTimeout(function() { 
                $(".ummah-banner-section .banner-content").fadeIn(1000);
            }, 3000);
            $('.marquee-slide').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.programs-manage').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000000000000000,
                prevArrow: '<div class="slick-prev"><img src="'+assets_url+'images/program-left.png" alt="Previous"></div>',
                nextArrow: '<div class="slick-next"><img src="'+assets_url+'images/program-right.png" alt="Next"></div>',
                responsive: [
                    {
                        breakpoint: 1290,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 850,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 635,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
            
    </script>
</head>
<body>
    <?php echo $header;?>
    <?php echo $body;?>
    <?php echo $footer;?>
</body>
<script src="<?php echo ASSETS_URL;?>bootstrap/dist/js/bootstrap.bundle.min.js" ></script>
</html>