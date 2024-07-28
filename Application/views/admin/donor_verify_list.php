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
 </style>
 
 
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Donor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Donor</li>
          <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/donor">Verified List</a></li>
          <!--<li class="breadcrumb-item active">Data</li>-->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Verified List</h5>
              <!--<p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>-->

              <!-- Table with stripped rows -->
            <?php if (!empty($pending_donors)) : ?>
              <table class="table datatable">
                <thead>
                 <tr>
                    <th width="20px">SN</th>
                    <th width="20px">DonorName</th>
                    <th width="20px">ContactNumber</th>
                    <th width="20px">Email</th>
                    <th>DonationAmount</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sn=1; foreach ($pending_donors as $donor) : ?>
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $donor->DonorName; ?></td>
                        <td><?php echo $donor->ContactNumber; ?></td>
                        <td><?php echo $donor->Email; ?></td>
                        <td><?php echo $donor->DonationAmount; ?></td>
                        <?php 
                            $arr = array("donor_id"=>$donor->DonorID); 
                            $arr_json_encode = json_encode($arr);
                            $base64_url_encode = base64_encode($arr_json_encode);
                            $verify_url = base_url()."admin/generate_receipt/".$base64_url_encode;
                            $view_url = base_url()."admin/view_donor/".$base64_url_encode;
                        ?>
                        <td>
                            <a class="cust-theme-btn" href="<?php echo $view_url; ?>" >
                                View
                            </a>
                        </td>
                        <td>
                            <a class="cust-theme-btn" href="<?php echo $verify_url; ?>" >
                                Receipt
                            </a>
                        </td>
                        
                    </tr>
                     <?php $sn++; endforeach; ?>
                
                </tbody>
              </table>
              <?php else : ?>
                    <p>No pending donors found.</p>
            <?php endif; ?>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  

 