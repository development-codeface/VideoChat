<?php

include 'header.php' ;
$open_tokenId=base64_decode(urldecode($openToken));?>	
<script src="https://static.opentok.com/v2/js/opentok.js"></script>	
		<section class="cover-sec">
		<?php if($mydata['cover_photo']!=""){?>
			<img src="<?php echo base_url() .'uploads/cover_photo/'.$mydata['cover_photo'] ;?>" alt="">
		<?php }else{
			?>
			<img src="<?php echo base_url(); ?>assets/images/resources/cover-img.jpg" alt="">
		<?php }?>
			<a href="#" title="" data-toggle="modal" data-target="#myModal12"><i class="fa fa-camera"><input type="hidden"></i> Change Image</a>
		</section>


		<main>
			<div class="main-section min8">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">

									<div class="user_profile">
										<div class="user-pro-img company-upv">


										  <?php if($mydata['profile_pic']!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$mydata['profile_pic'] ;?>" alt="">
											<?php }
											else{?>
											<?php if($user['gender']==1)
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
										
										
											
											<a href="#" title="" data-toggle="modal" data-target="#myModal11"><i class="fa fa-camera"></i></a>
											<ul class="flw-status">
												<li>
													<span> <?php  echo $mydata['full_name'] ;?></span>
												
												</li>
	
											</ul>

										
										</div><!--user-pro-img end-->	
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>People Viewed Profile</h3>
											
										</div><!--sd-title end-->
										<div class="suggestions-list">
										
										<?php if(!empty($profileViewer)){
											$i=1;
											foreach($profileViewer as $frq){?>
										<?php if($frq->user_id!=$this->session->userdata('user_id')){?>
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
											
											<div class="sgt-text">
													<h4><?php echo $frq->full_name ;?>
													
												</div></a>
													<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
												<span> <i class="fa fa-eye enqclqq" aria-hidden="true" ></i></span></a>
											</div>
											<?php }}}
										else{ ?>
						
						<!--<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>---><?php }?>
						
											
											
											
											
											
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-9">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<!--h3><!?php  echo $mydata['full_name'];?></h3-->
										<div class="star-descp">
										
											
										</div><!--star-descp end-->
										<div class="tab-feed st2">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<i class="fa fa-user" aria-hidden="true"></i>
														<span>Feed</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
														<span>Info</span>
													</a>
												</li>
												<li data-tab="portfolio-dd" >
													<a href="#" title="">
														<i class="fa fa-camera" aria-hidden="true"></i>
														<span>Photos</span>
													</a>
												</li>
													<li data-tab="my-frd">
													<a href="#" title="">
														<i class="fa fa-users" aria-hidden="true"></i>
														<span>My Friend Request</span>
													</a>
												</li>
												<li data-tab="my-frd-list">
													<a href="#" title="">
														<i class="fa fa-address-card col-sdd" aria-hidden="true"></i>
														<span>My Friend list</span>
													</a>
												</li>	
												<li data-tab="my-str-list">
													<a href="#" title="">
														<i class="fa fa-address-card col-sdd" aria-hidden="true"></i>
														<span>Stranger Friend list</span>
													</a>
												</li>
												<!--li data-tab="payment-dd">
													<a href="#" title="">
														<i class="fa fa-money" aria-hidden="true"></i>
														<span>Payment</span>
													</a>
												</li-->
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section"><?php 
										
										if(!empty($feeds)){
												foreach($feeds as $fd){?>
													<div class="post-bar">
													<div class="post_topbar">
													<div class="usy-dt"><?php 
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
															<h3><?php  echo $fd->full_name ;?></h3>
															<span>
1 hr</span> &nbsp;<span><i class="fa fa-flag" aria-hidden="true"></i> <?php echo $fd->country;?></span>
														</div>
													</div>
													<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
												<ul class="ed-options">
													<?php if($fd->user_id==$this->session->userdata('user_id')){?>
															<li><a href="#" title="" class="ed-box-open" onclick="getFeeds(<?php echo $fd->id;?>)">Edit Post</a></li>
														<li><a href="<?php echo base_url()."index.php/Profile/deleteFeed/".$fd->id;?>" onclick="return confirm('Are you sure?')">Delete Post</a></li>
													<?php } ?>
													</ul>
												</div>
												</div>
												
												<div class="job_descp">
													
													
													
													<p><?php echo $fd->feeds;?>..... </p>
													<br>
											
													
										
												</div>
				
												<div class="like_bt">
													<ul class="like-com">
														<li>
															<i class="la la-heart"></i> 
															<img src="<?php echo base_url(); ?>assets/images/liked-img.png" alt="">
															<?php if($fd->no_likes!=0){?>
															<span><?php echo $fd->no_likes;?></span><?php }?>
														</li> 
														
													</ul>
												
												</div>
		</div><?php } }else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>-->
										<?php }?>
						
		
											
											
											
										
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
									<div class="user-profile-ov st2">
										<h3>
									<i class="fa fa-user-circle-o" aria-hidden="true"></i> Basic Information
										
										<a href="#" title="" class="exp-bx-open pull-right"><i class="fa fa-pencil-square-o"></i> <span class="ed_bt"> Edit</span></a>
										
										</h3>
									
									
									
									<table class="tabl-cus">

  <tr>
    <td class="pers">Name</td>
    <td><i id="full_names"> <?php  echo $mydata['full_name'];?></i></td>
   
  </tr>
  <tr>
    <td class="pers">Nick Name</td>
    <td> <i id="nick_names"> <?php  echo $mydata['nick_name'];?></i></td>
  </tr>
    <tr>
    <td class="pers">Gender</td>
    <td><i id="genders"> <?php if($mydata['gen']==1){?>Male<?php }else {?> Female <?php }?></i></td>
  </tr>
     <tr>
    <td class="pers">Date of birth</td>
    <td><i id="dobs"> <?php  echo $mydata['birth'];?></i></td>
  </tr>
    <tr class="no_br">
    <td>Private /  Public</td>
    <td><i id="visib"><?php if($mydata['visibility']=='true'){?>
											   Public
												
											   <?php }else{
												   ?>Private
											   <?php }?>  </i></td>
  </tr>

