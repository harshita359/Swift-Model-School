<section class="slider">
    <!-- Home Slider -->
    <div id="home-slider" class="slides">
        <img src="design_img/slide-blank.png" alt="" title="#slider-blank " />
        <img src="design_img/slide-1.jpg" alt="" title="#slider-caption-1 " />
        <img src="design_img/slide-2.jpg" alt="" title="#slider-caption-2 " />
        <img src="design_img/slide-3.jpg" alt="" title="#slider-caption-3 " />
       <!-- <img src="design_img/slide-4.jpg" alt="" title="#slider-caption-4 " />  -->
    </div>
    <!-- slider-blank -->
  <div id="slider-blank" class="nivo-html-caption">
    <div class="hero-slider-content ">
      <video id="video" preload="auto" autoplay="" loop="" muted="">
        <source src="slider.mp4" type="video/mp4">
      </video>
    </div>
  </div>
    <!-- Caption 1-->
    <div id="slider-caption-1" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content  col-xs-12  col-sm-6 col-sm-offset-6">
                    <div class="slider-overlay wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                    </div>
                    <div class="hero-slider-contenter">
                        <p class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                           Welcome to The Swift Model School
                        </p>
                        <h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                            Primary education, creating a better future
                        </h1>
                        <a href="history.asp" class="link-btn wow animated fadeInLeft " data-wow-duration="1.5s"
                            data-wow-delay="1.5s">
                            Learn More
                            <!-- <span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span> -->
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Caption 2 -->
    <div id="slider-caption-2" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content  col-xs-12  col-sm-6 col-sm-offset-6">
                    <div class="slider-overlay wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                    </div>
                    <div class="hero-slider-contenter">
                        <p class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                            An inspired approach to education and life long learning
                        </p>
                        <h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                            A school where everyone is welcome.
                        </h1>
                        <a href="history.asp" class="link-btn wow animated fadeInLeft " data-wow-duration="1.5s"
                            data-wow-delay="1.5s">View More
                            <!-- <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Caption 3 -->
    <div id="slider-caption-3" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content  col-xs-12  col-sm-6 col-sm-offset-6">
                    <div class="slider-overlay wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                    </div>
                    <div class="hero-slider-contenter">
                        <p class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                            We believe in unleashing the potential of every child
                        </p>
                        <h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                            A better tomorrow starts with us today.
                        </h1>
                        <a href="history.asp" class="link-btn wow animated fadeInLeft " data-wow-duration="1.5s"
                            data-wow-delay="1.5s">View More
                            <!-- <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Caption 4 -->
    <!--<div id="slider-caption-4" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content  col-xs-12 col-lg-12 col-lg-offset-0 col-sm-11 col-sm-offset-1">
                    <div class="slider-overlay wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                    </div>
                    <div class="hero-slider-contenter">
                        <p class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                            Attitude Is A Little Thing That Makes A Big Difference.
                        </p>
                        <h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                            Be nice. Work hard.
                        </h1>
                        <a href="about-us.asp" class="link-btn wow animated fadeInLeft " data-wow-duration="1.5s"
                            data-wow-delay="1.5s">View More    -->
                            <!-- <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> -->
                    <!--   </a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

</section>
<script>
    $('#home-slider').nivoSlider({
        manualAdvance: false,
        directionNav: true,
        animSpeed: 1000,
        effect: 'sliceDown',
        slices: 18,
        pauseTime: 5000,
        pauseOnHover: false,
        controlNav: false,
        prevText: '<i class="fa fa-angle-left"></i>',
        nextText: '<i class="fa fa-angle-right"></i>'
    }); 
</script>