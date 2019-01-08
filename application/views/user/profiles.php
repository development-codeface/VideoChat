<?php
include 'header.php';
$open_tokenId=base64_decode(urldecode($openToken));
$user=$this->session->userdata('user_id');?>
<input type='text' name="uid" id="uid" value='<?php echo $user; ?>' hidden >
		<section class="companies-info min8">
			<div class="container min800">
				
					
				<div class="companies-list">
					<div class="row">
					<div class="col-lg-12">
					
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<!-- <h3>Profiles</h3> -->
															<div class="company-title">
					<h3> Friend List</h3>
				</div>
										<div class="tab-feed prof">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<i class="fa fa-address-card col-sdd" aria-hidden="true"></i>
														<span>All contacts</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<i class="fa fa-video-camera" aria-hidden="true"></i>
														<span>Online</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<i class="fa fa-users" aria-hidden="true"></i>
														<span>My Friend Request</span>
													</a>
												</li>	
											
											</ul>
										</div><!-- tab-feed end-->
													<div class="comp_rgt">
					<div class="search-bar">
						<form method="post" action="<?php echo base_url(); ?>index.php/Profile/searchFreiend" name="serachfriend" id="serachfriend">
							<input type="text" name="search" id="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div>
				</div>
									</div><!--user-tab-sec end-->
									
