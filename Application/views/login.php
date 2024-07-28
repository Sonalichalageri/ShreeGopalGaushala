<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Task Management1</title>	
</head>
<body>


<?php echo form_open('login/auth'); ?>


<div id="container">
	<h1>Login</h1>
	<hr m-t-5>
	<?php if($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
	<div class="row">	
		<div class="col-md-6">
			<div class="form-group-row">
				<label class="col-md-4">Email : </label>
				<div class="col-md-8">
					<input type="text" name="email" id="email" value="">
				</div>	
			</div>	
		</div>			
	</div>	
	<div class="row">	
		<div class="col-md-6">
			<div class="form-group-row">
				<label class="col-md-4">Password : </label>
				<div class="col-md-8">
					<input type="text" name="password" id="password" value="">
				</div>	
			</div>	
		</div>			
	</div>		

	<div class="row">	
		<div class="col-md-6">
			<div class="form-group-row">								
					<input type="submit" name="submitbtn" id="submitbtn" value="Submit">
			</div>	
		</div>			
	</div>	
    <?php echo form_close(); ?>
	<?php echo validation_errors(); ?>
	<p style="color:green"><?php if($this->session->flashdata("success_msg")!="") echo $this->session->flashdata("success_msg");?></p>
	<p style="color:red"><?php if($this->session->flashdata("error_msg")!="") echo $this->session->flashdata("error_msg");	 ?>	</p>
	<hr m-t-5>
	
	<p>Create Account  <button><a href="<?php echo base_url()."index.php/registration"; ?>">Registration</a></button></p>

</div>

</form>

</body>
</html>
