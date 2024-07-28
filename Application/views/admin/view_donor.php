<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
 <style>
    .cust-theme-btn{
        color:#fff; 
        background:#eb5d1e; 
        border: #eb5d1e; 
        font-size: 14px; 
        border-radius: 50px; 
        transition: 0.3s; 
        padding: 8px 25px;  
        margin: 0 0 0 30px;
    }
    .bold{
        font-weight:bold;
    }
    .align{
        padding:8px;
    }
 </style>
 
 
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Donor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Donor</li>
          <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/donor">View Details</a></li>
          <!--<li class="breadcrumb-item active">Data</li>-->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Details</h5>
              
                <div class="row">
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Donor Name : </label>
                            <span class="col-md-8"><?php echo $donor_data["DonorName"]; ?></span>    
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Contact No : </label>
                            <span class="col-md-8"><?php echo $donor_data["ContactNumber"]; ?></span>  
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Email : </label>
                            <span class="col-md-8"><?php echo $donor_data["Email"]; ?></span>  
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="row align">
                             <label class="col-md-4 bold">Donor Status : </label>
                            <span class="col-md-8"><?php echo $donor_data["DonorStatus"]; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Pan : </label>
                            <span class="col-md-8"><?php echo $donor_data["Pan"]; ?></span>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Donation Amount : </label>
                            <span class="col-md-8 "><?php echo $donor_data["DonationAmount"]; ?></span>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="row align">
                           <label class="col-md-4 bold">Donation : </label>
                           <span class="col-md-8"><?php echo $donor_data["DonationDate"]; ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row align">
                           <label class="col-md-4 bold">Payment Method : </label>
                            <span class="col-md-8"><?php echo $donor_data["PaymentMethod"]; ?></span>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold" >Transaction Id : </label>
                            <span class="col-md-8" ><?php echo $donor_data["TxnId"]; ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Payment Status : </label>
                            <span class="col-md-8"><?php echo $donor_data["PaymentStatus"]; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="row align">
                            <label class="col-md-4 bold">Remarks : </label>
                            <span class="col-md-8"><?php echo $donor_data["Remarks"]; ?></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="row align">
                            <label class="col-md-2 bold">Address : </label>
                            <span class="col-md-10"><?php echo $donor_data["Address"]; ?></span>  
                        </div>
                    </div>
                </div>
                
                
             
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  

 