<div class="modal fade" id="myModalen" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header viewde">
      
        <h4> VIEW DETAILS</h4>
		<button type="button" class="close bcl" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body modimg">
	  <img src="images/resources/pf-icon1.png" alt="">
        <form role="form">
          <div class="form-group">
          <label class="checkbox-inline"><b>Name</b> : <span id="full_namesf">  </span></label>
          </div>
		 <div class="form-group">
        <label class="checkbox-inline"><b>Nick Name</b>  : <span id="nick_namesf"></span></label>
          </div>
		   <div class="form-group">
		  <label class="checkbox-inline"><b>Date of birth</b> : <span id="dobsf"></span></label>		  
         </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
									<div class="product-feed-tab current" id="feed-dd">
									<h3 class="h3cl">All Friends  </h3>
										<div class="row">
										<?php if(!empty($friendList)){
											$i=1;
											foreach($friendList as $frq)
											{
												//print_r($frq);
												$i=0;
												foreach ( $sessionOnline as $new_arr1 ) {
			 
			 


												
												if(($new_arr1['user_id'])==($frq->user_id))
												{
												
												$i=1;
												}}
												?>
										<div class="col-lg-3 col20">
							<div class="company_profile_info" id="un_<?php echo $frq->user_id;?>">
								<div class="company-up-info">
								<?php 
									
									


												
												if($i==1)
												{
												
									?>
								<i class="fa fa-circle msg-online" aria-hidden="true"> <span>Online</span></i><?php }else{?>
												<i class="fa fa-circle msg-off" aria-hidden="true"> <span>Offline</span></i><?php }?>
								<div class="ed-opts form_wrapper unfr">
                                                    <a title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options unfrhide" data-id="<?php echo $frq->user_id;?>"    style="display: none;">
                                                                                                                            <li><a  title=""><i class="fa fa-user-times " aria-hidden="true"></i> &nbsp; Unfriend</a></li>
                                                        
                                                                                                        </ul>
                                                </div>
								<!--i class="fa fa-eye enqcl" aria-hidden="true" data-toggle="modal" data-target="#myModalen" onclick="setprofile(<?php echo $frq->user_id;?> )"></i-->
								<div class="clearfix"></div>
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
									
									
									<a>
									
									<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?> </a></h3>
									
										<ul></ul>
										<ul>
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" title="" data-id="<?php echo $frq->user_id;?>" class="follow follow_friend msgch"><i class="fa fa-video-camera " aria-hidden="true"></i></a></li>
										
										<!--li><a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li-->
									</ul>
												
									<ul>
										<!--<li><a href="" data-toggle="modal" data-target="#myModal" title="" class="follow">&nbsp;Send Request</a></li>-->
									
										
									</ul>
								</div>
								<!-- <a href="profile-view.html" title="" class="view-more-pro">View Profile</a> -->
							</div><!--company_profile_info end-->
						</div>
											<?php }}
										
											else{
											?>	<div class="alert alert-danger"  >No Result Found !!!</div>
										<?php	}
												
					?>
						
						</div>
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
									<h3 class="h3cl">Online Friends  </h3>
									
								<div class="row">
								<?php 
								
									if(!empty($friendOnline)){
											$i=1;
											foreach($friendOnline as $frq){
													
													
													foreach ( $sessionOnline as $new_arr1 ) {
			 
			 

;
												
												if(($frq->user_id)==($new_arr1['user_id']))
												{
												
												
												?>
									
							<div class="col-lg-3 col20">
							<div class="company_profile_info" id="un_<?php echo $frq->user_id;?>">
								<div class="company-up-info">
								<?php if( $frq->status==1){?>
								<i class="fa fa-circle msg-online" aria-hidden="true"> <span>Online</span></i><?php }?>
								
								<div class="ed-opts form_wrapper unfr">
                                                    <a  title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                     <ul class="ed-options unfrhide" data-id="<?php echo $frq->user_id;?>"    style="display: none;">
                                                                                                                            <li><a  title=""><i class="fa fa-user-times " aria-hidden="true"></i> &nbsp; Unfriend</a></li>
                                                        
                                                                                                        </ul>
                                                </div>
								<!--i class="fa fa-eye enqcl" aria-hidden="true" data-toggle="modal" data-target="#myModalen" onclick="setprofile(<?php echo $frq->user_id;?> )"></i-->
								<div class="clearfix"></div>
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
										<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?></a></h3>
										
								<ul></ul>
										<ul>
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="" class="follow msgch" data-id="<?php $frq->user_id; ?>"><i class="fa fa-video-camera " aria-hidden="true"></i></a></li>
										<!--li><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li-->
									</ul>
								</div>
			
							</div><!--company_profile_info end-->
						</div>
									<?php }} }}
								else{
											?>	
											<div class="col-lg-12">
											<label class="alert alert-danger">No Result found </label>
											</div>
											
											
										<?php	}?>
						
						
						
						
								</div>
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
								<div class="acc-setting">
							  			<h3>My Friend Requests</h3>
										<div class="clearfix"></div>
										<div class="requests-list">
										<?php if(!empty($friendsRequest)){
											$i=1;
											foreach($friendsRequest as $frq){?>
										
										
							  				<div class="request-details" id="imr_<?php echo $frq->user_id;?>">
							  		   <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">			<div class="noty-user-img">
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
							  						
							  					</div>
							  					<div class="request-info">
							  						<h3><?php echo $frq->full_name ;?></h3>
							  						
							  					</div></a>
							  					<div class="accept-feat">
							  						<ul>
							  						  </a>
                   	<li><button type="button" class="accept-req" onclick="friendAccept(<?php echo $frq->user_id;?>)">Accept</button></li>
							  							<li><button type="button" class="close-req" data-id="<?php echo $frq->user_id;?>"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
										<?php 
										 $i++;
										 if($i==6){
											 ?>
										 </div>
										 <div class="requests-list">
										<?php 	} 
											}
											 
										 } 
										 else{
											?>	
											<div class="col-lg-12">
											<label class="alert alert-danger">No Result found </label>
												 </div>
										<?php	}?>
							  			
							  			</div><!--requests-list end-->
							  		</div>
									</div><!--product-feed-tab end-->
									
									
									
									
									<div class="product-feed-tab" id="portfolio-dn">
								<div class="acc-setting">
								<h3 class="h3cl">My Sent Requests </h3>
							  			
										<div class="clearfix"></div>
										<div class="requests-list">
										<?php if(!empty($sendRequest)){
											$i=1;
											foreach($sendRequest as $frq){?>
										
										
							  				<div class="request-details" id="<?php echo $frq->user_id;?>">
							  					<div class="noty-user-img">
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
							  						
							  					</div>
							  					<div class="request-info">
							  						<h3><?php echo $frq->full_name ;?></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="button" class="accept-req" onclick="friendAccept(<?php echo $frq->user_id;?>)">Accept</button></li>
							  							<li><button type="button" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
										<?php 
										 $i++;
										 if($i==6){
											 ?>
										 </div>
										 <div class="requests-list">
										<?php 	} 
											}
											 
										 } 
										 else{
											?>	
											<div class="col-lg-12">
											<label class="alert alert-danger">No Result found </label>
											</div>
										<?php	}?>
							  				 
							  			</div><!--requests-list end-->
							  		</div>
									</div><!--product-feed-tab end-->
									
									
									
									
									
								</div><!--main-ws-sec end-->
							</div>
						
					</div>
				</div><!--companies-list end-->
				
		</section><!--companies-info end-->


	</div><!--theme-layout end-->

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
        <!-- Snackbar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script>
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $openSessionId;?>";
		var TOKEN = "<?php echo $open_tokenId;?>";
		
		//alert(apiKey +' == '+ sessionId);

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
	}); 
	
		$('.unfrhide').click(function() { 
			var uid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: "../Profile/unfriend",
				data:{uid:uid},
				dataType:"text", 
					success: function(result){
					
				
						$("#un_"+uid).remove();
					;
					/*var resultObj = JSON.parse(result)
			 window.setTimeout(function(){location.reload()},1000);*/
				}               
	            
		}); 		
		}); 
	
	
});


 $('.close-req').click(function() { 
	var uid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: "../Profile/reject_request",
				data:{uid:uid},
				dataType:"text", 
					success: function(result){
					
				
						$("#imr_"+uid).remove();

					/*var resultObj = JSON.parse(result)
			 window.setTimeout(function(){location.reload()},1000);*/
				}               
				
		}); }); 
</script>


<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>