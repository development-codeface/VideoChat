<?php
include 'header.php';?>


<script src="https://static.opentok.com/v2/js/opentok.js"></script>	
		<section class="messages-page min8">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-4 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Messages</h3>
									<ul>
										<li><a href="messages.html" title=""><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
									</ul>
								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
										<li class="active">
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img1.png" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>John Doe</h3>
													<p>Lorem ipsum dolor <img src="images/smley.png" alt=""></p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
												<span class="msg-notifc">1</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img2.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>David Vane</h3>
													<p>Vestibulum ac diam..</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img3.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Nancy Dilan</h3>
													<p>Quam vehicula.</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img4.png" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>Norman Kenney</h3>
													<p>Nulla quis lorem ut..</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img5.png" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>James Dilan</h3>
													<p>Vivamus magna just..</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img6.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Mike Dorn</h3>
													<p>Praesent sapien massa.</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img7.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Patrick Morison</h3>
													<p>Convallis a pellente...</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/resources/m-img7.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Patrick Morison</h3>
													<p>Convallis a pellente...</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
									</ul>
								</div><!--messages-list end-->
							</div><!--msgs-list end-->
						</div>
						<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
							<div class="main-conversation-box">
								<div class="message-bar-head">
									<div class="usr-msg-details">
										<div class="usr-ms-img">
											<img src="images/resources/m-img1.png" alt="">
										</div>
										<div class="usr-mg-info">
											<h3>John Doe</h3>
											<p>Online</p>
										</div><!--usr-mg-info end-->
									</div>
									<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
								</div><!--message-bar-head end-->
								<div class="messages-line mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
									
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img2.png" alt="" class="mCS_img_loaded">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="images/smley.png" alt="" class="mCS_img_loaded"></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="" class="mCS_img_loaded">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img2.png" alt="" class="mCS_img_loaded">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet</p>
											</div><!--message-inner-dt end-->
											<span>2 minutes ago</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="" class="mCS_img_loaded">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img2.png" alt="" class="mCS_img_loaded">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>....</p>
											</div><!--message-inner-dt end-->
											<span>Typing...</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="" class="mCS_img_loaded">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
								</div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 453px; max-height: 594px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><!--messages-line end-->
								<div class="message-send-area">
									<form>
										<div class="mf-field">
											<input type="text" name="message" placeholder="Type a message here">
											<button type="submit">Sent</button>
										</div>
										<ul>
											<li><a href="#" title=""><i class="fa fa-smile-o"></i></a></li>
											<li><a href="#" title=""><i class="fa fa-camera"></i></a></li>
											<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
										</ul>
									</form>
								</div><!--message-send-area end-->
							</div><!--main-conversation-box end-->
						</div>
					</div>
				</div><!--messages-sec end-->
			</div>
		</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script type="text/javascript" >
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $sessionId;?>";
		var TOKEN = "<?php echo $token;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>
<?php
include 'footer.php';?>
  <!--Modal to show that we are calling-->
        <div id="callModal" class="modal">
            <div class="modal-content text-center">
                <div class=" " id="callerInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-danger btn-sm" id='endCall'>
                        <i class="fa fa-times-circle"></i> End Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->


        <!--Modal to give options to receive call-->
        <div id="rcivModal" class="modal">
            <div class="modal-content text-center">
                <div class="modal-header" id="calleeInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-success btn-sm answerCall" id='startVideo'>
                        <i class="fa fa-video-camera"></i> Video Call
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" id='rejectCall'>
                        <i class="fa fa-times-circle"></i> Reject Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->
        
        <!--Snackbar -->
        <div id="snackbar"></div>
        <!-- Snackbar -->
           



</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>
