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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>


<body >
	

	<div class="wrapper">
		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
					<div class="modal fade" id="myModalfor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		     <h4 class="modal-title">Reset your password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
        </div>
        <div class="modal-body sign_in_sec forg">
         <form method="post" action="<?php echo base_url(); ?>index.php/Auth/resetpass" name="resetform"  id="resetform">
								
													<div class="sn-field">
														<input type="email" name="reemail"  id="reemail" placeholder="Enter your username or email" required>
													<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
									
		  
        </div>
        <div class="modal-footer mfot">
          <button type="submit" value="submit" class="btn btn-success">Get New Password</button>
        </div>
      </div>
      	</form>
    </div>
  </div>
  
  
  
  
  
						<div class="col-lg-7 nopad">
						<div class="bg_log"> <img src="<?php echo base_url(); ?>assets/images/vid2.jpg" alt="" class="img-responsive" ></div>
							 
						</div>
						<div class="col-lg-5">
						
							<div class="login-sec">
							<!-- <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="signlogo"></a> -->
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
									<h3>Sign In</h3>
									<form method="post" name="logform" id="logform" action="<?php echo base_url(); ?>index.php/Auth/" name="logform">
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username/Email" required>
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
														<input type="checkbox" name="remeberme" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div><!--fgt-sec end-->
													<a href="#" title="" data-toggle="modal" data-target="#myModalfor">Forgot Password?</a>
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

									<div class="login-or">

        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>
	  <!--style>
    .required:after { 
	    content: " * ";
    color: red;
    font-size: 20px;
    margin-top: -33px;
    position: absolute;
    right: 20px;
	}
</style-->
										<ul>
											<li><a href="<?php echo $authURL ?>" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
									</div><!--login-resources end-->
								
								</div><!--sign_in_sec end-->
								<div class="<?php if($tab =="register")
{ echo $cls = "sign_in_sec animated fadeIn current"; } else { echo $cls = "sign_in_sec animated fadeIn"; } ?>" id="tab-2">
									<h3>  Sign Up </h3>	
                                    <?php echo validation_errors('<div class = "alert alert-danger">', '</div>'); ?>
									<div class="dff-tab current" id="tab-3">
										<form method="post" action="<?php echo base_url(); ?>index.php/Auth/register" name="signupform" id="signupform" data-toggle="validator" role="form">
								
											<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
											<div class="row">
												<div class="col-lg-6 no-pdd">
													<div class="sn-field required">
														<input type="text" name="fname" id="name" placeholder="First Name *"  >
														 <?php echo form_error('fname'); ?>
														<i class="la la-user mandi"></i>
													</div>
												</div>
												<div class="col-lg-6 no-pdrt">
													<div class="sn-field required">
														<input type="text" name="lastname" placeholder="Last Name *"  >
														 <?php echo form_error('lastname'); ?>
														<i class="la la-user mandi"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email"  id="email" placeholder="Email Address *" >
														 <?php echo form_error('email'); ?>
														<i class="la la-globe"></i>
													</div>
												</div>
													<div class="col-lg-12 ">
<div class="alert alert-danger"  id="alertE" style="display:none">Email Already Exist !!!</div> 
												
												</div>
												<div class="clearfix"></div>
								<div class="col-lg-6 no-pdd">
													<div class="sn-field">
														<select name="gender"  id="gender" >
															<option value="">Select Gender *</option>
															<option value="1">Male</option>
															<option value="2">Female</option>
														
														</select>
														 <?php echo form_error('gender'); ?>
														<i class="fa fa-venus" aria-hidden="true"></i>
														<span><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
													</div>
												</div>					
												
												<div class="col-lg-6 no-pdrt">
												<div class="sn-field" id="age" >
												<input type="text" id="dob" name="dob" placeholder="Date of birth *" maxlength="10" value=""  readonly>
												
												<!--input type="text" id="dob" name="dob"  data-masked-input="99/99/9999" placeholder="Date of birth *" maxlength="10" value="" required-->
												<i class="la la-calendar-check-o"></i>
												</div>
												</div>
												
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="u_name" placeholder="Username *" id="reg_user_name">
														<i class="la la-user"></i>
														</div>
												</div>
												<div class="alert alert-danger"  id="alertsU" style="display:none">User Name Already Exist !!!</div> 
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="nick_name" placeholder="Nickname (this will only appear on your stranger chat)*" id="nick_name">
														<i class="la la-user"></i>
														</div>
													
												</div>
											
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="u_pass" id="u_pass" placeholder="Password *"  minlength="6"  >
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
												<label class="containerc"> <a href="#" title="" class="exp-bx-open aqw"><small>I agree the Terms & Conditions.* 
												</small></a>
  <input type="checkbox"  name="agree" id="agree" value="agree" required>
  <span class="checkmarkc"></span>
