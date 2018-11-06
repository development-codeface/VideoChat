<!DOCTYPE html>
<?php  include 'header.php' ;?>
<?php
$open_tokenId=base64_decode(urldecode($openToken));
$user=$this->session->userdata('user_id');?>
<input type='text' name="uid" id="uid" value='<?php echo $user; ?>' hidden >
	
	<section class="pubsec min8">
		<div class="container " >
		<div class="row">
		
		<div class="col-md-8">
			<form method="post" action="<?php echo base_url(); ?>index.php/Profile/postFeed" name="signupform" id="signupform" enctype="multipart/form-data" class="form-horizontal">
												
		<div class="post-bar" style="background:white;">
																						<div class="tab2" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs2" role="tablist">
                    <li role="presentation" class="active"><a href="#" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Write post</a></li>
       <li role="presentation"><a href="#"><i class="fa fa-camera" aria-hidden="true"></i>  <label for="file-4" class="pointpho"><span>Photos</span></label></a></li>
                  
				  <!--<li role="presentation"><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i>Videos</a></li> -->
                </ul>
             
            </div>
					
						
						
						
						
						
						
						
						
					

    	
						
						
						
											
												
												
												
												
						
						
												
												
												
										<input type='text' name="userid" id="userid" value='<?php echo $user; ?>' hidden >
												<div class="job_descp">
													<div class="cp-field">
												<input type="file" name="file-4" id="file-4" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
					
						<label for="file-4" id="abc" name="abc"><span></span></label>
								
												<textarea placeholder="Write something here..." name="feeds" id="feeds" required >
												
												
													
												
												</textarea>
												
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
															
															
														<?php if($fd->gender==1)
											{
												?>
											<img src="<?php echo base_url(); ?>assets/images/resources/malemaleavatar.png" alt="">
											<?php
											}
											else
											{ ?>
												<img src="<?php echo base_url(); ?>assets/images/resources/femalemaleavatar.png" alt="">
										<?php	} ?>
											
											
														
														
														
														
														
														
														
													<?php } else{?>
													<img src="<?php echo base_url() .'uploads/profile_pic/'.$fd->profile_pic ;?>" alt="">
														<?php }?>
														<div class="usy-name">
														<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$fd->user_id;?>">	<h3><?php  
														echo $fd->full_name ; ?></h3></a>
															<span>
															
															
															
														
<?php
 

$timestamp=$fd->created_at;
list($date,$time)=explode(' ',$timestamp);
//echo $time;

    $time_ago = strtotime($fd->created_at);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        $ti= "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
           $ti= "one minute ago";
        }
        else{
            $ti= "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
          $ti= "an hour ago";
        }else{
           $ti= "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            $ti= "yesterday";
        }else{
           $ti= "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            $ti= "a week ago";
        }else{
            $ti= "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            $ti= "a month ago";
        }else{
            $ti= "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
           $ti= "one year ago";
        }else{
            $ti= "$years years ago";
        }
    }

