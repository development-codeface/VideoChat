<!DOCTYPE html>
<?php  include 'header.php' ;?>
<?php
$open_tokenId=base64_decode(urldecode($openToken));
$user=$this->session->userdata('user_id');?>
<input type='text' name="uid" id="uid" value='<?php echo $user; ?>' hidden >
<section class="pubsec min8">
<div class="container">
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-8">






		<?php
		if($feeds == null){
?>
											<center><h2>	<b><p>	<?php echo "This notification not available."?> </p>	</b>  </h2>  </center>
										  <br>
<?php }
else
{	

												
												foreach($feeds as $fd)
{ 

?>
										
											<div class="post-bar" id="as">
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

	//function time_ago_in_php($timestamp){
  
  date_default_timezone_set("Asia/Kolkata");         
  $time_ago        = strtotime($timestamp);
  $current_time    = time();
  $time_difference = $current_time - $time_ago;
  $seconds         = $time_difference;
  
  $minutes = round($seconds / 60); // value 60 is seconds  
  $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
  $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
  $weeks   = round($seconds / 604800); // 7*24*60*60;  
  $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
  $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
                
  if ($seconds <= 60){

   $ti= "Just Now";

  } else if ($minutes <= 60){

    if ($minutes == 1){

      $ti= "one minute ago";

    } else {

      $ti= "$minutes minutes ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      $ti= "an hour ago";

    } else {

      $ti= "$hours hrs ago";

    }

  } else if ($days <= 7){

    if ($days == 1){

     $ti= "yesterday";

    } else {

      $ti= "$days days ago";

    }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      $ti= "a week ago";

    } else {

      $ti= "$weeks weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      $ti= "a month ago";

    } else {

      $ti= "$months months ago";

    }

  } else {
    
    if ($years == 1){

      $ti="one year ago";

    } else {

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
            <h3 class="ayu">Are you sure to hide this post?</h3>

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
																<img src="<?php echo $fd->linkimage ?>"/ target="blank" class="image-responsive imgfeed"> 
															</div>
														<?php } }?>
														
														<?php if(strlen($fd->linktitle)>0){?>
															<div class="linktitle">
																<a href="<?php echo $fd->linkUrl ?>" target="blank" ><p><?php echo $fd->linktitle ?>"></p></a> 
															</div>
															
														<?php } ?>

														<?php if(strlen($fd->linkdescription)> 0){?>
															<div class="link">
															<a href="<?php echo $fd->linkUrl ?>" target="blank"><p><?php echo $fd->linkdescription ?></p></a> 
															</div>
														<?php } ?>

												<?php } else {
													if(strlen($fd->image_name) > 0){ ?>
															<div class="feedImage">
																<img src="../../uploads/status/<?php echo $fd->image_name ?>" class="image-responsive imgfeed"> 
															</div>
												<?php } }?>	
													
													<div class="clearfix"></div>
												<p>	<a href="<?php echo $fd->linkUrl ?>" target="blank" class="feedp"><?php echo $fd->feeds;?> </a></p>
										      <br>
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
		
		
						
	<?php }} ?>
							
						
					<div class="clearfix"></div>















</div>
</div>
</div>
</section>
<?php
include 'footer.php';?>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
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
		url: "../edit_data",
		
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js">
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





<script >

var i=1;
var j=1;
    $(window).scroll(function () {
		
		
        if ($(document).height() <= $(window).scrollTop() + $(window).height()) {
            var fi=i*2;
			var la=(i+1)*2;
		//	alert(fi);	alert(la);
		

  $.ajax({
            type: "POST",
            url: "../user/profile_limit",
           data:{fi:fi,la:la},
            dataType:"text", 
            success: function(result){
				//alert(result);
				if(result.length > 0 ){
					$('#postcontainer').append(result);
				}
			
            //$("#feedResult").html(r); 
            }
          }
                );









		i++;
        }
		
    });
</script>


