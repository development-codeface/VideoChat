

<?php
$open_token=base64_decode(urldecode($openSession));
//print_r($open_token);

//print_r($openSessionId);

include 'header.php';?>
 
<!--div >
<div class="modal-content text-center">
<button  name="cutcall" name="cutcall" class="btn btn-danger btn-sm dd" onclick="history.back();">stop</button>
</div></div-->
<div id="" class="modal">
            <div class="modal-content text-center">
                <div class="modal-header" id="callerInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-danger btn-sm"  onclick="history.back();">
                        <i class="fa fa-times-circle"></i> Stop
                    </button>
                </div>
            </div>
        </div>
 
<section>
  <div class=" ">
    <div class="row">
     
<div class="col-md-9 no_pad">
 <div id="myvideo" class="" style="display:block; width:100%">
            <div class="row">
                  <div class="col-md-12  ">
                    <div class="sub_div">
                  <div id="subscriber"></div>
</div>


				       <div class="col-md-12 vidapp">
				  <ul class="videoul">
          
          <!--li><button name="cutcall" name="cutcall" class="bg-can " onclick="history.back();"> <i class="fa fa-angle-left" aria-hidden="true"></i></button></li>
          <li><button name="cutcall" name="cutcall" class="bg-view" onclick="history.back();"> <i class="fa fa-user-plus" aria-hidden="true"></i></button></li-->
				  <li><button name="cutcall" name="cutcall" class="bg-can " onclick="history.back();"> <i class="fa fa-phone" aria-hidden="true"></i></button></li>
				  </ul>
  </div>
				  </div>
             
 
				   <div class="col-md-3 vpos"><div id="publisher"></div></div>
                </div>    
        </div>
 

      

      </div>
      <!--div class="col-md-9 no_pad">
 <div id="myvideo" class="" style="display:block; width:100%">
          <div class="row">
            <div class="col-md-12 no_pad">	
              <div id="videos">
                <div class="row">
                  <div class="col-md-12 mh6161"><div id="subscriber"></div>
				       <div class="col-md-12 vidapp">
				  <ul class="videoul">
				  <li><button name="cutcall" name="cutcall" class="bg-view " onclick="openFullscreen();"> <i class="fa fa-expand " aria-hidden="true"></i></button></li>
				  <li><button name="cutcall" id="cutCall" name="cutcall" class="bg-can "> <i class="fa fa-phone" aria-hidden="true"></i></button></li>
				  </ul>
  </div>
				  </div>
             
 
				   <div class="col-md-3 vpos"><div id="publisher"></div></div>
                </div>
              </div>
            </div>
          </div>    
        </div>
 

      

      </div-->
      <div class="col-md-3 cht_hd">
	   
	  <div class="cw">
	  <div class="chat_window">
	  <div class="top_menu">
	
	  <div class="title"><span class="glyphicon btn-glyphicon glyphicon-minus fa fa-comments-o img-circle text-warning"></span>
	  
	  <?php 
											foreach($onlinef as $frq){?>
								  					<?php echo $frq->full_name;?>
								  				
													
 
											<?php } ?>
	  </div></div>
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


 
<div id="callModal" class="modal t92">
            <div class="modal-content text-center">
                <!--div class="modal-header" id="callerInfo"></div-->

             
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
  var IsCaller = '<?php echo $caller ?>';
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    $("#subscriber").hide();
    openOpentokConnection ('<?php echo $openSessionId ?>');
</script>