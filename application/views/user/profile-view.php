<?php
include 'header.php' ;?>	


<script src="https://static.opentok.com/v2/js/opentok.js"></script>	
		<section class="cover-sec">
		<?php if($mydata['cover_photo']!=""){?>
			<img src="<?php echo base_url() .'uploads/cover_photo/'.$mydata['cover_photo'] ;?>" alt="">
		<?php }else{
			?>
			<img src="<?php echo base_url(); ?>assets/images/resources/cover-img.jpg" alt="">
		<?php }?>
			
		</section>


		<main>
			<div class="main-section min8">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
										  <?php if($mydata['profile_pic']!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$mydata['profile_pic'] ;?>" alt="">
											<?php }else{?>
											
											
												
											<?php if($mydata['gender']==1)
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
										<ul class="flw-status">
												<li>
													<span> <?php if($mydata['nick_name']!=""){ echo $mydata['nick_name'] ;}else { echo $mydata['full_name'];}?></span>
												
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
										
											<div class="suggestion-usd">
											
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
													<h4><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?></a></h4>
													
												</div>
												<a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
									
												<span><i class="fa fa-video-camera" aria-hidden="true">   </i></span></a>
											</div>
										<?php }}?>
											
											
											
											
											
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-9">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<!--h3> <!?php if($mydata['nick_name']!=""){ echo $mydata['nick_name'] ;}else { echo $mydata['full_name'];}?></h3-->
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
													
												<li data-tab="my-frd-list">
													<a href="#" title="">
														<i class="fa fa-address-card col-sdd" aria-hidden="true"></i>
														<span>Friends list</span>
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
										<div class="posts-section">
										<?php 
										
										if(!empty($feeds)){
										foreach($feeds as $fd){?>
											<div class="post-bar">
													<div class="post_topbar">
													<div class="usy-dt">
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
														<div class="usy-name">
															<h3><?php if($fd->full_name!=""){ echo $fd->full_name ;}else { echo $fd->nick_name;}?></h3>
															<span>
1 hr</span> &nbsp;<span><i class="fa fa-flag" aria-hidden="true"></i> <?php echo $fd->country_id;?></span>
														</div>
													</div>
													<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Delete Post</a></li>
													</ul>
												</div>
												</div>
												
												<div class="job_descp">
													
													
													
													<p><?php echo $fd->feeds;?>..... </p>
										
												</div>
				
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<i class="la la-heart heartr"></i> 
															<img src="<?php echo base_url(); ?>assets/images/liked-img.png" alt="">
															<?php if($fd->no_likes!=0){?>
															<span><?php echo $fd->no_likes;?></span><?php }?>
														</li> 
														
													</ul>
												
												</div>
		</div><?php } }?>
										
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
									<div class="user-profile-ov st2">
									
											<h3>Basic Information</h3>
											<h4>Name : <i id="full_names"> <?php  echo $mydata['full_name'];?></i></h4>
											<h4>Nick Name : <i id="nick_names"> <?php  echo $mydata['nick_name'];?></i></h4>
											
											<h4>Gender : <i id="genders"> <?php if($mydata['gender']==1){?>Female<?php }else {?> Male <?php }?></i></h4>
											<h4>Date of birth : <i id="dobs"> <?php  echo $mydata['dob'];?></i></h4>
											<h4>private /  public:<i id="visib"><?php if($mydata['visibility']=='true'){?>
											   Public
												
											   <?php }else{
												   ?>Private
											   <?php }?>  </i></h4>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Location</h3>
											<h4 id="country_ids"><?php  echo $mydata['country_id'];?></h4>
											<p id="addres"> <?php  echo $mydata['address'];?></p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Overview</h3>
											<p id="descriptions"><?php  echo $mydata['description'];?></p>
										</div><!--user-profile-ov end-->
										
										
									
										<div class="user-profile-ov">
											<h3>Interest</h3>
											<ul>
												<li ><a href="#" title="" id="Interest_ar"><?php echo $mydata['interest_area'] ;?></a></li>
											</ul>
										</div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
									
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Photos</h3>
									 <div class="row">

     
			<?php if(!empty($photos)){
			foreach($photos as $ph){?>
     
			<div class="col-lg-3  thumb"><a class="thumbnail" href="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" data-lightbox="imgGLR" >
			<img class="img-responsive" border="0" height="300" src="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" width="" /></a>
			</div>
		<?php }}else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>-->
										<?php }?>		

	</div>	
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
									
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
										<?php }}?>
							  				
							  				
							  				
							  				
							  			</div><!--requests-list end-->
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
											
										
									
									
									</a>
										<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name;?></a></h3>
									
									<ul>
										<li><a href="#" title="" class="follow msgch"><i class="fa fa-video-camera " aria-hidden="true"></i></a></li>
										
										<li><a href="#" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
			
							</div><!--company_profile_info end-->
						</div>
										<?php }} ?>
						
						
						
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

		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Overview</h3>
				<span>5000 character left</span>
				<form method="POST">
					<textarea id="description"><?php echo $mydata['description'];?></textarea>
					<button type="button" class="save" id="descriptionsave">Save</button>
					<button type="button" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

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
				<h3>Basic Information</h3>
				<form method="POST" ACTION="">
					<input type="text" name="full_name" id="full_name" placeholder="Name" value="<?php  echo $mydata['full_name'];?>">
					<input type="text" name="nick_name" id="nick_name" placeholder="Nick Name" value="<?php  echo $mydata['nick_name'];?>">
					<input type="date" name="dob"  id="dob" placeholder="Date of birth" value="<?php  echo $mydata['dob'];?>">
					<div class="form-group">
					
		  <label class="checkbox-inline"><b>Gender </b> :</label>
		  <?php   $f="";$m="";if($mydata['gender']==1){ $m="checked";}else{ $f="checked";}?>
		  <label class="checkbox-inline"><input type="radio" name="gender" id="gender" <?php echo $f;?> style=" width: 15px;
    height: 15px;" value="1" >&nbsp;Female </label>
