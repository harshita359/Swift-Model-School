<?php
include('design_includes/header.php');
include('design_includes/slider.php');
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
							<input class="form-control" id="cont" name="cont" maxLength="10" type="text" onKeyPress="return isNumber(event)">
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
							<input value="Submit" class="btn idx-btn" type="submit"><span style="top: -1.25px; left: 85.5px;"></span>
						</div>
					</div>
				</div>
			</form>

			<a class="pclose" onClick="$(this).parents('.bg_overlay').fadeOut(); ">X CLOSE</a>
		</div>
	</div>
</div>
<!--Popup ends -->
<!--#include file="design_includes/browser.asp" -->
<!--#include file="design_includes/header.asp" -->
<!--#include file="design_includes/slider.asp" -->
<!-- -->
<section class="contents">
	<div class="idx-abt-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="abt-left">
						<h1 class="main-head">
							Welcome to <br>The Swift Model School
						</h1>
						<p>
							The journey of Swift began in the year 2002 with an initiative of bringing globally
							acknowledged multidisciplinary technical courses at one place and with all our constant
							efforts and the unending faith of our convoy in us we are able to achieve an unsurpassed
							growth over the last 2 decades. It makes us both proud and humbled to witness our
							institute rising to be the most eminent educational institute of the City.
						</p>

						<p>
							We also pride ourselves in being able to accomplish academically competitive environment
							in our institution by organizing timely diagnosis or remedial interferences, while we
							provide ample extra-curricular and co-curricular opportunities to our students as well.
						</p>
						<a href="history.php" class="idx-btn btn">Know More </a>

					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="abt-right">
						<div class="abt-1">
							<img src="design_img/home-01.jpg">
						</div>
						<div class="abt-slide2">
							<img src="design_img/blocks.png">
							<h4>Education Program</h4>
							<p>
								A single-phase where programmes are typically designed to provide fundamental
								reading, writing, and mathematics skills and establish a solid foundation for
								learning.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="idx-class">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<div class="class-heading">
						<h1 class="main-head">
							Our Courses
						</h1>
						<p>
							"Education is a journey from Childhood to adulthood. We at The Swift Model School wish
							to make this journey an exciting and fulfilling one. The Swift Model School seeks to
							develop students into confident, disciplined and critical thinkers."
						</p>
					</div>

				</div>
			</div>
			<div class="row kin-gape">
				<div class="col-xs-12 col-sm-4">
					<div class="kind-blk">
						<div class="co-top">
							<img src="design_img/class-3.jpg">
						</div>
						<div class="co-down">
							<h3>Pre-Primary <br><span> (2 to 5 years)</span></h3>
							<p>Pre-Primary education sets the tone of a child's learning in a nurturing environment,
								and lays a healthy foundation for the child's all-round development. Being in an
								important phase of their development, these young children deserve all the care and
								attention as they are initiated into this new world of learning. </p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="kind-blk">
						<div class="co-top">
							<img src="design_img/class-1.jpg">
						</div>
						<div class="co-down">
							<h3>Primary<br><span> (4 to 7 years)</span></h3>
							<p>Our initiate’s children into sustaining their enthusiasm for building on what they
								learned at the Pre-primary level. At this stage, children's exploratory spirit and
								quest for knowledge are on the rise, and they are motivated by the love of learning
								that they have imbibed. </p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="kind-blk">
						<div class="co-top">
							<img src="design_img/class-2.jpg">
						</div>
						<div class="co-down">
							<h3>Secondary<br><span> (14 to 16 years)</span></h3>
							<p>Secondary education refers to the education provided in primary school and before
								higher, alternative education. They also guide the children to participate in many
								programs like NCC and sports programs like zonal etc. </p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--  -->
	<div class="testimonial-bar" style="display:none;">
		<div class="container">
			<h2 class="main-head text-center">
				Testimonial
				<!--  -->
				<p>
					“Parents Feedback on Funtakshari”
				</p>
			</h2>
			<div id="testimonial" class="owl-carousel">
				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Today's Virtual Antakshari Competition was really amazing, my family and I had so much fun
						and we enjoyed it a lot. Team work was really appreciable!! Thank you so much ma'am.
					</p>
					<p class="writer">
						- By Parent of Alankriti Suthar
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Dear Principal Ma'am and All Teachers, Thanks for such a well organized. Funtakshri
						programme. We have enjoyed alot at home. Waiting for next programme.
					</p>
					<p class="writer">
						- By Parent of Aashvi kabra
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Thanks Principal Ma'am & all the teachers for such a great effort. Really had a great fun.
						We all enjoyed very much.
					</p>
					<p class="writer">
						- By Parent of Twinkle
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Funtakshari was just awesome.
					</p>
					<p class="writer">
						- By Parent of Riyansh koli
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Thanks for organizing such a great "Funtakshri" programme. We enjoyed a lot and the idea
						behind this program was superb. It helped to create a new creativity for our child.
					</p>
					<p class="writer">
						- By Parent of Anaya Maheshwari
					</p>
				</div>

				<!--  -->
				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Funtakshari actually was fun, everyone got a lot of interest. Thanks to all the
						teachers.
					</p>
					<p class="writer">
						- By Parent of Aayansh Chechani
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Dear Principal Ma’am & All Teachers, Thanks for such a great "Funtakshri programme” we have
						enjoyed this programme at home. This idea is really superb. We're waiting for next
						programme. Once again Thank you all.

					</p>
					<p class="writer">
						- By Parent of Sharvil Chechani
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Awesome Funtakshari, We all family members enjoyed it.
					</p>
					<p class="writer">
						- By Parent of Anay Mundra
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						It was fun. Helpful for making parents to be a part of some school activities along with
						their children. It helped in creating a bond of parents with school teachers and Principal
						Ma’am.
					</p>
					<p class="writer">
						- By Parent of Yukti Sharma
					</p>
				</div>

				<div class="testimonial">
					<div class="writer-pic">
						<img src="design_img/user.jpg">
					</div>
					<p class="message">
						Thank you ma'am for organizing such a wonder event Funtakshri. We all family members enjoyed
						a lot with Amay Pareek. This was such a lively event, keep organizing events like this in
						future also. Thanks a tonne.
					</p>
					<p class="writer">
						- By Parent of Amay Pareek
					</p>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					$("#testimonial").owlCarousel({
						items: 1,
						lazyLoad: true,
						navigation: false,
						pagination: false,
						slideSpeed: 800,
						autoPlay: 3000,
						stopOnHover: true,
						autoplayTimeout: 1000,
						itemsMobile: [320, 1],
						itemsTablet: [768, 1],
						itemsDesktop: [1024, 1],
					});

				});
			</script>
		</div>
	</div>
	<!--  -->

	<div class="idx-glorious-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="glorious-heading">
						<h2 class="main-head">Glorious Moments</h2>
					</div>
				</div>

				<div class="col-xs-12">
					<div id="categories-product" class="owl-carousel">
						<div class="product">
							<div class="product-container">
								<div class="product-pic-container">
									<div class="product-pic">
										<div class="cate-block">
											<div class="cate-top">
												<img src="design_img/milestone-03.jpg">
											</div>

										</div>

									</div>
								</div>

							</div>
						</div>
						<!-- -->
						<div class="product">
							<div class="product-container">
								<div class="product-pic-container">
									<div class="product-pic">
										<div class="cate-block">
											<div class="cate-top">
												<img src="design_img/milestone-13.jpg">
											</div>

										</div>

									</div>
								</div>

							</div>
						</div>
						<!-- -->
						<div class="product">
							<div class="product-container">
								<div class="product-pic-container">
									<div class="product-pic">
										<div class="cate-block">
											<div class="cate-top">
												<img src="design_img/milestone-14.jpg">
											</div>

										</div>

									</div>
								</div>

							</div>
						</div>
						<!-- -->
						<div class="product">
							<div class="product-container">
								<div class="product-pic-container">
									<div class="product-pic">
										<div class="cate-block">
											<div class="cate-top">
												<img src="design_img/milestone-18.jpg">
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- -->
						<div class="product">
							<div class="product-container">
								<div class="product-pic-container">
									<div class="product-pic">
										<div class="cate-block">
											<div class="cate-top">
												<img src="design_img/milestone-19.jpg">
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- -->

						<div class="product">
							<div class="product-container">
								<div class="product-pic-container">
									<div class="product-pic">
										<div class="cate-block">
											<div class="cate-top">
												<img src="design_img/milestone-21.jpg">
											</div>

										</div>

									</div>
								</div>

							</div>
						</div>
						<!-- -->
					</div>
					<script>
						$(document).ready(function() {
							$("#categories-product").owlCarousel({
								items: 4,
								lazyLoad: true,
								navigation: true,
								pagination: false,
								slideSpeed: 800,
								autoPlay: 2000,
								stopOnHover: true,
								autoplayTimeout: 1000,
								itemsMobile: [767, 1],
								itemsTablet: [991, 3],
								itemsDesktop: [1199, 4],
							});

						});
					</script>
				</div>


			</div>
		</div>
	</div>

</section>
<?php
include('design_includes/footer.php');
?>