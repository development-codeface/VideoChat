<?php
include 'header.php';
$open_tokenId=base64_decode(urldecode($openToken));$user=$this->session->userdata('user_id');?>
<input type='text' name="uid" id="uid" value='<?php echo $user; ?>' hidden >
<script src="https://static.opentok.com/v2/js/opentok.js">
</script>	
<section class="profile-account-setting min8">
  <div class="container">
    <div class="account-tabs-setting">
      <div class="row">
        <div class="col-lg-3">
          <div class="acc-leftbar">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <!--a class="nav-item nav-link active" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab" aria-controls="nav-acc" aria-selected="true"><i class="la la-cogs"></i>Account Setting</a-->
			  <a class="nav-item nav-link" id="nav-requests-tab" data-toggle="tab" href="#nav-requests" role="tab" aria-controls="nav-requests" aria-selected="false"><i class="fa fa-reply" aria-hidden="true"></i> Friend Requests Sent</a>
			  
              <a class="nav-item nav-link active" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false">
                <i class="fa fa-lock">
                </i>Change Password
              </a>
               <!--a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false"><i class="fa fa-flash"></i>Notifications</a--> 
             
              <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false">
                <i class="fa fa-random">
                </i>Deactivate Account
              </a>
            </div>
          </div>
          <!--acc-leftbar end-->
        </div>
        <div class="col-lg-9">
          <div class="tab-content" id="nav-tabContent">
            <?php echo $this->session->flashdata("msg");?> 
            <div class="tab-pane fade show active" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
              <div class="acc-setting">
                <form action="<?php echo base_url(); ?>index.php/Profile/change"  method="POST" class="padr20">
                  <div class="cp-field">
                    <h5>Current Password
                    </h5>
                    <div class="cpp-fiel">
                      <input type="password" name="oldpassword" required placeholder="***********" class="form-control">
                      <i class="fa fa-lock">
                      </i>
                    </div>
                  </div>
                  <div class="cp-field">
                    <h5>New Password
                    </h5>
                    <div class="cpp-fiel">
                      <input type="password" id="password" name="password" required placeholder="***********" class="form-control">
                      <i class="fa fa-lock">
                      </i>
                    </div>
                  </div>
                  <div class="cp-field">
                    <h5>Repeat Password
                    </h5>
                    <div class="cpp-fiel">
                      <input type="password" name="repassword" id="confirm_password" required placeholder="***********" class="form-control">
                      <i class="fa fa-lock">
                      </i>
                    </div>
                  </div>
                  <span id='message'>
                  </span>
                  <div class="save-stngs pd2">
                    <div class="col-lg-12">
                      <p class="sav_bt">	
                        <!--button type="submit" id="basicinfo" >Submit</button-->
                        <button type="submit" class="acceptser">Save Settings
                        </button>
                      </p>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                  <!--save-stngs end-->
                </form>
              </div>
              <!--acc-setting end-->
            </div>
            <div class="tab-pane fade" id="nav-requests" role="tabpanel" aria-labelledby="nav-requests-tab">
              <div class="acc-setting">
                <h3>Friend Requests Sent
                </h3>
                <div class="requests-list widt100">
                  <?php if(!empty($sendRequest)){
$i=1;
foreach($sendRequest as $frq){
	
	?>
                  <div class="request-details request-detailsch" id="<?php echo $frq->user_id;?>">
                    <div class="noty-user-img">
                    	<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
									
									<?php if($frq->profile_pic!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">
											<?php }else{?>
											<?php if($frq->gender==1)
											{
												?>
											<img src="<?php echo base_url(); ?>assets/images/resources/malemaleavatar.png" alt="">
											<?php
											}
											else
											{ ?>
												<img src="<?php echo base_url(); ?>assets/images/resources/femalemaleavatar.png" alt="">
										<?php	} ?>
											
											<?php }?>
									
									
									</a>
                    </div>
                    <div class="request-info">
					
                      <h3>
                        <?php echo $frq->full_name ;?>
                      </h3>
                      <!--<span>Graphic Designer</span>-->
                    </div>
                    <div class="accept-feat">
                      <ul>
                        <li>
                          <button type="button" class="accept-req" onclick="">Requested
                          </button>
                        </li>
                        <li>
                          <button type="button" class="close-req">
                            <i class="la la-close">
                            </i>
                          </button>
                        </li>
                      </ul>
                    </div>
                    <!--accept-feat end-->
                  </div>
                  <!--request-detailse end-->
                  <?php }} ?>
                </div>
                <!--requests-list end-->
                <div class="clearfix">
                </div>
             
              <!--acc-setting end-->
            </div>
            </div>
			
										
									
            <div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
			