</table>

										
										
											<!--<label class="switch swtlastm">
											<input type="checkbox" checked>
											   <?php if($mydata['birth']=='true'){?>
											   Public
												<input type="checkbox" checked>
											   <?php }else{
												   ?><input type="checkbox">
											   <?php }?> 
												<span class="slider round"></span>
											</label>-->
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3> <i class="fa fa-map-marker" aria-hidden="true"></i> Location  <a href="#" title="" class="lct-box-open pull-right"><i class="fa fa-pencil-square-o"></i> <span class="ed_bt"> Edit</span></a></h3>
											
											
											
											<h4 id="country_ids"><?php  echo $mydata['country'];?></h4>
											
										</div><!--user-age-ov end-->
										
										
										
										
										
											<div class="user-profile-ov st2">
									<h3> <i class="fa fa-heart" aria-hidden="true"></i> Age  <a href="#" title="" class="ed-box-open pull-right"><i class="fa fa-pencil-square-o"></i> <span class="ed_bt"> Edit</span></a> </h3>
									
									
																				
																				<table class="tabl-cus">

											  <tr>
												<td class="pers">Age</td>
												<td><i id="age"> <?php  echo $age;?></i></td>
											  
											  
																							
											  </tr>
											 
											  
											</table>
											<ul>
											<?php if($mydata['age_hide']==1)
											{
												?>
											
												<li ><a href="#" title="" id="age_ar"><?php echo "Public" ;?></a></li>
												<?php
											}
												else
												{
													?>
													<li ><a href="#" title="" id="age_ar"><?php echo "Private" ;?></a></li>
												<?php
												} ?>
												
											</ul>

										
										
										</div>
										
										
										
										
										<div class="user-profile-ov">
											<h3> <i class="fa fa-pencil" aria-hidden="true"></i> Description  <a href="#" title="" class="overview-open pull-right"><i class="fa fa-pencil-square-o "></i> <span class="ed_bt"> Edit</span></a></h3>
											<p id="descriptions"><?php  echo $mydata['description'];?></p>
										</div><!--user-profile-ov end-->
										
										
									
										<div class="user-profile-ov">
											<h3> <i class="fa fa-heart" aria-hidden="true"></i> Interest  <a href="#" title="" class="skills-open pull-right"><i class="fa fa-pencil-square-o"></i> <span class="ed_bt"> Edit</span></a> </h3>
											<ul>
											<?php if($mydata['interest_area']==1)
											{
												?>
											
												<li ><a href="#" title="" id="Interest_ar"><?php echo "Boy" ;?></a></li>
												<?php
											}
												else
												{
													?>
													<li ><a href="#" title="" id="Interest_ar"><?php echo "Girl" ;?></a></li>
												<?php
												} ?>
												
											</ul>
										</div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
									
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Photos</h3>
 <div class="row">
