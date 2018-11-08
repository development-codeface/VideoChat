<?php
include 'header.php';
?>
	
		
<section class="pubsec min8" style="    margin-bottom: 26px;">
		<div class="container">
		<div class="row">
		
		
		<div class="col-md-12">
		<div class="widget widget-jobs">
		                                <div class="sd-titles">
											<h3>How it works</h3>
											
										</div>
										
										<h4>Public / Private tab</h4>
										<div class="jobs-list">
											<div class="job-info">
																<p> You can choose to keep your profile Public / Private</p>
																
																<p>If Public tab is On, people searching on Public Profile can view your profile and can send you friend request. 

</p>
															<p> If Private tab is On, no one can search /view your profile. You can send friend request if that individual has set profile as Public.</p>	
															
																
											</div><!--job-info end-->
										
										</div><!--jobs-list end-->
											<h4>Public Profile</h4>
										<div class="jobs-list">
											<div class="job-info">
												
																<p>You can search profile of individuals who has kept their account Public and add them to your friend list. 
</p>
															
																
											</div><!--job-info end-->
										
										</div><!--jobs-list end-->
										<h4>Videochat</h4>
										<div class="jobs-list">
											<div class="job-info">
												
																<p>Friends – The tab will show all your online friends from your friend list. </p>
																
													
											</div><!--job-info end-->
										
										</div><!--jobs-list end-->
										<h4>Stranger </h4>
										<div class="jobs-list">
											<div class="job-info">
												
																<p>You have 3 options. Male / female / Others. You will be connected with random people according to the option selected. </p>
																<p>• Make sure you have kept the correct gender on your profile.</p>

<p>• The stranger can only see your “Nick Name”</p>

<p>• You have the option to add Strangers to your “Strange list”. Strangers added to this list can only view your Nick name. They cannot access your profile. </p>

<p>• You can move a person from Stranger list to friend list if both parties accept the friend request. 
</p>
																
																
											</div><!--job-info end-->
										
										</div><!--jobs-list end-->
										<h6>PS : Your friends can view your friend list from your profile but stranger list is only visible to you. However, you have the option to hide your friend list. </h6>
										<div class="jobs-list">
											<div class="job-info">
													
											</div><!--job-info end-->
										
										</div><!--jobs-list end-->
											
										<div class="jobs-list">
											<div class="job-info">
													
											</div><!--job-info end-->
										
										</div><!--jobs-list end-->
											
		</div>
		</div>
		</div></section>

      
		
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
				Abhi Calling
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
		
<?php
include 'footer.php';?>
<script type="text/javascript" >


    var box = $('.ed-options');
    var link = $('.ed-opts-open');
    $(document).click(function() {
        box.hide(); //box1.hide();
    });
    box.click(function(e) {
        e.stopPropagation();
    });
	$(".ed-opts-open").on("click", function(){
	$(this).parent('.form_wrapper').find(box).show();
});

</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>