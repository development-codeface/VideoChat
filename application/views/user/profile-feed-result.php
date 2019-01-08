
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
															<a href="<?php echo $fd->linkUrl ?>" target="blank"><p><?php echo $fd->linkdescription ?></p></a> 
															</div>
														<?php } ?>

												<?php } ?>
													
													
													<p  class="feedp"><?php echo $fd->feeds;?>..... </p>
										
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
						
						<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div><?php }?>
						