<div class="">
													
			  <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" id="myimg" name="myimg">

										
												<div class="job_descp">
												<input type ="hidden" name="abc" id="abc" value=<?php echo $mydata['user_id'] ?> >
											
  
    <input name="photopublic" id="photopublic" type="file" >
 
  </div>
</div>
<div class="col-lg-3"><div class="job-status-bar">
												<button type="submit" name="photoup" id="photoup" class="btn btn-success">Upload </button>
												</div></div>
										
												</div>
				
												
												</form>
												<div class="gallery_pf">
		<div class="row">
												<?php $i=1;	foreach( $image as $row )
												{
													if($i<=3)
													{
														$i++;
													?>
												
												 <div class="col-lg-3  thumb containerg">
                                                                <a class="thumbnail" href="<?php echo base_url() .'uploads/photos/'.$row['file_name'] ; ?>" data-lightbox="imgGLR"><img class="img-responsive" border="0" height="300" src="<?php echo base_url() .'uploads/photos/'.$row['file_name'] ; ?>" ></a>
                                                                <div class="middleg">
                                                                    <div class="textg"><a href="" data-toggle="modal" data-id="<?php echo $row['id'];?>" data-target="#myModalhid" class="modalLink"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                                                                </div>
                                                            </div>
													<!--div class="col-lg-4 col-md-4 col-sm-4 col-6">
													    <div class="containerg">
  <img src="<!?php echo base_url() .'uploads/photos/'.$row['file_name'] ; ?>" alt="Avatar" class="imageg" style="width:100%">
  <div class="middleg">
    <div class="textg"><a href="" data-toggle="modal" data-target="#myModalhid"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
  </div>
</div>
													
													</div-->
												
													<?php
												}}
												?>
													</div>
													</div>
				<!--div class="gallery_pf">
				
				
												<div class="row">
												<!?php	foreach( $image as $row )
												{?>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
												
												
												<!?php	print_r($row['id']);?>
													
													
													<div><img src="<!?php echo base_url() .'uploads/photos/'.$row['file_name'] ; ?>" alt=""></div>
													
												</div>
													</div>
												
													<!?php
												}
												?>
													</div>
												</div-->
												
												
												
												<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
											</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php if(!empty($photos)){
			
			foreach($photos as $ph){?>
     
			<div class="col-lg-3  thumb"><a class="thumbnail" href="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" data-lightbox="imgGLR" >
			<img class="img-responsive" border="0" height="300" src="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" width="" /></a>
			</div>
		<?php }}else{ ?>
						
				<!--		<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div> --><?php }?>
						
					

	</div>	
										
									
									<div class="product-feed-tab" id="my-frd">
									<div class="acc-setting">
							  			<h3>My Friend Requests</h3>
							  			<div class="requests-list widt100">
										<?php if(!empty($friendsRequest)){
											$i=1;
											foreach($friendsRequest as $frq){?>
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
							  						<h3><?php  echo $frq->full_name ;?></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="button" class="accept-req" onclick="friendAccept(<?php echo $frq->user_id;?>)">Accept</button></li>
							  							<li><button type="button" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
										<?php }}
							  				
							  				else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div> --><?php }?>
						
							  				
							  				
							  			</div><!--requests-list end-->
							  			<div class="clearfix"></div>
							  		<!--	<div class="success-box alert">
<div class="msg"><i class="fa fa-check" aria-hidden="true"></i> Success &#8211; Your message will goes here</div>

</div>


<div class="error-box alert">
<div class="msg"><i class="fa fa-times" aria-hidden="true"></i> Error &#8211; Message will goes here</div>

</div>
<div class="info-box alert">
<div class="msg"><i class="fa fa-database" aria-hidden="true"></i> Info &#8211; Information message will goes here</div>