</label>
												</div>
												
												<div class="col-lg-12 no-pdd">
                                                
												<button type="submit" value="submit" name="register"  >Get Started</button>
												</div>
											</div>
										</form>
										
										
										
										
									</div><!--dff-tab end-->
								
								</div>		
							</div><!--login-sec end-->	
							
							<div class="clearfix"></div>
							<div class="footy-sec1">
			 
					<ul>
						
							<li><a href="<?php echo base_url(); ?>index.php/Auth/cookies" title="">Cookies</a></li>
				
						<li><a href="<?php echo base_url(); ?>index.php/Auth/terms_conditions" title="">User Terms & Privacy Policy</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/Auth/howitwork">How it works </a></li>
						<li><a href="" data-toggle="modal" data-target="#Contact">Contact Us</a></li>
					</ul>
					 
				 
			</div>
			
			<!--footy-sec end-->



						</div>
						
					</div>	
						
				</div><!--signin-pop end-->
				
			</div><!--signin-popup end-->
	
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
<div class="modal fade" id="Contact" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content contentimg conwhite">
          <div class="modal-header">
            <h4 class="modal-title vich"> 
              <h4 class="plsechcon">Contact us
              </h4>
            </h4>
            <button type="button" class="close cloimg clotop" data-dismiss="modal">
              <img src="<?php echo base_url(); ?>assets/images/close-button-.png">
            </button>
          </div>
          <div class="modal-body infoh">
		  
            <h1>
			<p>"We love to see your feedback so that we can improve Int Buddy."</p>
			 Please email us at : <b> info@intbuddy.com</b></h1>
			<a href="<?php echo base_url(); ?>index.php/user/profile" title="">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
              </a>
          </div>
        </div>
      </div>
    </div>
<!--datepicker-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>

  <script>
 
    $('#dob').datepicker({
          minDate: new Date(1900,1-1,1), maxDate: '-18Y',
      dateFormat: 'dd/mm/yy',
      defaultDate: new Date(),
      changeMonth: true,
      changeYear: true,
      yearRange: '-110:-18'
        });
  </script>
  <!--datepicker-->
<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>

<!--script type="text/javascript" src="<!?php echo base_url(); ?>assets/js/jquery.min.js"></script-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
 <script src="https://www.jqueryscript.net/demo/Simple-Lightweight-jQuery-Input-Mask-Plugin-Masked-input/dist/jquery.masked-input.js"></script>

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


<!--------------------------------------Form Validation script---------------------------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<!--script type="text/javascript" src="<!?php echo base_url(); ?>js/jquery_validation/jquery.validate.js"></script-->
<script type="text/javascript"> 
	 $("#signupform").validate({

            rules: {
            fname:"required",
			lastname:"required",
			email:"required",
			gender :"required",
			dob :"required",
			u_name :"required",
			u_pass :"required",		
			nick_name :"required",
				agree: "required"
             },
            messages: {
              fname:"Please enter the first name"    ,
	     lastname:"Please enter the last name" ,
		 email:"Please enter the email" ,
		 gender:"Please select the field",
		 dob:"Please select the field" ,
		 u_name:"Please enter the username"  ,
		 u_pass:"Please enter the password"  ,
		 nick_name:"Please enter the nick name"  ,
agree: "Please accept our policy"       }
    
	   }); 
	   $("#logform").validate({

            rules: {
            username:"required",
			password:"required",
		
             },
            messages: {
              
		 username:"Please enter the username"  ,
		 password:"Please enter the password"  ,      }
    
	   });
        
		</script>
		

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '174194773507842',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>







</body>

</html>
