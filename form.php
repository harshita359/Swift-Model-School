<?php
include('design_includes/header.php');
include('design_includes/browser.php');
?>
  
    
    <!--   -->
    <section class="contents">
        <!--  -->
        <div class="contact-sec forms">
          <div class="container">
            <div class="row cont-gape">
              <div class="col-sm-12">
                <div class="cont-form-outer">
                  <h3 class="main-head">Send Message</h3>
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
                          <label for="message"> Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message"></textarea>
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
                </div>
              </div>
            </div>
    
          </div>
        </div>
        <!--  -->
      </section>
    <!-- -->
   
    <script src="design_plugins/scroll/jquery.nicescroll.min.js"></script>
    <script src="design_plugins/scroll/jquery.fancybox.pack.js"></script>
    <script src="design_plugins/scroll/skrollr.min.js"></script>
    <script src="design_plugins/scroll/jquery.appear.js"></script>
    
    <?php
include('design_includes/footer.php');
?>