<label class="checkbox-inline"><input type="radio" name="gender"  id="gender" <?php echo $m;?> style="width: 15px;
    height: 15px;"  value="2">&nbsp;Male </label>
</div>
<div class="form-group">
<label for="pwd">private /  public:</label>
<label class="switch swtlastm">
  <input type="checkbox" name="visibility"  id="visibility">
  <span class="slider round"></span>
</label>
</div>
					<button type="button" id="basicinfo" class="save" >Save</button>
				
					<button type="button" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Education</h3>
				<form>
					<input type="text" name="school" placeholder="School / University">
					<div class="datepicky">
						<div class="row">
							<div class="col-lg-6 no-left-pd">
								<div class="datefm">
									<input type="text" name="from" placeholder="From" class="datepicker">	
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-lg-6 no-righ-pd">
								<div class="datefm">
									<input type="text" name="to" placeholder="To" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
					</div>
					<input type="text" name="degree" placeholder="Degree">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select name="country_id" id="country_id">
							<option>Country</option>
							<option value="India">India</option>
							<option value="pakistan">Pakistan</option>
							<option value="England">England</option>
							<option value="China">China</option>
							<option value="UAE">UAE</option>
							<option value="United Sates">United Sates</option>
							
						</select>
						<i class="fa fa-globe"></i>
					</div>
					<div class="datefm">
						<input type="text" name="address"  id="address" placeholder="locations" >	
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="button" class="save" id="locationSave" >Save</button>
					<button type="button" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="skills-box">
			<div class="overview-edit">
				<h3>Interest</h3>
				<ul>
					<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
				</ul>
				<form>
					<input type="text" name="skills" placeholder="Skills">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>

<script>
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $sessionId;?>";
		var TOKEN = "<?php echo $token;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>

<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flatpickr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>