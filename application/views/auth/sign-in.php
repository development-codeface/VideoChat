
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Live Chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>


<body class="sign-in">
	

	<div class="wrapper">
		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-7">
							<img src="<?php echo base_url(); ?>assets/images/vid2.jpg" class="logimg">
						</div>
						<div class="col-lg-5">
						
							<div class="login-sec">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="signlogo"></a>
								<ul class="sign-control">
									<li data-tab="tab-1" class="<?php if($tab =="index")
{ echo $cls = "animated fadeIn current"; } else { echo $cls = "animated fadeIn"; } ?>"><a href="<?php echo base_url();?>Auth/login" title="">Sign in</a></li>				
									<li data-tab="tab-2" class="<?php if($tab =="register")
{ echo $cls = "animated fadeIn current"; } else { echo $cls = "animated fadeIn"; }  ?>"><a href="<?php echo base_url(); ?>register" title="">Sign up</a></li>				
								</ul>	
								
								<div class="<?php if($tab =="index")
{ echo $cls = "sign_in_sec animated fadeIn current"; } else { echo $cls = "sign_in_sec animated fadeIn"; }  ?>" id="tab-1">
									<?php if(isset($_SESSION["success"])) { ?>
										<div class="alert alert-success"><?php echo $this->session->flashdata("success");?> </div> 
									<?php } ?>
                                    <?php if(isset($_SESSION["err_msg"])) { ?>
										<div class="alert alert-danger"><?php echo $this->session->flashdata("err_msg");?> </div> 
									<?php } ?>
                                    <?php echo validation_errors('<div class = "alert alert-danger">', '</div>'); ?>
									<h3>Sign in</h3>
									<form method="post" action="<?php echo base_url(); ?>index.php/Auth/" name="logform">
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username" required>
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password" required>
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div><!--fgt-sec end-->
													<a href="#" title="">Forgot Password?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
												<button type="submit" value="submit" name="submit">Sign in </a></button>
											</div>
										</div>
									</form>
									<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
									</div><!--login-resources end-->
								</div><!--sign_in_sec end-->
								<div class="<?php if($tab =="register")
{ echo $cls = "sign_in_sec animated fadeIn current"; } else { echo $cls = "sign_in_sec animated fadeIn"; } ?>" id="tab-2">
									<h3>  Sign Up for FREE</h3>	
                                    <?php echo validation_errors('<div class = "alert alert-danger">', '</div>'); ?>
									<div class="dff-tab current" id="tab-3">
										<form method="post" action="<?php echo base_url(); ?>index.php/Auth/register" name="signupform" id="signupform" data-toggle="validator" role="form">
								
											<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Full Name" required>
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email"  id="email" placeholder="Email Address" required>
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="alert alert-danger"  id="alertE" style="display:none">Email Already Exist !!!</div> 
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="number" name="phone_no" placeholder="Phone Number" required>
														<i class="la la-phone"></i>
													</div>
												</div>
													<div class="col-lg-12 no-pdd">
													<div class="sn-field">
												 <label class="checkbox-inline"><b>Gender </b> :</label>
		 
		  <label class="checkbox-inline"><input type="radio" name="gender" checked="checked" id="gender"style=" width: 15px;
    height: 15px;" value="1" >&nbsp;male </label>
<label class="checkbox-inline"><input type="radio" name="gender"  id="gender" style="width: 15px;
    height: 15px;"  value="2">&nbsp;Female </label>
</div>
												
	</div>												
												
												
												
												
												
												
												
												
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="u_name" placeholder="Username" id="user_name" required>
														<i class="la la-user"></i>
														</div>
													
												</div>
												<div class="alert alert-danger"  id="alerts" style="display:none">User Name Already Exist !!!</div> 
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="u_pass" id="u_pass" placeholder="Password"  minlength="6"   required>
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec">
													<div class="fgt-sec">
                                                    
														<input type="checkbox" checked name="cc" id="c2" required>
														<label for="c2">
															<span></span>
														</label>
														<a href="#" title="" class="exp-bx-open"><small>Terms & Conditions.*</small></a>
														
													</div><!--fgt-sec end-->
													
												</div>
													
												</div>
												<div class="col-lg-12 no-pdd">
                                                
												<button type="submit" value="submit" name="register"  >Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec" style="padding: 10px;">
				<div class="container">
					<ul>
						
						<li><a href="#" title="">Privacy Policy</a></li>
				
						<li><a href="#" title="">Terms & Conditions</a></li>
						<li><a href="#" title="">Cookies </a></li>
						<li><a href="#" title="">Contact</a></li>
					</ul>
					<p><img src="<?php echo base_url(); ?>assets/images/copy-icon.png" alt="">Copyright 2018 All rights reserved</p>
				</div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->
	
	<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3>Terms & Conditions</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div>

<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script>
$('#signupform').validator().on('submit', function (e) {
	
	if($('').length<6)
	{
		 alert('passwordmust 6 char');
		 return false 
	}else{ return true; }
 /* if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }*/
})

</script>
</body>

</html>