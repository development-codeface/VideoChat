<?php
include 'header.php';?>

<section>
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="col-md-12">
<div class="search-bar searchfor">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div>
					</div>

<div class="tabcontent mg45" style="display:block;">

 <div class="row">
 <div class="suggestions full-width">
 
										<div class="sd-title">
											<h3>Online Friends</h3>
											
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<div class="suggestion-usd">
										
												<img src="images/resources/s1.png" alt="">
													<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>#123214Jessica</span>
												</div>
												<span><a href="messages.html"><i class="fa fa-video-camera" aria-hidden="true"></i></a></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
													<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>#123214Jessica</span>
												</div>
												<span><a href="messages.html"><i class="fa fa-video-camera" aria-hidden="true"></i></a></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
													<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>#123214Jessica</span>
												</div>
										<span><a href="messages.html"><i class="fa fa-video-camera" aria-hidden="true"></i></a></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s4.png" alt="">
												<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>#123214Jessica</span>
												</div>
												<span><a href="messages.html"><i class="fa fa-video-camera" aria-hidden="true"></i></a></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s5.png" alt="">
												<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4>Jessica William</h4>
												<span>#123214Jessica</span>
												</div>
										<span><a href="messages.html"><i class="fa fa-video-camera" aria-hidden="true"></i></a></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>#123214Jessica</span>
												</div>
									<span><a href="messages.html"><i class="fa fa-video-camera" aria-hidden="true"></i></a></span>
											</div>
										
										</div><!--suggestions-list end-->
									</div>
										
	
 </div>
 
    
   


</div>



<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
</div>
</div>
</div>
</section>


<?php
include 'footer.php';?>
  <!--Modal to show that we are calling-->
        <div id="callModal" class="modal modov">
            <div class="modal-content text-center modsty">
                <div class="modal-header modname" id="callerInfo"></div>

                <div class="modal-body pttop">
                    <button type="button" class="btnvide " id='endCall'>
                        <i class="fa fa-times-circle"></i> End Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->


        <!--Modal to give options to receive call-->
        <div id="rcivModal" class="modal modov">
            <div class="modal-content text-center modsty">
                <div class="modname" id="calleeInfo">
				
				</div>

                <div class="modal-body pttop">
                    <button type="button" class="btnvide  answerCall" id='startVideo'>
                        <i class="fa fa-video-camera"></i> Video Call
                    </button>
                    <button type="button" class="btnvide rejectCall" id='rejectCall'>
                        <i class="fa fa-times-circle"></i> Reject Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->
        
        <!--Snackbar -->
        <div id="snackbar"></div>
        <!-- Snackbar -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script type="text/javascript" >
	var APIKEY 		= "<?php echo $apiKey ?>";
	var SESSIONID 	= "<?php echo $openSessionId ?>";
	var TOKEN     	= "<?php echo $open_tokenId ?>";

</script>


</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>