<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Receipt</title>
<link rel="stylesheet" type="text/css" href="/gaushala-admin/gaushala_receipt.css">
<style>
body{
    
}
.container{
    box-sizing: border-box;
    height: 480px;
    width: 800px;
    border: 1px solid black;
}
.divider{
    width: 100%;
    border-bottom: 2px solid black;
}
.header{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    /* align-items: center; */
}
.header-left{
    width: 20%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.header-right{
    width: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.red{
    color: #F40009;
}
.bold{
    font-weight: bold;
}
.block-item{
    display: flex;
    flex-direction: column;
    padding: 8px;
}
.block1{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.f-12{ font-size: 12px; }
.f-14{ font-size: 14px; }
.f-18{ font-size: 18px; }
.f-20{ font-size: 20px; }
.p-8{ padding: 8px; }
.block3{
       width: 100%;
       display: flex;
        flex-direction: row;
}
.money-block{
    width: 25%;
}
.money-box{
    height: 25px;
    border: 2px solid black;
}
.pan-box{
    height: 40px;
    border: 2px solid black;
    display: flex;
    flex-direction: column;
}
.note-block{
    width: 75%;
}
.notes{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
}
.note-item{
    display: flex;
    flex-direction: column;
}

.flex-row{
    display:flex;
    flex-direction:row;
    align-items:baseline;
}

.fa-facebook-square {
  color: #3b5998;
  background-image: linear-gradient( to bottom, transparent 20%, white 20%, white 93%, transparent 93% );
  background-size: 55%;
  background-position: 70% 0;
  background-repeat: no-repeat;
}

.block2{
    display:flex;
    flex-direction:column;
}
.form-item{
    display:flex;
    align-items: center;
    padding: 4px;
    gap:8px;
}
.underline{
    border-bottom: 1px solid black;
}
.red form-item{
    padding:4px;
    align-items:center;
}
.money-block{
    padding:8px;
    align-items:center;
   
}
.pan-box{
   padding:8px;
    align-items:center;
    justify-content:space-around;
}
.note-block{
    padding:8px;
    align-items:center;
    gap:8px;
}
.f-12{
     padding:8px;
    align-items:center;
    justify-content:space-around;
    
}
.w-10{ width:10%;}
.w-20{ width:20%;}
.w-30{ width:30%;}
.w-40{ width:40%;}
.w-60{ width:60%;}
.w-90{ width:90%;}
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
.print-wrapper{
    padding:12px;
}    
</style>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container"> 
        <div class="header">
            <div class="header-left">
                <img alt="gaushala-logo" src="https://sahilmoney.in/gaushala-v2/assets/img/gaushala-receipt-logo.jpeg" width="100" height="100"/>
            </div>
            <div class="header-right">
                <span class="red bold">भारतीय गोवंश रक्षण संवर्धन परिषद</span>
                <span class="bold">BHARTIYA GOVANSH RAKSHAN SAMVARDHAN PARISHAD</span>            
                <span>Public Trust Regd. No. : E-2797/Thane/5-10-2002</span>
                <span class="red bold">(श्री गोपाल गौशाला)</span>
                <span>Adv. Lalit Jain Marg, (Belapada Road), Via - Angaon, Supegaon, Tal. Bhiwandi, Dist-Thane.</span>
                <span>Corr. Add: 401, Kasari Ali, Sai Prasad Bldg, 3rd Floor, A-Wing, Bhiwandi-421 308</span>
            </div>            
        </div>
        <div class="divider"></div>
        <div class="content">
            <div class="block1">
                <div>
                    <div class="block-item">
                        <span class="f-14">Web: www.shreegopalgaushala.com</span>
                        <div class="flex-row">
                            <span>
                                <i class="fa fa-facebook-square"></i>: 
                            </span>
                            <span class="f-14">Angoan Goshala</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="f-18 ">Receipt No: <b>GP000001</b></span>                        
                    </div>
                </div>
                <div class="block-item red">
                    <span class="f-20">Cash/Cheque/Online</span>
                    <span class="f-20">Donation Receipt</span>
                </div>
                <div>                    
                    <div class="block-item">
                        <span class="f-14">Email: angaongoshala@gmail.com</span>
                        <span class="f-14">Mobile: 08390888737 / 7568531382</span>
                    </div>
                    <div class="p-8">
                        <span class="f-18" >Date: <span style="text-decoration: underline; width:40px;" class="bold"><?php if(isset($donor_data["DonationDate"]) && $donor_data["DonationDate"]!="") echo date('d-m-Y', strtotime($donor_data["DonationDate"])); ?></span></span>                        
                    </div>
                </div>
            </div>

            <div class="block2">
                <div class="form-item">
                    <div>Received with thanks from M/s./Mrs./Shri: </div> 
                    <div class="underline w-60 bold"><?php if(isset($donor_data["DonorName"]) && $donor_data["DonorName"]!="") echo $donor_data["DonorName"]; ?></div> 
                </div>
                <div class="form-item">
                    <div>Add:</div> 
                    <div class="underline w-90 bold"><?php if(isset($donor_data["Address"]) && $donor_data["Address"]!="") echo $donor_data["Address"]; ?></div> 
                </div>
               
                <div class="form-item">
                    <div>Mob:</div> 
                    <div class="underline w-30 bold"><?php if(isset($donor_data["ContactNumber"]) && $donor_data["ContactNumber"]!="") echo $donor_data["ContactNumber"]; ?></div> 
                    <div>the sum of Rupees:</div> 
                    <div class="underline w-40 bold"><?php if(isset($donor_data["DonationAmount"]) && $donor_data["DonationAmount"]!="") echo $donor_data["DonationAmount"]; ?></div> 
                 </div>
                
                
                <div class="form-item">
                    <div>Bank/Cash:</div> 
                    <div class="underline w-20 bold">Online Payment</div> 
                    <div>Branch:</div> 
                    <div class="underline w-10 bold">Angaon</div>
                    <div class="w-20">Chq/NEFT/UTR No:</div> 
                    <div class="underline w-10 bold"><?php if(isset($donor_data["TxnId"]) && $donor_data["TxnId"]!="") echo $donor_data["TxnId"]; ?></div> 
                    <div>Dt:</div>
                    <div class="underline w-10 bold"><?php if(isset($donor_data["DonationDate"]) && $donor_data["DonationDate"]!="") echo date('d-m-Y', strtotime($donor_data["DonationDate"])); ?></div>
                </div>
                
                <span class="red form-item">Grass / Chunni / Construction / Corpus / Adopt 1 cow / Green Grass / Gud Deposit A/c: _______________</span>
            </div>
            
            

            <div class="block3">
                <div class="money-block">
                    <div class="money-block-item">
                        <div class="money-box">
                            ₹ <?php echo $donor_data["DonationAmount"]; ?>
                        </div>
                        <span class="f-12">Subject to realisation of Cheque</span>
                    </div>
                    <div class="pan-box">
                        <span>PAN: AAATB8885G</span>
                        <span>Financial year: <?php echo date('Y')."-". date('Y') + 1?></span>
                    </div>                    
                </div>
                <div class="note-block">
                    <div class="notes">
                        <div class="note-item">
                            <span>______________________</span>
                            <span class="f-14">Donor's Sign/PAN</span>
                        </div>
                        <div>
                            <span class="bold f-12">For BHARTIYA GOVANSH RAKSHAN SAMVARDHAN PARISHAD</span>
                        </div>                        
                    </div>
                    <div class="p-8">
                        <span class="f-12" >Donation to Bhartiya Govansh Rakshan Samvardhan Parishad qualifies for deduction u/s 80G(5) of the 
                            Income Tax Act, 1961 vide order No. Thane/AA-11/80G/249/2008-09-/1956 Dated 30-09-2008 issued by CIT 
                            (Exemption) which is valid till it is withdrawn in the terms of circular No 7/2010 (F.NO. 197/21/2010-ITA-I)
                            dtd. 27-10-2010
                        </span>
                    </div>
                </div>

            </div>

        </div>        
    </div>
    
    <div class="print-wrapper">
        <button class="cust-theme-btn" onclick="window.print();">Print</button>    
    </div>
    
</body>
</html>