</div>-->



							  		</div>
									</div>
										<div class="product-feed-tab" id="my-frd-list">
										<div class="row">
										
										<?php if(!empty($friendList)){
											$i=1;
											foreach($friendList as $frq){?>
										<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info">	
								<?php if( $frq->status==1){?>
								<i class="fa fa-circle msg-online" aria-hidden="true"> <span>Online</span></i><?php }else{?>
								<i class="fa fa-circle msg-off" aria-hidden="true"> <span>Offline</span></i><?php }?>
								<div class="clearfix"></div>
									<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
									 <?php if($frq->profile_pic!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">
											<?php }else{?>
											<img src="<?php echo base_url(); ?>assets/images/resources/pf-icon8.png" alt="">
											<?php }?>
									
									
									</a>
										<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php if($frq->full_name!=""){ echo $frq->full_name ;}else { echo $frq->full_name;}?></a></h3>
									
									<ul>
										<li><a href="#" title="" class="follow msgch"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										
										<li><a href="#" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
			
							</div><!--company_profile_info end-->
						</div>
										<?php }}else{ ?>
						
						<!-- <div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>  --><?php }?>
						
								</div>
									</div>
									<div class="product-feed-tab" id="my-str-list">
										<div class="row">
										
									
								
								</div>
			
							</div><!--company_profile_info end-->
						</div>
									
						<!-- <div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>  -->
						
								</div>
									</div>
									<!--div class="product-feed-tab" id="payment-dd">
										<div class="billing-method">
											<ul>
												<li>
													<h3>Add Billing Method</h3>
													<a href="#" title=""><i class="fa fa-plus-circle"></i></a>
												</li>
												<li>
													<h3>See Activity</h3>
													<a href="#" title="">View All</a>
												</li>
												<li>
													<h3>Total Money</h3>
													<span>$0.00</span>
												</li>
											</ul>
											<div class="lt-sec">
												<img src="images/lt-icon.png" alt="">
												<h4>All your transactions are saved here</h4>
												<a href="#" title="">Click Here</a>
											</div>
										</div>
										<div class="add-billing-method">
											<h3>Add Billing Method</h3>
											<h4><img src="images/dlr-icon.png" alt=""><span>With workwise payment protection , only pay for work delivered.</span></h4>
											<div class="payment_methods">
												<h4>Credit or Debit Cards</h4>
												<form>
													<div class="row">
														<div class="col-lg-12">
															<div class="cc-head">
																<h5>Card Number</h5>
																<ul>
																	<li><img src="images/cc-icon1.png" alt=""></li>
																	<li><img src="images/cc-icon2.png" alt=""></li>
																	<li><img src="images/cc-icon3.png" alt=""></li>
																	<li><img src="images/cc-icon4.png" alt=""></li>
																</ul>
															</div>
															<div class="inpt-field pd-moree">
																<input type="text" name="cc-number" placeholder="">
																<i class="fa fa-credit-card"></i>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>First Name</h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="f-name" placeholder="">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Last Name</h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="l-name" placeholder="">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Expiresons</h5>
															</div>
															<div class="rowwy">
																<div class="row">
																	<div class="col-lg-6 pd-left-none no-pd">
																		<div class="inpt-field">
																			<input type="text" name="f-name" placeholder="">
																		</div>
																	</div>
																	<div class="col-lg-6 pd-right-none no-pd">
																		<div class="inpt-field">
																			<input type="text" name="f-name" placeholder="">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Cvv (Security Code) <i class="fa fa-question-circle"></i></h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="l-name" placeholder="">
															</div>
														</div>
														<div class="col-lg-12">
															<button type="submit">Continue</button>
														</div>
													</div>
												</form>
												<h4>Add Paypal Account</h4>
											</div>
										</div>
									</div-->
								</div><!--main-ws-sec end-->
							</div>
							
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

	<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						
						<li><a href="#" title="">Privacy Policy</a></li>
				
						<li><a href="#" title="">Terms & Conditions</a></li>
						<li><a href="#" title="">Cookies </a></li>
						<li><a href="#" title="">Contact</a></li>
					</ul>
					<p>Copyright 2018 . All rights reserved</p>
				
				</div>
			</div>
		</footer>

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
            <div class="modal-content text-center">
                <div class=" " id="calleeInfo">
				<h4>Abhi Calling</h4>
				</div>

                <div class="modal-body">
                    <button type="button" class="btn answerCall" id='startVideo'>
                        <i class="fa fa-video-camera"></i> Video Call
                    </button>
                    <button type="button" class="btn btn-sm rejectCall" id='rejectCall'>
                        <i class="fa fa-times-circle"></i> Reject Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->
        
        <!--Snackbar -->
        <div id="snackbar"></div>
        <!-- Snackbar -->
 
		
		
		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3><i class="fa fa-pencil" aria-hidden="true"></i> Description</h3>
				<span>5000 character left</span>
				<form method="POST">
					<textarea id="description"><?php echo $mydata['description'];?></textarea>
					<p class="sav_bt">	<button type="button" class="save" id="descriptionsave">Save</button>

				
					 
					</p>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
		</div>
		
		
		

