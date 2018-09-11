<?php
$open_token=base64_decode(urldecode($openSession));
//print_r($open_token);

//print_r($openSessionId);

include 'header.php';?>
<section>
  <div class="container con49 min8">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">

        <div class="bgvid">
          <a class="btn icon-btn btn-warning" href="#">
            <span class="glyphicon btn-glyphicon glyphicon-minus fa fa-video-camera img-circle text-warning"></span>Video Chat
          </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn icon-btn btn-warning" href="messages_user.html">
            <span class="glyphicon btn-glyphicon glyphicon-minus fa fa-comments-o img-circle text-warning"></span>Messages
          </a>
        </div>

        <div id="London" class="tabcontent tabb" style="display:block;">
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
        </div>

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
      <div class="col-md-2">
        <div class="chatContainer">
          <div id="chatHistory">
          </div>
          <div class="chatcntrl">
          <input type="text" id="txtMsg" name="chatmsg">
          <button id="btnSendchat">send</button>
		  
		  
		    <button id="btnstart">test</button>
          <div>
        </div>
         
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script> 
  var APIKEY = '<?php echo $openTokapi ?>'; 
  var TOKEN ='<?php echo $open_token ?>'; 
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/socket.js"></script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script>
    openOpentokConnection ('<?php echo $openSessionId ?>');
</script>