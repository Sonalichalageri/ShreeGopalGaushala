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
          <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/donor">Pending List</a></li>
          <!--<li class="breadcrumb-item active">Data</li>-->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pending List</h5>
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
                    <th>Address</th>
                    <th>DonationAmount</th>
                    <!--<th>DonationDate</th>-->
                    <!--<th>PaymentMethod</th>-->
                    <!--<th>PaymentStatus</th>-->
                    <!--<th>DonorStatus</th>-->
                    <!--<th>Remarks</th>-->
                    <th>Verify</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sn=1; foreach ($pending_donors as $donor) : ?>
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $donor->DonorName; ?></td>
                        <td><?php echo $donor->ContactNumber; ?></td>
                        <td><?php echo $donor->Email; ?></td>
                        <td><?php echo $donor->Address; ?></td>
                        <td><?php echo $donor->DonationAmount; ?></td>
                        <!--<td><?php //echo $donor->DonationDate; ?></td>-->
                        <!--<td><?php //echo $donor->PaymentMethod; ?></td>-->
                        <!--<td><?php //echo $donor->PaymentStatus; ?></td>-->
                        <!--<td><?php //echo $donor->DonorStatus; ?></td>-->
                        <!--<td><?php //echo $donor->Remarks; ?></td>-->
                        <td><button class="verify-btn cust-theme-btn" data-id="<?php echo $donor->DonorID; ?>">Verify</button></td>
                        <!--<input type="submit" style="" name="submitbtn" id="submitbtn" value="Submit">-->
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
   <script>
    $(document).ready(function(){
        $('.verify-btn').click(function(){
            var donorId = $(this).data('id');
            $.ajax({
                url: '<?php echo base_url("admin/verify_donor"); ?>',
                method: 'POST',
                data: { donor_id: donorId },
                success: function(response) {
                    if(response) {
                        alert('Donor verified successfully.');
                        location.reload();  // Reload the page to update the status
                    } else {
                        alert('Failed to verify donor.');
                    }
                }
            });
        });
    });
    </script>

 