<div class="overview-box" id="about-box">
			<div class="overview-edit">
				<h3>About</h3>
				<form>
					<input type="text" name="subject" placeholder="Name">
					<input type="text" name="subject" placeholder="Nick Name">
					
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->
	<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Basic Information</h3>
				<form method="POST" action="">
					<input type="text" name="full_name" class="form-control" id="full_name" placeholder="Name" value="<?php  echo $mydata['full_name'];?>">
					<input type="text" name="nick_name"  class="form-control" id="nick_name" placeholder="Nick Name" value="<?php  echo $mydata['nick_name'];?>">
					
					<input type="text" id="dob" name="dob" class="form-control" data-masked-input="99/99/9999" placeholder="Date of birth" maxlength="10" value="<?php  echo $mydata['birth'];?>">
					 		<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
												<div class="fgt-sec">
														
														<small class="checkbox-inline"><b >Gender :</b> &nbsp;</small>
													</div><!--fgt-sec end-->
													 <?php   $f="";$m="";if($mydata['gender']==1){ $m="checked";}else{ $f="checked";}?>
													<div class="fgt-sec">
														<input type="radio" name="gender" id="c5" <?php echo $f;?>   value="1">
														<label for="c5">
															<span></span>
														</label>
														<small>Boy &nbsp;</small>
													</div><!--fgt-sec end-->
													<div class="fgt-sec">
														<input type="radio" name="gender" id="c6" <?php echo $m;?>   value="2">
														<label for="c6">
															<span></span>
														</label>
														<small> Girl &nbsp;</small>
													</div><!--fgt-sec end-->
													<div class="fgt-sec">
														<input type="radio" name="gender" id="c7">
														<label for="c7">
															<span></span>
														</label>
														<small> Other</small>
													</div><!--fgt-sec end-->
												</div>
											</div>
					<!--div class="form-group">
					
		  <label class="checkbox-inline"><b>Gender </b> :</label>
		  <!?php   $f="";$m="";if($mydata['gender']==1){ $m="checked";}else{ $f="checked";}?>
		  <label class="checkbox-inline"><input type="radio" name="gender" id="gender" class="rad_bt" <!?php echo $f;?>   value="1" >&nbsp;Female </label>
<label class="checkbox-inline"><input type="radio" name="gender"  id="gender" class="rad_bt" <!?php echo $m;?>   value="2">&nbsp;Male </label>
</div-->

	<div class="clearfix"></div>		

