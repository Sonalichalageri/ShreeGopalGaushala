<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <main class="main">

    <!-- /Donate Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h3>Step 1 : Add your details</h3>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">
            <!--<form action="<?php echo base_url()?>donate/index" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">-->
            <form action="<?php echo base_url()."donate/index"; ?>" method="post" enctype="multipart/form-data"  data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-8">
                  <label for="name-field" class="pb-2">Name<span style="color:red">*<span></label>
                  <input type="text" name="donor_name" id="donor_name" class="form-control" value="<?php echo set_value('donor_name'); ?>" >
                  <span style="font-size:12px;">(Note : Mention your name as per your Pan card)</span>
                  <span style="color:red";><?php echo form_error('donor_name'); ?></span>
                </div>

                <div class="col-md-4">
                  <label for="subject-field" class="pb-2">Pancard No<span style="color:red">*<span></label>
                  <input style="text-transform:uppercase" type="text" class="form-control" name="pancard_no" id="pancard_no" value="<?php echo set_value('pancard_no'); ?>" >
                  <span style="color:red;";><?php echo form_error('pancard_no'); ?></span>
                </div>
                
                <div class="col-md-4">
                  <label for="name-field" class="pb-2">Mobile<span style="color:red">*<span></label>
                  <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo set_value('mobile'); ?>" >
                  <span style="color:red";><?php echo form_error('mobile'); ?></span>
                </div>

                <div class="col-md-4">
                  <label for="email-field" class="pb-2">Email Id<span style="color:red">*<span></label>
                  <input type="email" class="form-control" name="email_id" id="email_id" value="<?php echo set_value('email_id'); ?>" >
                  <span style="color:red";><?php echo form_error('email_id'); ?></span>
                </div>

                <div class="col-md-4">
                  <label for="subject-field" class="pb-2">Donation Amount<span style="color:red">*<span></label>
                  <input type="text" class="form-control" name="donation_amount" id="donation_amount" value="<?php echo set_value('donation_amount'); ?>" >
                  <span style="color:red";><?php echo form_error('donation_amount'); ?></span>
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Address<span style="color:red">*<span></label>
                  <textarea class="form-control" name="address" rows="2" id="address" value="<?php echo set_value('address'); ?>" ></textarea>
                  <span style="font-size:12px;">(Note : Address as per as aadhar card)</span>
                  <span style="color:red";><?php echo form_error('address'); ?></span>
                </div>

                <div class="col-md-12 text-center">
                  <!--<div class="loading">Loading</div>-->
                  <!--<div class="error-message"></div>-->
                  <!--<div class="sent-message">Your message has been sent. Thank you!</div>-->

                  <!--<button type="submit" >Submit</button>-->
                  <input type="submit" style="color:#fff; background:#eb5d1e; border: #eb5d1e; font-size: 18px; border-radius: 50px; transition: 0.3s; padding: 8px 25px;  margin: 0 0 0 30px;" name="submitbtn" id="submitbtn" value="Submit">
                </div>
                
            	<p style="color:green"><?php if($this->session->flashdata("success_msg")!="") echo $this->session->flashdata("success_msg");?></p>
            	<p style="color:red"><?php if($this->session->flashdata("error_msg")!="") echo $this->session->flashdata("error_msg");	 ?>	</p>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>
    <!-- /Donate Section -->

  </main>
