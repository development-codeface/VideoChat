<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>INT BUDDY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Simple-Lightweight-jQuery-Input-Mask-Plugin-Masked-input/dist/jquery.masked-input.js"></script>
 

	<section class="pubsec min8"style="    margin-bottom: 26px;">
		<div class="container">
		<div class="row">
		
		<div class="col-md-2"></div>
		<div class="col-md-8">
		
						
							
			
		<div class="acc-setting">
		
			<div class="login-sec">
						
								<div class="sign_in_sec animated fadeIn current" id="tab-1">
									                                                                        									<h3>Reset Password</h3>
									<form method="post" name="" id="" action="<?php echo base_url(); ?>index.php/Auth/setnewpass" novalidate="novalidate">
										<div class="row">
											
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input name="first" placeholder="New Password" required="" aria-required="true" type="password">
													<i class="la la-lock"></i>
												</div>
											</div>
												<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input name="second" placeholder="Confirm Password" required="" aria-required="true" type="password">
													<i class="la la-lock"></i>
												</div>
											</div>
											
										<input name="tok" hidden id="tok" value="<?php echo $this->uri->segment('3');?> " >
										<input name="user"  hidden id="user" value="<?php echo $this->uri->segment('4');?> " >
											<div class="col-lg-12 no-pdd">
                                            <input name="ci_csrf_token" value="" type="hidden">
												<button type="submit" value="submit" name="submit">Save </button>
											</div>
										</div>
									</form>
			
								</div><!--sign_in_sec end-->
						
					</div>	
							  		
							  		 
							  		  
							  		
							  		
							  	 
		
		</div>
		</div>
		</div>
		</section>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
