<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title page="Vision Mission"></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="design_img/favicon.ico" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="language" content="EN" />
    <meta name="audience" content="all">
    <meta name="content-Language" content="English">
    <meta name="distribution" content="global">
    <meta name="country" content="India">
    <meta name="robots" content="All">
    <!--css styles -->
    <link rel="stylesheet" href="design_css/custom_styles.css">
    <link rel="stylesheet" href="design_css/responsive_styles.css">
    <link rel="stylesheet" href="design_css/bootstrap.min.css">
    <link rel="stylesheet" href="design_css/browser.css" />
    <link rel="stylesheet" href="design_css/font-awesome.min.css">
    <link rel="stylesheet" href="design_css/secondary.css">
    <link rel="stylesheet" href="design_css/secondary-2.css">

    <!--nav styles-->
    <link rel="stylesheet" href="design_css/nav.css">
    <link rel="stylesheet" href="design_css/resnav.css">
    <!-- Scripts -->
    <script src="design_js/jquery.min.js"></script>
    <script src="design_js/bootstrap.min.js"></script>
    <script src="design_js/custom_js.js"></script>
    <script src="design_js/disabled.js"></script>
    <!--Plugins-->

    <link rel="stylesheet" href="design_plugins/animation/css/animate.css">
    <script src="design_plugins/animation/js/wow.min.js"></script>
    <script>
        wow = new WOW(
            {
                boxClass: 'wow',      // default
                animateClass: 'animated', // default
                offset: 0,          // default
                mobile: true,       // default
                live: true        // default
            }
        )
        wow.init();
    </script>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <!--onpage styles-->
    <style type="text/css">
        #level_1 li a#about {
            color: #ff6682 !important;
        }

        #level_1 li a#about:before {
            left: 0;
            width: 100%;
        }
    </style>
    <!--#include file="design_includes/other-include.asp" -->
    <!--#include file="design_includes/ie-old-browser.asp" -->
</head>

<body>
    <!--#include file="design_includes/browser.asp" -->
    <!--#include file="design_includes/header.asp" -->
    <!--banner-->
    <div class="banner-bar">
        <div class="container">
            <div class="  banner-content">
                <h1></h1>
                <span class="colorborder"></span>
                <ul class="location">
                    <li><a href="index.asp">Home</a></li>
                    <li><a href="" class="active"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--   -->
    <section class="contents">
        <!--  -->
        <div class="idx-abt-sec inner-abt vsn-sec">
            <div class="container">
                <div class="row abt-gape">
                    <div class="col-xs-12 col-sm-6">
                        <div class="values-blk vb-gap">
                            <div class="h-icon">
                                <img src="design_img/vision.jpg">
                            </div>
                            <h4>Vision</h4>
                            <p>
                                The Swift Model School is truly engaged in developing caring and productive global
                                citizens through international quality education who are critical thinkers,
                                collaborative and action-oriented. We pledge to continuously strive and inculcate in the
                                students an inner desire to always strive to meet the high expectations set for
                                themselves, no matter what their goals are. Our aim is to assist in the holistic
                                development of a child in the areas of physical, intellectual, emotional, social and
                                cultural aspects.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="values-blk vb-gap bg-hea-evn">
                            <div class="h-icon">
                                <img src="design_img/mission.jpg">
                            </div>
                            <h4>Mission</h4>
                            <p>
                                Our mission is to provide a dynamic educational environment by encouraging excellence.
                                All students are challenged to reach their maximum potential by learning at their
                                functional level to provide a solid foundation of skills, knowledge and values. This
                                foundation enables each student to become a well-educated, productive adult who will be
                                able to cope with an ever-changing world.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- -->
    <!--#include file="design_includes/footer.asp" -->
    <!-- -->

    <script src="design_plugins/scroll/jquery.nicescroll.min.js"></script>
    <script src="design_plugins/scroll/jquery.fancybox.pack.js"></script>
    <script src="design_plugins/scroll/skrollr.min.js"></script>
    <script src="design_plugins/scroll/jquery.appear.js"></script>
    <script type="text/javascript">
        //nicescroll
        $("html").niceScroll({ zindex: 999, cursorborder: "", cursorborderradius: "2px", cursorcolor: "#ccc", cursoropacitymin: 0.5 });
        function initNice() {
            if ($(window).innerWidth() <= 960) {
                $('html').niceScroll().remove();
            } else {
                $("html").niceScroll({ zindex: 999, cursorborder: "", cursorborderradius: "2px", cursorcolor: "#ccc", cursoropacitymin: 0.5 });
            }
        }
        $(window).load(initNice);
        $(window).resize(initNice);
    </script>
</body>

</html>