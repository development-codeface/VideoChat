<?php
include 'header.php' ;?>	
	<script src="https://static.opentok.com/v2/js/opentok.js"></script>	
	<section class="pubsec">
		<div class="container min800" >
		<div class="row">
		
		<div class="col-md-8">
		
		<div class="post-bar">
													
												<form method="post" action="<?php echo base_url(); ?>index.php/Profile/postFeed" name="signupform" id="signupform">
										
												<div class="job_descp">
													<div class="cp-field">
												
												<textarea placeholder="Write something here..." name="feeds" id="feeds" required ></textarea>
												
											</div>
										
												</div>
				
												<div class="job-status-bar">
												<button type="submit" name="register" class="btn btn-success">post</button>
												</div>
												</form>
		</div>
		<?php  if(!empty($feeds)){
			foreach($feeds as $fd){?>
		<div class="post-bar">
													<div class="post_topbar">
													<div class="usy-dt">
														<?php 
															if($fd->profile_pic==""){?>
														<img src="<?php echo base_url(); ?>assets/images/resources/user.png" alt="">
													<?php } else{?>
													<img src="<?php echo base_url() .'uploads/profile_pic/'.$fd->profile_pic ;?>" alt="">
														<?php }?>
														<div class="usy-name">
															<h3><?php if($fd->full_name!=""){ echo $fd->full_name ;}else { echo $fd->nick_name;}?></h3>
															<span>
1 hr</span> &nbsp;<span><i class="fa fa-flag" aria-hidden="true"></i> <?php echo $fd->country_id;?></span>
														</div>
													</div>
													<div class="ed-opts form_wrapper"  >
													<a href="#" title=""  class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													
													
													
													
													
													
													
													
													
													
													<ul class="ed-options" id="myModal">
															<?php if($fd->user_id==$this->session->userdata('user_id')){?>
															<li><a href="#" title="" class="ed-box-open" onclick="getFeeds(<?php echo $fd->id;?>)">Edit Post</a></li>
														<li><a href="<?php echo base_url()."index.php/Profile/deleteFeed/".$fd->id;?>" onclick="return confirm('Are you sure?')">Delete Post</a></li>
													<?php } else{
														?>
														<li><a href="<?php echo base_url()."index.php/Profile/hideFeed/".$fd->id;?>" onclick="return confirm('Are you sure?')">Hide Post</a></li>
													<?php }?>
													</ul>
												</div>
												</div>
												
												<div class="job_descp">
													
													
													
													<p><?php echo $fd->feeds;?>..... </p>
										
												</div>
				
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
														<?php if($fd->user_id==$this->session->userdata('user_id')){?>
														<i class="la la-heart "></i> <?php }else{?>
														<a href="javascript:void(0)" onclick="setLike(<?php echo $fd->id;?>)"><i class="la la-heart heartr"></i> </a>
														<?php }?>
															<img src="<?php echo base_url(); ?>assets/images/liked-img.png" alt="">
															<?php if($fd->no_likes!=0){?>
															<span id="<?php echo $fd->id;?>"><?php echo $fd->no_likes;?></span><?php }else {?>
															<span id="<?php echo $fd->id;?>" style="display:none"></span><?php 
															}?>
														</li> 
														
													</ul>
												
												</div>
		</div><?php } }else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>--><?php }?>
						
											
										
		</div>
		<div class="col-md-4">
		<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Online Friends</h3>
											
										</div><!--sd-title end-->
										<div class="suggestions-list">
										<?php if(!empty($friendOnline)){
											$i=1;
											foreach($friendOnline as $frq){?>
											<div class="suggestion-usd">
										       <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
												<img src="<?php echo base_url(); ?>assets/images/resources/s1.png" alt=""></a>
													<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
													<h4><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?></a></h4>
													<button class="btnChat" data-username=' <?php echo $frq->full_name;?>'>chat</button>
													
												</div>
												<span><a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" title="" data-id="<?php echo $frq->user_id;?>" class="follow follow_friend"><i class="fa fa-video-camera" aria-hidden="true"></i></i></a>
												
												</span>
											</div>
										<?php }}else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>--><?php }?>
						
											
											
											
											
										
										</div><!--suggestions-list end-->
									</div>
		</div>
		</div>
		</div>
		</section>
		
		
		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Edit Feed</h3>
				
				<form method="POST">
				<input type="hidden" name="feed-id"  id="feed-id" />
					<textarea id="feed-edit" name="feed-edit"></textarea>
					<button type="button" class="save" id="feedsave" name="feededit">Save</button>
					<button type="button" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->
<!-- testing -->
<script>
	
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
            <div class="modal-content">
                <div class="modal-header" id="calleeInfo"></div>

                <div class="modal-body text-center">
                    <button type="button" class="btn btn-success btn-sm answerCall" id='startAudio'>
                        <i class="fa fa-phone"></i> Audio Call
                    </button>
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
           
    </div> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/chatjs/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/chatjs/dashboard.js"></script>   
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/chatjs/datingApp.js"></script>
    <audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
    <audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
</div>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" >
var APIKEY 		= "";
var SESSIONID 	= "";
var TOKEN     	= "";
$(document).ready(function() {	
 $('.follow_friend').click(function() { 
     var uid =$(this).data('id'); 
    $.ajax({
	      type: "POST",
            url: "../Auth/fetch_data",
            data:{uid:uid},
			dataType:"text", 
			success: function(result){
				var resultObj = JSON.parse(result)
              //  alert(resultObj.sessionId+""+resultObj.tokenId);
            }               
        }); 				
		
		
		
		



    }); });
	
	
	
	



</script>

	