<div class="col-lg-12">
			<p class="sav_bt">	<button type="button" id="basicinfo" class="save" >Save</button>
				
					 
					</p>
					<div class="clearfix"></div>
					
					</div>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h3>
				<form method="POST" action="">
				
				
					<div class="datefm">
					
					<select name="country_id" id="country_id">

               <?php 

            foreach($countries as $row)
            { ?>
			
             <option value="<?php echo $row->c_id ?>"><?php echo $row->country ?></option>
           <?php  }
                  ?>
							
						</select>

					
						
						
						
						
						
					

						
						
						
						
						
						
						
						<i class="fa fa-map-marker"></i>
					</div>
					
					<p class="sav_bt"><button type="button" class="save" id="locationSave" >Save</button></p>
					 
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		
		
		
		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Age privacy</h3>
				
				<form>
				<div class="datefm">
						<select name="age_id" id="age_id">
							 <option value="1">Public</option>
    <option value="2">Private</option>
   
	


							
						</select>
						<i class="fa fa-sort-desc" aria-hidden="true"></i>
					</div>
		
  <p class="sav_bt">	<button type="button" class="save" id="agesave">Save</button>
				
					 
					</p>
					
				
					 
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->
		
		
		<div class="overview-box" id="skills-box">
			<div class="overview-edit sign_in_sec " style="display:block;">
				<h4><i class="fa fa-heart" aria-hidden="true"></i> Interest</h4>
	
				<form>
				<div class="datefm">
						<select name="Interest_id" id="Interest_id">
							 <option value="1">Boy</option>
    <option value="2">Girl</option>
    <option value="3">Other</option>
	


							
						</select>
						<i class="fa fa-sort-desc" aria-hidden="true"></i>
					</div>
		
  <p class="sav_bt">	<button type="button" class="save" id="InterestSave">Save</button>
				
					 
					</p>
					
				
					 
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->
		
		
		
		
		
		
		
		<div class="overview-box" id="age-box">
			<div class="overview-edit sign_in_sec " style="display:block;">
				<h4><i class="fa fa-heart" aria-hidden="true"></i> Interest</h4>
	
				<form>
				<div class="datefm">
						<select name="Interest_id" id="Interest_id">
							 <option value="1">Boy</option>
    <option value="2">Girl</option>
    <option value="3">Other</option>
	


							
						</select>
						<i class="fa fa-sort-desc" aria-hidden="true"></i>
					</div>
		
  <p class="sav_bt">	<button type="button" class="save" id="InterestSave">Save</button>
				
					 
					</p>
					
				
					 
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>Create Portfolio</h3>
				<form>
					<input type="text" name="pf-name" placeholder="Portfolio Name">
					<div class="file-submit">
						<input type="file" name="file">
					</div>
					
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

	</div><!--theme-layout end-->
	
	<div id="myModal11" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
           <h4 class="modal-title fhed">Upload Profile Picture</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <div class="post-bar">
													
												  <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadProfile/'; ?>" id="">
										
												<div class="job_descp">
												<input type ="hidden" name="abc" id="abc" value=<?php echo $mydata['user_id'] ?> >
											<br>
<input  type="file" name="photopro" id="photopro">
										
												</div>
				
												<div class="job-status-bar">
												<button type="submit" name="register" class="btn btn-success">Upload</button>
												</div>
												</form>
		</div>
      </div>
      
    </div>

  </div>
</div>
<style>
.cover-sec img {
    width: 100%;
    height: 396px;
}
</style>
	<div id="myModal12" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title fhed">Upload Cover Photo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <div class=" ">
													
												  <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadCover/'; ?>" id="">
										
												<div class="job_descp">
											<br>	<input type ="hidden" name="abc" id="abc" value=<?php echo $mydata['user_id'] ?> >
<input  type="file" name="photocover" id="photocover">
										
												</div>
				
												<div class="job-status-bar">
												<button type="submit" name="register" class="btn btn-success">Upload </button>
												</div>
												</form>
		</div>
      </div>
      
    </div>

  </div>
</div>
	<div class="modal fade" id="myModalhid" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content mp50">
      
      <div class="modal-body">
     <p class="ays">Are you sure delete image</p>
	  <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-footer">
	  <button type="submit" class="btn btn-success btn-default pull-left"  onclick="deleteimg()" >
        Yes
        </button>
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
       No
        </button>
      
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script>
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $openSessionId;?>";
		var TOKEN = "<?php echo $open_tokenId;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>


  <script>
$(function() {
  var countFiles = 1,
    $body = $('body'),
    typeFileArea = ['txt', 'doc', 'docx', 'ods'],
    coutnTypeFiles = typeFileArea.length;

  //create new element
  $body.on('click', '.files-wr label', function() {
    var wrapFiles = $('.files-wr'),
      newFileInput;

    countFiles = wrapFiles.data('count-files') + 1;
    wrapFiles.data('count-files', countFiles);

    newFileInput = '<div class="one-file"><label for="file-' + countFiles + '">Upload  Photo</label>' +
      '<input type="file" name="file-' + countFiles + '" id="file-' + countFiles + '"><div class="file-item hide-btn">' +
      '<span class="file-name"></span><span class="btn btn-del-file">x</span></div></div>';
    wrapFiles.prepend(newFileInput);
  });

  //show text file and check type file
  $body.on('change', 'input[type="file"]', function() {
    var $this = $(this),
      valText = $this.val(),
      fileName = valText.split(/(\\|\/)/g).pop(),
      fileItem = $this.siblings('.file-item'),
      beginSlice = fileName.lastIndexOf('.') + 1,
      typeFile = fileName.slice(beginSlice);

    fileItem.find('.file-name').text(fileName);
    if (valText != '') {
      fileItem.removeClass('hide-btn');

      for (var i = 0; i < coutnTypeFiles; i++) {

        if (typeFile == typeFileArea[i]) {
          $this.parent().addClass('has-mach');
        }
      }
    } else {
      fileItem.addClass('hide-btn');
    }

    if (!$this.parent().hasClass('has-mach')) {
      $this.parent().addClass('error');
    }
  });

  //remove file
  $body.on('click', '.btn-del-file', function() {
    var elem = $(this).closest('.one-file');
    elem.fadeOut(400);
    setTimeout(function() {
      elem.remove();
    }, 400);
  });
});  </script>
 
