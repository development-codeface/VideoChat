<?php
include 'header.php';?>
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
										<div class="tab-feed">
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
													<div class="company-title">
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
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
										<div class="row">
										<?php if(!empty($friendList)){
											$i=1;
											foreach($friendList as $frq)
											{
												?>
										<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info">
								<?php if( $frq->status==1){?>
								<i class="fa fa-circle msg-online" aria-hidden="true"> <span>Online</span></i><?php }else{?>
								<i class="fa fa-circle msg-off" aria-hidden="true"> <span>Offline</span></i><?php }?>
								
								<i class="fa fa-eye enqcl" aria-hidden="true" data-toggle="modal" data-target="#myModalen" onclick="setprofile(<?php echo $frq->user_id;?> )"></i>
								<div class="clearfix"></div>
									<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
									<?php if($frq->profile_pic!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">
											<?php }else{?>
											<img src="<?php echo base_url(); ?>assets/images/resources/pf-icon1.png" alt="">
											<?php }?>
									
									
									<a>
									
									<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?> </a></h3>
									
										<ul class="job-dt jobint"><li>Interest :  <a href="" title=""> Girl</a></li></ul>
										<ul>
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" title="" data-id="<?php echo $frq->user_id;?>" class="follow follow_friend msgch"><i class="fa fa-video-camera " aria-hidden="true"></i></a></li>
										
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $frq->user_id ?>" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
									</ul>
												
									<ul>
										<!--<li><a href="" data-toggle="modal" data-target="#myModal" title="" class="follow">&nbsp;Send Request</a></li>-->
									
										
									</ul>
								</div>
								<!-- <a href="profile-view.html" title="" class="view-more-pro">View Profile</a> -->
							</div><!--company_profile_info end-->
						</div>
										<?php }}?>
					
						
						</div>
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
								<div class="row">
								<?php 
								
								if(!empty($friendOnline)){
											$i=1;
											foreach($friendOnline as $frq){?>
									 
							<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info">
								<?php if( $frq->logged_time!=""){?>
								<i class="fa fa-circle msg-online" aria-hidden="true"> <span>Online</span></i><?php }?>
								<i class="fa fa-eye enqcl" aria-hidden="true" data-toggle="modal" data-target="#myModalen" onclick="setprofile(<?php echo $frq->user_id;?> )"></i>
								<div class="clearfix"></div>
									<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
									
									<?php if($frq->profile_pic!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">
											<?php }else{?>
											<img src="<?php echo base_url(); ?>assets/images/resources/pf-icon8.png" alt="">
											<?php }?>
									
									
									</a>
										<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?></a></h3>
										
								<ul class="job-dt jobint"><li>Interest :  <a href="" title=""> Girl</a></li></ul>
										<ul>
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="" class="follow msgch" data-id="<?php $frq->user_id; ?>"><i class="fa fa-video-camera " aria-hidden="true"></i></a></li>
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
			
							</div><!--company_profile_info end-->
						</div>
								<?php }} ?>
						
						
						
						
								</div>
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
								<div class="acc-setting">
							  			<h3>My Friend Requests</h3>
										<div class="requests-list">
										<?php if(!empty($friendsRequest)){
											$i=1;
											foreach($friendsRequest as $frq){?>
										
										
							  				<div class="request-details" id="<?php echo $frq->user_id;?>">
							  					<div class="noty-user-img">
												 <?php if($frq->profile_pic!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">
											<?php }else{?>
											<img src="<?php echo base_url(); ?>assets/images/resources/r-img1.png" alt="">
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
											 
										 } ?>
							  				
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
	}); 
});
</script>
