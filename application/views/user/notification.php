<?php
include 'header.php';
$open_tokenId=base64_decode(urldecode($openToken));?>
		<section class="pubsec min8"style="    margin-bottom: 26px;">
		<div class="container">
		<div class="row">
		
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<div class="acc-setting">
							  			<h3>Notifications</h3>
							  			<div class="notifications-list">
							  			    
							  			    
							  			    
							  			    
							  			    
							  			    
							  			    	<?php if(!empty($notifications)){	foreach($notifications as $frq){?>
							  			    <div class="notfication-details">
							  			        
							  			     
											<?php if($frq->fri_id != $frq->user_id)
											{
												?>
										
								  				<div class="noty-user-img">
								  				    
								  				  
								  					<?php 
															if($frq->profile_pic != ""){?>
															
															<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">

													<?php } else{?>
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
								  					
								  					
								  				</div>
								  				
											<?php } ?>
								  				
								  				<div class="notification-info">
								  				    
								  					<h3> <?php echo $frq->messages ?></h3>
								  					
										
										
								  					<span>2 min ago</span>
								  					
								  				</div><!--notification-info -->
								  			
							  				</div>
							  			    
												<?php }}
else{
											?>		<div class="alert alert-danger"  >No Result Found !!!</div>
										<?php	}
												?> 	
							  	 
							  	 
							  				</div>
							  				
							  				
							  				
							  		 
							  		  
							  		
							  		
							  	 
		
		</div>
		</div>
		</div>
		</section>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script>
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $openSessionId;?>";
		var TOKEN = "<?php echo $open_tokenId;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>

   <div id="callModal" class="modal">
            <div class="modal-content text-center">
                <div class="modal-header" id="callerInfo"></div>

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
		

	<?php
include 'footer.php';?>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>