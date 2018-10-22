<?php
include 'header.php';?>
 
 
 <script src="https://static.opentok.com/v2/js/opentok.js"></script>
 
 

<section class="banner-img1 text-white py-55 min8">
    <div class="container">
      
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                     
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane tabbanc fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="card bg-primary card-body text-white sepro">
                       <div class="row pb-3">
                           <div class="col-md-12">
                               <h4>Video chat</h4>
                           </div>
                       </div>
                       
                       <div class="row">
		
                         <div id="videos">
						<div id="subscriber"></div>
						<div id="publisher"></div>
						</div>
                       </div>
                   </div>

                          </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 	
	<script>
		var apiKey = "<?php echo $apiKey;?>";          //YOUR_API_KEYvideo;
		var sessionId = "<?php echo $sessionId;?>";
		var token = "<?php echo $token;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>
		

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