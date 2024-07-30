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
                <h1>Secondary</h1>
                <span class="colorborder"></span>
                <ul class="location">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="" class="actives">Secondary</a></li>
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
                                A wonderful environment where <br>children can learn and grow
                            </h1>
                            <p>
                                Secondary education refers to the education provided in primary school and before higher, alternative education. They also guide the children to participate in many programs like NCC and sports programs like zonal etc. so that the students feel motivated and their skills can be further nurtured. They can also choose their career option in the field of their interest. Our school offers a myriad of programs for students.
                            </p>
                            <p>
                                Secondary education students must satisfy general education requirements in English, mathematics, science, social studies, and a foreign language. Within this framework, students are usually given the freedom to choose specific subjects such as calculus, environmental science or Spanish. Secondary education students also take elective classes, which may be artistic, vocational, or technical in nature. Additionally, our school offers honors or Advanced Placement classes for students who desire a more challenging curriculum. For each secondary education class taken, students receive credits, a set number of which are required to graduate.
                            </p>
                         
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="inn-abt-right">
                            <img src="design_img/secondary.png">
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