<?php
$open_token=base64_decode(urldecode($openSession));
//print_r($open_token);

//print_r($openSessionId);

include 'header.php';?>
<section class="bl">
  <div class="min8">
    <div class="row">
     <div class="videoview">

								  					<h3>Jassica William.</h3>
								  					<span>2:44 pm</span>
													
<a href="#" onclick="openFullscreen();"><i class="fa fa-expand jaic" aria-hidden="true"></i></a>
												
								  				
</div>
      <div class="col-md-8">

 <div id="myvideo" class="" style="display:block; width:100%">
          <div class="row">
            <div class="col-md-12">	
              <div id="videos">
                <div class="row">
                 
                  <div class="col-md-12"><div id="subscriber"></div></div>
				   <div class="col-md-3 vpos"><div id="publisher"></div></div>
                </div>
              </div>
            </div>
          </div>    
        </div>
        <!--div id="London" class="tabcontent tabb" style="display:block;">
          <div class="row">
            <div class="col-md-12">	
              <div id="videos">
                <div class="row">
                  <div class="col-md-6"><div id="subscriber"></div></div>
                  <div class="col-md-6"><div id="publisher"></div></div>
                </div>
              </div>
            </div>
          </div>    
        </div-->

        <div id="Paris" class="tabcontent">
          <div class="row">
            <div class="sd-title">
              <h3>Messages</h3>		
            </div>
            <br><br><br><br><br>
            <div class="col-md-12">
              <img src="images/google_hangouts_ipad_best_apps_screens.png" alt="Los Angeles" class="widt100">
            </div>
          </div>
        </div>

        <div id="Tokyo" class="tabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>

      </div>
      <div class="col-md-4">
	  <div class="cw">
	  <div class="chat_window">
	  <div class="top_menu">
	
	  <div class="title"><span class="glyphicon btn-glyphicon glyphicon-minus fa fa-comments-o img-circle text-warning"></span>Live Chat</div></div>
        <div class="chatContainer">
          <div id="chatHistory">
          </div>
          <div class="chatcntrl">
          <input type="text" id="txtMsg" name="chatmsg">
          <button id="btnSendchat"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          <div>
        </div>
         
      </div>
    </div>
  </div>
  </div>
  </div>
</section>


<?php include 'footer.php'; ?>
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
<script>
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>

<script> 
  var APIKEY = '<?php echo $openTokapi ?>'; 
  var TOKEN ='<?php echo $open_token ?>'; 
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    $("#subscriber").hide();
    openOpentokConnection ('<?php echo $openSessionId ?>');
    
</script>