?>						
															
															
															
															
															
                                                             <i class="fa fa-clock-o" aria-hidden="true"></i>  <?php  echo  $ti;?></span> &nbsp;<span>
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
														<!--li><a href="<!?php echo base_url()."index.php/Profile/hideFeed/".$fd->id.'/'.$fd->user_id;?>" onclick="return confirm('Are you sure?')" class="exp-bx-open">Hide Post</a></li-->
														<?php $fd->hide_user=$this->session->userdata('user_id'); ?>
															<li><a href=""  class="exp-bx-open">Hide Post</a></li>
														
													<?php }?>
													</ul>
												</div>
												</div>
										
																				<div class="overview-box" id="education-box">
								<div class="overview-edit">
								<h3>Edit Feed</h3>

								<form method="POST" action="<?php echo base_url(); ?>index.php/Profile/updateFeed" name="editform" id="editform">
								<input type="hidden" name="feed-id"  id="feed-id" />
								<textarea id="feed-edit" name="feed-edit"  ></textarea>
								<button type="submit" class="save" id="feedsave" name="feedsave"  >Save</button>
								<a href="<?php echo base_url()."index.php/User/Profile/"?>">	<button type="button" class="cancel">Cancel</button></a>
								</form>
								<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
								</div><!--overview-edit end-->
								</div><!--overview-box end-->
								<div class="overview-box fade" id="experience-box">
										<div class="overview-edit">
            <h3 class="ayu">Are you hide this post !</h3>

            <form name="hideform" id="hideform" class="">
               	<?php $fd->hide_user=$this->session->userdata('user_id'); ?>
				   <button type="button" class="btn btn-danger btn-success padc frc "  data-id="<?php echo $fd->id;?>" style="color:white;"><a href="" style="color:white;">Yes  </a></button>
				   <button type="submit" class="btn btn-danger btn-default  " data-dismiss="modal">   No </button>
                <!--a href="<!?php echo base_url()." index.php/User/Profile/ "?>">	<button type="button" class="cancel">Cancel</button></a-->
				</form>
				<a href="# " title=" " class="close-box "><i class="la la-close "></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->	
		
					
												<div class="job_descp">
												<?php if($fd->islink){
													   if(strlen($fd->videoEmbeded) > 0){?>
															<div class="feedVideo videmp">
																<?php echo $fd->videoEmbeded ?> </iframe></div>	
													   <?php }else{
														   if(strlen($fd->linkimage) > 0){ ?>
															<div class="feedImage">
																<img src="<?php echo $fd->linkimage ?>"/ class="image-responsive imgfeed"> 
															</div>
														<?php } }?>
														
														<?php if(strlen($fd->linktitle)>0){?>
															<div class="linktitle">
																<a href="<?php echo $fd->linkUrl ?>"><p><?php echo $fd->linktitle ?> </p></a> 
															</div>
														<?php } ?>

														<?php if(strlen($fd->linkdescription)> 0){?>
															<div class="link">
															<a href="<?php echo $fd->linkUrl ?>"><p><?php echo $fd->linkdescription ?></p></a> 
															</div>
														<?php } ?>

												<?php } else {
													if(strlen($fd->image_name) > 0){ ?>
															<div class="feedImage">
																<img src="../../uploads/status/<?php echo $fd->image_name ?>" class="image-responsive imgfeed"> 
															</div>
												<?php } }?>	
													
													<p  class="feedp"><?php echo $fd->feeds;?> </p>
										
												</div>
				
												
														<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<input type='text' name="fid" id="fid" value='<?php echo $fd->user_id; ?>' hidden >
													
													
														<a href="javascript:void(0)" onclick="setLike(<?php echo $fd->id;?>)"><i class="la la-heart heartr"></i> </a>
													
															<img src="<?php echo base_url(); ?>assets/images/liked-img.png" alt="">
															<?php if($fd->no_likes!=0){?>
															<span id="<?php echo $fd->id;?>"><?php echo $fd->no_likes;?></span><?php }else {?>
															<span id="<?php echo $fd->id;?>" style="display:none"></span><?php 
															}?>
														</li> 
														
													</ul>
												
												</div>
		</div>
		
		
		<?php } }else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>--><?php }?>
						
						
					<div class="clearfix"></div>
	<!--ul class="pagination modal-5" style="    position: fixed;
    bottom: 97px;
    margin-top: -21px;">
  <li><a href="#" class="prev fa fa-arrow-left"> </a></li>
  <li> <a href="#"  class="active">1</a></li>
  <li> <a href="#">2</a></li>
  <li> <a href="#">3</a></li>
  <li> <a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li> <a href="#">6</a></li>
  <li> <a href="#">7</a></li>
  <li> <a href="#">8</a></li>
  <li> <a href="#">9</a></li>
  <li> <a href="#">10</a></li>
  <li> <a href="#">11</a></li>
  <li> <a href="#">12</a></li>
  <li> <a href="#">13</a></li>
  <li> <a href="#">14</a></li>
  <li> <a href="#">15</a></li>
 
  <li><a href="#" class="next fa fa-arrow-right"></a></li>
</ul-->
										
										
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
													<span class="fa fa-circle msg-topaa"></span>
												<div class="sgt-text">
												
												
													<h4><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?></a></h4>
													
													
												</div>
												<span>
												<a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" data-username=' <?php echo $frq->full_name;?>'  data-id="<?php echo $frq->user_id;?>"  class="follow btnChat "><i class="fa fa-comments-o chatq" aria-hidden="true"></i></a>
												<a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" title="" data-id="<?php echo $frq->user_id;?>" class="follow follow_friend"><i class="fa fa-video-camera cmsgq" aria-hidden="true"></i></i></a>
												
												</span>
											</div>
										<?php }}else{ ?>
						
						<div class="col-lg-12">
						<div class="alert alert-danger">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No Online Friends; </div>

										</div>
										</div>
										<?php }?>
											
										
										</div><!--suggestions-list end-->
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
           
    </div> 
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>

<script type="text/javascript" >
	var APIKEY 		= "<?php echo $apiKey ?>";
	var SESSIONID 	= "<?php echo $openSessionId ?>";
	var TOKEN     	= "<?php echo $open_tokenId ?>";
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
						
						}               
				}); 				
		}); 
		$('.btnChat').click(function() { 
			var uid =$(this).data('id'); 
			$.ajax({
				type: "POST",
					url: "../User/fetch_data",
					
					data:{uid:uid},
					dataType:"text", 
					success: function(result){
						var resultObj = JSON.parse(result)
					//alert(resultObj.sessionId+""+resultObj.tokenId);
				}               
			}); 				
		}); 
	});

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
function getFeeds(intValue) {
 	var val=intValue;
	$.ajax({
		type: "POST",
		url: "../Profile/edit_data",
		
		data:{val:val},
		dataType:"text", 
		success: function(result){
		var resultObjt = JSON.parse(result)
			
			$("#feed-edit").val(resultObjt.feed); 
			$("#feed-id").val(resultObjt.feedid);
			
			}                
	}); 				
}
  $('.frc').click(function() { 
	var fid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: "../Profile/hideFeed",
				data:{fid:fid},
				dataType:"text", 
				success: function(result){
					
				
					
				}               
		}); 		
			             
				
		}); 

</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script> -->
<script>
    normalConnection();
</script>

	<script>
$(document).ready(function(){
    $(window).unload(function(){
        alert("Goodbye!");
    });
});
</script>