<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>
  


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flatpickr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>

<script>

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
$("#editform").validate({
   
    errorPlacement: function(error, element) {
        console.log(element.attr('name'));
        $( error ).insertAfter( element);
    },
    submitHandler: function(form) {

        // do other things for a valid form
        var formData = $("#editform").serialize();
    
        $.ajax({
            type: 'post',
            url:"../Profile/updateFeed",
            data:formData,
            success: function(data){
               setInterval(function(){
                  
                window.location.href="../Profile/myProfile";
                }, 1500);


            }
        });
        return false;
    }
});


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
var selID = "";
$('.modalLink').click(function(){
  var ID=$(this).attr('data-id');
  selID =  ID;


});

function deleteimg() {
   $.ajax({
	      type: "POST",
            url: "../Profile/delete_img",
			
            data:{selID:selID},
			dataType:"text", 
	     	success: function(){
			
			   setInterval(function(){
                  
                window.location.href="../Profile/myProfile";
                }, 1500);
             }                
             }); 				
 
}
</script>

</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>


<!--------------------------------------Form Validation script---------------------------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.22.0/js/jquery.fileupload.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.22.0/js/vendor/jquery.ui.widget.js"></script>

<!--script type="text/javascript" src="<!?php echo base_url(); ?>js/jquery_validation/jquery.validate.js"></script-->
<script type="text/javascript"> 
   $("#myimg").validate({

            rules: {
            photopublic:"required"
		
             },
            messages: {
              
		 photopublic:"Please choose the file"
		   }
    
	   });	
</script>


<script>

$('#Image').fileupload({

               url:site_url+"Profile/postFileUpload",
               dataType: 'json',
               //formData : {_token:token},
               add: function (e, data) {
                   var fileType = data.files[0].name.split('.').pop(), allowdtypes = 'jpg,jpeg,png,gif';


                   if (allowdtypes.indexOf(fileType) < 0) {
                       alert('Sorry,JPG PNG GIF are allowed.');
                       return false;
                   }

                   if( data.files[0]['size'] > 1000000) { //10MB
                       alert('Filesize is too big');
                       return false;
                   }
                   data.submit();
               },progressall: function (e, data) {
                   $("#progress").show();

                   var progress = parseInt(data.loaded / data.total * 100, 10);

                   $('#progress .progress-bar').css('width',progress + '%');
               },
               done: function (e, data) {
                   $.each(data.result.files, function (index, file) {
                       var url = "";

                       if(file.type == "image/jpeg" || file.type == "image/jpg" || file.type == "image/png" || file.type == "image/gif" ){
                           var urlRoute = "{{ asset('data/temp/') }}/";

                           url = "<img src='"+urlRoute+file.name+"' style='max-width: 50px;'/>";
                       }
                       var html = '<tr ><td><a href="#" class="fancybox-button" data-rel="fancybox-button">'+url+'<input type="hidden" name="fileURLs[]" value="'+file.name+'"  /></td><td><a href="javascript:;" class="btn default btn-sm removeImage"  id=""><i class="fa fa-times"></i> Remove </a> </td> </tr>';
                       $('#ImagePrevs').html(html);
                   });

                   $("#progress").hide();
                   var $ImagePrevs = $('#ImagePrevs');

               },


           })




 $( "form#myimg" ).submit(function(e) {

   e.preventDefault();    
    var formData = new FormData(this);

    $.ajax({
		type: "POST",
		url:site_url+"Profile/UploadPhotos",
		data: formData,
		dataType: 'json',

        success: function(data) {
           if(data.status==1){
			    $("#education-box").removeClass("open");
				$(".wrapper").removeClass("overlay");
				location.reload();
			 
              }else{
				$('#Eeror').hide();
      }

    },


  });
  return false;

});









</script>