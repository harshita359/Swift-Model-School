<?php
include('design_includes/header.php');
include('design_includes/browser.php');
?>
<!-- msg popup start -->
	<div id="msg_popup"></div>
	<script type="text/javascript" src="https://versatileitsolution.com/msg_popup/js/msg_popup.js"></script>
	<!-- msg popup end -->
	<!--Popup start-->
	<div class="bg_overlay">
		<div class="bg_content" style="max-width:550px">
			<div class="wow bounceIn  animated" data-wow-delay="0.2s">
				<form id="enquiryForm" class="enquiryForm">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="name"> Parent Name</label>
                          <input class="form-control text-capitalize" id="name" name="name" type="text">
                        </div>
                      </div>
                      <div class="col-xs-12 ">
                        <div class="form-group">
                          <label for="name"> Student Name</label>
                          <input class="form-control  text-capitalize" id="add" name="name" type="text">
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="cont"> Contact No.</label>
                          <input class="form-control" id="cont" name="cont" maxLength="10" type="text"
                            onKeyPress="return isNumber(event)">
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="mail"> Email ID</label>
                          <input class="form-control" id="mail" name="mail" type="text">
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="message">Enquiry for class</label>
						   <select class="form-control">
								<option>Pre Primary</option>
								<option>Primary</option>
								<option>secondary</option>
						  </select>
                         
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <input value="Submit" class="btn idx-btn" type="submit"><span
                            style="top: -1.25px; left: 85.5px;"></span>
                        </div>
                      </div>
                    </div>
                  </form>
			
			<a class="pclose" onClick="$(this).parents('.bg_overlay').fadeOut(); ">X CLOSE</a> </div>
		</div>
	</div>
	<!--Popup ends -->


    <!--#include file="design_includes/browser.asp" -->
    <!--#include file="design_includes/header.asp" -->
    <!--banner-->
    <div class="banner-bar">
        <div class="container">
            <div class="  banner-contents">
                <h1>Pre Primary</h1>
                <span class="colorborder"></span>
                <ul class="location">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="" class="actives">Pre Primary</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--   -->
    <section class="contents">
        <!--  -->
        <div class="idx-abt-sec inner-abt">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="abt-left">
                            <h1 class="main-head">
                                Happy Hearts, Brilliant Minds <br> Unlocking Learning Potential
                            </h1>
                            <p>
                                Pre-Primary education sets the tone of a child's learning in a nurturing environment,
                                and lays a healthy foundation for the child's all-round development. Being in an
                                important phase of their development, these young children deserve all the care and
                                attention as they are initiated into this new world of learning. At this stage,
                                children are active and curious to learn, and love to play and engage in activities that
                                interest them.
                            </p>
                            <p>
                                Our school's pre-primary curriculum takes these aspects into account and provides an
                                environment for every child to enjoy learning activities. Our school has developed an
                                innovative and engaging teaching methodology incorporating a blend of Montessori and
                                Play-Way techniques. It emphasizes learning, involving all five senses and engaging the
                                child meaningfully.
                            </p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="inn-abt-right">
                            <img src="design_img/pre-primary.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row abt-gape">
                            <div class="col-xs-12 col-sm-6">
                                <div class="values-blk vb-gap">
                                    <div class="h-icon">
                                        <img src="design_img/children-safety.jpg">
                                    </div>
                                    <h4>Children Safety</h4>
                                    <p>
                                        Safety at school allows children to look forward to being in an encouraging
                                        environment, promoting social and creative
                                        learning.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="values-blk vb-gap bg-hea-evn">
                                    <div class="h-icon">
                                        <img src="design_img/Smart-Education.jpg">
                                    </div>
                                    <h4>Smart Education</h4>
                                    <p>
                                        Smart Education has an out-of-the-box procedure to organize classes for students
                                        of different ages. Our school provides children with the best educational
                                        environment for children's exceptional growth.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!--  -->
    </section>
    <!-- -->
    <?php
include('design_includes/footer.php');
?>