<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <main class="main">

     <!-- /Donate Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h3>Step 2 : Scan QR code, add transaction detail and submit</h3>
        </div> 
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          
            <form action="<?php echo base_url()."donate/step2/".$url; ?>" method="post" enctype="multipart/form-data"  data-aos="fade-up" data-aos-delay="200">
             <div class="row gy-4">
               
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo base_url();  ?>assets/img/portfolio/devlopement-qrcode.png" alt="" class="img-fluid">
                </div>
                
                <div class="col-lg-8 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-content ps-0 ps-lg-3">
                      <h3>Please mention transaction details and submit</h3>
                      
                      
                          <div class="row gy-4">
                                <div class="col-md-8">
                                  <label for="name-field" class="pb-2">Transaction No<span style="color:red">*<span></label>
                                  <input type="text" name="transaction_no" id="transaction_no" class="form-control" value="<?php echo set_value('transaction_no'); ?>" >
                                  <span style="color:red";><?php echo form_error('transaction_no'); ?></span>
                                </div>
                                <div class="col-md-8">
                                  <label for="name-field" class="pb-2">Upload Transaction Image</label>
                                  <input type="file" name="uploadimage" id="uploadimage" class="form-control" >
                                  <span style="color:red";><?php echo form_error('uploadimage'); ?></span></br>
                                  <span style="font-size:12px">Note : Please upload screenshot of you transaction</span></br>
                                  <span style="font-size:12px">Only png|jpg|jpeg|pdf file formats are allowed</span>
                                </div>    
                          </div>
                      
                    </div>
        
                 </div>

                <div class="col-md-12 text-center">
                  <!--<button type="submit">Submit</button>-->
                  <input type="submit" style="color:#fff; background:#eb5d1e; border: #eb5d1e; font-size: 18px; border-radius: 50px; transition: 0.3s; padding: 8px 25px;  margin: 0 0 0 30px;" name="submitbtn" id="submitbtn" value="Submit">
                </div>

              </div>
              
            </form>    
        </div>

    </section>
    <!-- /Donate Section -->

  </main>

 