<?php if(isset($_SESSION["success"])) { ?>
<div class="clearfix"></div>
										<div class="alert alert-success"><?php echo $this->session->flashdata("success");?> </div> 
									<?php } ?>
									<div class="acc-setting">
             	<form method="POST" class="padr20" action="<?php echo base_url(); ?>index.php/Profile/deactive" name="deform" id="deform">
                  <div class="cp-field">
                    <h5>Email
                    </h5>
                    <div class="cpp-fiel">
                      <input type="text" name="emailid" id="emailid" placeholder="Email" class="form-control">
                      <i class="fa fa-envelope">
                      </i>
                    </div>
                  </div>
                  <div class="cp-field">
                    <h5>Password
                    </h5>
                    <div class="cpp-fiel">
                      <input type="password" name="pas" id="pas" placeholder="Password" class="form-control">
                      <i class="fa fa-lock">
                      </i>
                    </div>
                  </div>
                  <div class="cp-field">
                    <h5>Please Explain Further
                    </h5>
						<textarea placeholder="Write something here..." name="bb" id="bb"  ></textarea>
                  
                    </textarea>
                  </div>
                  <div class="cp-field">
				  
												<label class="containerc"> <a href="#" title="" class="exp-bx-open aqw"><small>I accept
												</small></a>
  <input type="checkbox"  name="agree" id="agree" value="agree" required>
  <span class="checkmarkc"></span>
</label>
                   
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id,
                    </p>
                  </div>
                  <div class="clearfix">
                  </div>
                  <div class="col-lg-12">
                    <p class="sav_bt">	
                      <button type="submit" class="acceptser" id="deactive" name="deactive">Deactivate
                      </button>
                    </p>
                    <div class="clearfix">
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                </form>
              </div>
              <!--acc-setting end-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--account-tabs-setting end-->
  </div>
</section>
<?php
include 'footer.php';?>
<script>
  $('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').html('New Password Matching').css('color', 'green');
    }
    else 
      $('#message').html('New Password Not Matching').css('color', 'red');
  }
                                      );
</script>
<!--Modal to show that we are calling-->
<div id="callModal" class="modal">
  <div class="modal-content text-center">
    <div class="modal-header" id="callerInfo">
    </div>
    <div class="modal-body">
      <button type="button" class="btn btn-danger btn-sm" id='endCall'>
        <i class="fa fa-times-circle">
        </i> End Call
      </button>
    </div>
  </div>
</div>
<!--Modal end-->
<!--Modal to give options to receive call-->
<div id="rcivModal" class="modal">
  <div class="modal-content text-center">
    <div class="modal-header" id="calleeInfo">
    </div>
    <div class="modal-body">
      <button type="button" class="btn btn-success btn-sm answerCall" id='startVideo'>
        <i class="fa fa-video-camera">
        </i> Video Call
      </button>
      <button type="button" class="btn btn-danger btn-sm" id='rejectCall'>
        <i class="fa fa-times-circle">
        </i> Reject Call
      </button>
    </div>
  </div>
</div>
<!--Modal end-->
<!--Snackbar -->
<div id="snackbar">
</div>
<!-- Snackbar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://static.opentok.com/v2/js/opentok.js">
</script>
<script>
  var APIKEY = "<?php echo $apiKey;?>";
  //YOUR_API_KEYdash;
  var SESSIONID = "<?php echo $openSessionId;?>";
  var TOKEN = "<?php echo $open_tokenId;?>";
  //alert(apiKey +' == '+ sessionId);
</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto">
</audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto">
</audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js">
</script>
<script>
  normalConnection();
</script>

<!--------------------------------------Form Validation script---------------------------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<!--script type="text/javascript" src="<!?php echo base_url(); ?>js/jquery_validation/jquery.validate.js"></script-->
<script type="text/javascript"> 
	 $("#deform").validate({

            rules: {
            emailid:"required",
			pas:"required",
			bb:"required",
			agree :"required"
			
             },
            messages: {
              emailid:"Please enter th email "    ,
	     pass:"Please enter the password" ,
		 bb:"Please enter the reason" ,
		 agree:"Please select the field"
		        }
    
	   }); 
	   </script>