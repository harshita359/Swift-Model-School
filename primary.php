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
                <h1>Primary</h1>
                <span class="colorborder"></span>
                <ul class="location">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="" class="actives">Primary</a></li>
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
                                Enhancing the development of <br> the child
                            </h1>
                            <p>
                                Our initiate’s children into sustaining their enthusiasm for building on what they
                                learned at the Pre-primary level. At this stage, children's exploratory spirit and quest
                                for knowledge are on the rise, and they are motivated by the love of learning that they
                                have imbibed. The emphasis is on the learning and understanding of concepts through an
                                engaging and relevant curriculum. The various activities conducted enable children to
                                explore their multiple talents. Classes 1st and 2nd follow a well-balanced academic
                                curriculum with English, Hindi, E.V.S, Math, and Computer Science as the core subjects
                                and General Knowledge, Music, Dance, Arts & Crafts and Physical Education as essential
                                support subjects. In classes 3rd 4th and 5th, in the place of Environmental Studies,
                                there is a segregation of Science and Social Science which have been two well-defined
                                subjects.

                            </p>
                            <p>
                                Computer Science, General Knowledge, Music, Dance, Arts & Crafts and Physical Education
                                Form an integral part of the curriculum. A period per week is allocated for Value
                                Education as well as for Environmental Education. As far as the 6th – 8th segment is
                                concerned, the focus is to prepare for their future struggle of setting their career and
                                being confident citizens in all walks of life.

                            </p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="inn-abt-right">
                            <img src="design_img/primary.png">
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