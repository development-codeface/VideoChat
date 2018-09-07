<?php
include 'header.php' ;?>	
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
										<div class="user-pro-img">
										  <?php if($mydata['profile_pic']!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$mydata['profile_pic'] ;?>" alt="">
											<?php }else{?>
											<img src="<?php echo base_url(); ?>assets/images/resources/user-pro-img.png" alt="">
											<?php }?>
										
										
											
											<a href="#" title="" data-toggle="modal" data-target="#myModal11"><i class="fa fa-camera"></i></a>
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
											<img src="<?php echo base_url(); ?>assets/images/resources/s1.png" alt="">
											<?php }?>
											
											<div class="sgt-text">
													<h4><?php if($frq->full_name!=""){ echo $frq->full_name ;}else { echo $frq->nick_name;}?>
													
												</div>
												<span><i class="fa fa-video-camera" aria-hidden="true"></i></span>
											</div>
										<?php }}
										else{ ?>
						
						<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div><?php }?>
						
											
											
											
											
											
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
										
												</div>
				
												<div class="job-status-bar">
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
						
						<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div><?php }?>
						
		
											
											
											
										
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
									<div class="user-profile-ov st2">
									
											<h3><a href="#" title="" class="exp-bx-open">Basic Information </a><a href="#" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></a></h3>
											<h4>Name : <i id="full_names"> <?php  echo $mydata['full_name'];?></i></h4>
											<h4>Nick Name : <i id="nick_names"> <?php  echo $mydata['nick_name'];?></i></h4>
											
											<h4>Gender : <i id="genders"> <?php if($mydata['gender']==1){?>Female<?php }else {?> Male <?php }?></i></h4>
											<h4>Date of birth : <i id="dobs"> <?php  echo $mydata['dob'];?></i></h4>
											<h4>private /  public:<i id="visib"><?php if($mydata['visibility']=='true'){?>
											   Public
												
											   <?php }else{
												   ?>Private
											   <?php }?>  </i></h4>
											<!--<label class="switch swtlastm">
											<input type="checkbox" checked>
											   <?php if($mydata['dob']=='true'){?>
											   Public
												<input type="checkbox" checked>
											   <?php }else{
												   ?><input type="checkbox">
											   <?php }?> 
												<span class="slider round"></span>
											</label>-->
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="lct-box-open">Location</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a></h3>
											<h4 id="country_ids"><?php  echo $mydata['country_id'];?></h4>
											<p id="addres"> <?php  echo $mydata['address'];?></p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="overview-open">Overview</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
											<p id="descriptions"><?php  echo $mydata['description'];?></p>
										</div><!--user-profile-ov end-->
										
										
									
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="skills-open">Interest</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"></a></h3>
											<ul>
												<li ><a href="#" title="" id="Interest_ar"><?php echo $mydata['interest_area'] ;?></a></li>
												
												
											</ul>
										</div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
									
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Photos</h3>
 <div class="row">
<div class="post-bar">
													
			  <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadPhoto/'; ?>" id="">

										
												<div class="job_descp">
											
											  <div class="files-wr" data-count-files="1">
  <div class="one-file ">
    <label for="file-1">Upload  Photo</label>
    <input name="photo" id="photo" type="file" >
    <div class="file-item hide-btn">
      <span class="file-name"></span>
      <span class="btn btn-del-file">x</span>
    </div>
  </div>
</div>
										
												</div>
				
												<div class="job-status-bar">
												<button type="submit" name="register" class="btn btn-success">Upload </button>
												</div>
												</form>
		</div>
		<?php if(!empty($photos)){
			foreach($photos as $ph){?>
     
			<div class="col-lg-3  thumb"><a class="thumbnail" href="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" data-lightbox="imgGLR" >
			<img class="img-responsive" border="0" height="300" src="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" width="" /></a>
			</div>
		<?php }}else{ ?>
						
						<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div><?php }?>
						
					

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
							  						<h3><?php if($frq->full_name!=""){ echo $frq->full_name ;}else { echo $frq->nick_name;}?></h3>
							  						
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
						
						<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div><?php }?>
						
							  				
							  				
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
						
						<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div><?php }?>
						
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

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select name="country_id" id="country_id">
							<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
	<option value="Åland Islands" title="Åland Islands">Åland Islands</option>
	<option value="Albania" title="Albania">Albania</option>
	<option value="Algeria" title="Algeria">Algeria</option>
	<option value="American Samoa" title="American Samoa">American Samoa</option>
	<option value="Andorra" title="Andorra">Andorra</option>
	<option value="Angola" title="Angola">Angola</option>
	<option value="Anguilla" title="Anguilla">Anguilla</option>
	<option value="Antarctica" title="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina" title="Argentina">Argentina</option>
	<option value="Armenia" title="Armenia">Armenia</option>
	<option value="Aruba" title="Aruba">Aruba</option>
	<option value="Australia" title="Australia">Australia</option>
	<option value="Austria" title="Austria">Austria</option>
	<option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas" title="Bahamas">Bahamas</option>
	<option value="Bahrain" title="Bahrain">Bahrain</option>
	<option value="Bangladesh" title="Bangladesh">Bangladesh</option>
	<option value="Barbados" title="Barbados">Barbados</option>
	<option value="Belarus" title="Belarus">Belarus</option>
	<option value="Belgium" title="Belgium">Belgium</option>
	<option value="Belize" title="Belize">Belize</option>
	<option value="Benin" title="Benin">Benin</option>
	<option value="Bermuda" title="Bermuda">Bermuda</option>
	<option value="Bhutan" title="Bhutan">Bhutan</option>
	<option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
	<option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
	<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana" title="Botswana">Botswana</option>
	<option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
	<option value="Brazil" title="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
	<option value="Burundi" title="Burundi">Burundi</option>
	<option value="Cambodia" title="Cambodia">Cambodia</option>
	<option value="Cameroon" title="Cameroon">Cameroon</option>
	<option value="Canada" title="Canada">Canada</option>
	<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
	<option value="Chad" title="Chad">Chad</option>
	<option value="Chile" title="Chile">Chile</option>
	<option value="China" title="China">China</option>
	<option value="Christmas Island" title="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia" title="Colombia">Colombia</option>
	<option value="Comoros" title="Comoros">Comoros</option>
	<option value="Congo" title="Congo">Congo</option>
	<option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
	<option value="Cook Islands" title="Cook Islands">Cook Islands</option>
	<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
	<option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
	<option value="Croatia" title="Croatia">Croatia</option>
	<option value="Cuba" title="Cuba">Cuba</option>
	<option value="Curaçao" title="Curaçao">Curaçao</option>
	<option value="Cyprus" title="Cyprus">Cyprus</option>
	<option value="Czech Republic" title="Czech Republic">Czech Republic</option>
	<option value="Denmark" title="Denmark">Denmark</option>
	<option value="Djibouti" title="Djibouti">Djibouti</option>
	<option value="Dominica" title="Dominica">Dominica</option>
	<option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador" title="Ecuador">Ecuador</option>
	<option value="Egypt" title="Egypt">Egypt</option>
	<option value="El Salvador" title="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea" title="Eritrea">Eritrea</option>
	<option value="Estonia" title="Estonia">Estonia</option>
	<option value="Ethiopia" title="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
	<option value="Fiji" title="Fiji">Fiji</option>
	<option value="Finland" title="Finland">Finland</option>
	<option value="France" title="France">France</option>
	<option value="French Guiana" title="French Guiana">French Guiana</option>
	<option value="French Polynesia" title="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
	<option value="Gabon" title="Gabon">Gabon</option>
	<option value="Gambia" title="Gambia">Gambia</option>
	<option value="Georgia" title="Georgia">Georgia</option>
	<option value="Germany" title="Germany">Germany</option>
	<option value="Ghana" title="Ghana">Ghana</option>
	<option value="Gibraltar" title="Gibraltar">Gibraltar</option>
	<option value="Greece" title="Greece">Greece</option>
	<option value="Greenland" title="Greenland">Greenland</option>
	<option value="Grenada" title="Grenada">Grenada</option>
	<option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
	<option value="Guam" title="Guam">Guam</option>
	<option value="Guatemala" title="Guatemala">Guatemala</option>
	<option value="Guernsey" title="Guernsey">Guernsey</option>
	<option value="Guinea" title="Guinea">Guinea</option>
	<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana" title="Guyana">Guyana</option>
	<option value="Haiti" title="Haiti">Haiti</option>
	<option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
	<option value="Honduras" title="Honduras">Honduras</option>
	<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
	<option value="Hungary" title="Hungary">Hungary</option>
	<option value="Iceland" title="Iceland">Iceland</option>
	<option value="India" title="India">India</option>
	<option value="Indonesia" title="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	<option value="Iraq" title="Iraq">Iraq</option>
	<option value="Ireland" title="Ireland">Ireland</option>
	<option value="Isle of Man" title="Isle of Man">Isle of Man</option>
	<option value="Israel" title="Israel">Israel</option>
	<option value="Italy" title="Italy">Italy</option>
	<option value="Jamaica" title="Jamaica">Jamaica</option>
	<option value="Japan" title="Japan">Japan</option>
	<option value="Jersey" title="Jersey">Jersey</option>
	<option value="Jordan" title="Jordan">Jordan</option>
	<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
	<option value="Kenya" title="Kenya">Kenya</option>
	<option value="Kiribati" title="Kiribati">Kiribati</option>
	<option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	<option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
	<option value="Kuwait" title="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia" title="Latvia">Latvia</option>
	<option value="Lebanon" title="Lebanon">Lebanon</option>
	<option value="Lesotho" title="Lesotho">Lesotho</option>
	<option value="Liberia" title="Liberia">Liberia</option>
	<option value="Libya" title="Libya">Libya</option>
	<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania" title="Lithuania">Lithuania</option>
	<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
	<option value="Macao" title="Macao">Macao</option>
	<option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
	<option value="Madagascar" title="Madagascar">Madagascar</option>
	<option value="Malawi" title="Malawi">Malawi</option>
	<option value="Malaysia" title="Malaysia">Malaysia</option>
	<option value="Maldives" title="Maldives">Maldives</option>
	<option value="Mali" title="Mali">Mali</option>
	<option value="Malta" title="Malta">Malta</option>
	<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
	<option value="Martinique" title="Martinique">Martinique</option>
	<option value="Mauritania" title="Mauritania">Mauritania</option>
	<option value="Mauritius" title="Mauritius">Mauritius</option>
	<option value="Mayotte" title="Mayotte">Mayotte</option>
	<option value="Mexico" title="Mexico">Mexico</option>
	<option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
	<option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
	<option value="Monaco" title="Monaco">Monaco</option>
	<option value="Mongolia" title="Mongolia">Mongolia</option>
	<option value="Montenegro" title="Montenegro">Montenegro</option>
	<option value="Montserrat" title="Montserrat">Montserrat</option>
	<option value="Morocco" title="Morocco">Morocco</option>
	<option value="Mozambique" title="Mozambique">Mozambique</option>
	<option value="Myanmar" title="Myanmar">Myanmar</option>
	<option value="Namibia" title="Namibia">Namibia</option>
	<option value="Nauru" title="Nauru">Nauru</option>
	<option value="Nepal" title="Nepal">Nepal</option>
	<option value="Netherlands" title="Netherlands">Netherlands</option>
	<option value="New Caledonia" title="New Caledonia">New Caledonia</option>
	<option value="New Zealand" title="New Zealand">New Zealand</option>
	<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
	<option value="Niger" title="Niger">Niger</option>
	<option value="Nigeria" title="Nigeria">Nigeria</option>
	<option value="Niue" title="Niue">Niue</option>
	<option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway" title="Norway">Norway</option>
	<option value="Oman" title="Oman">Oman</option>
	<option value="Pakistan" title="Pakistan">Pakistan</option>
	<option value="Palau" title="Palau">Palau</option>
	<option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
	<option value="Panama" title="Panama">Panama</option>
	<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay" title="Paraguay">Paraguay</option>
	<option value="Peru" title="Peru">Peru</option>
	<option value="Philippines" title="Philippines">Philippines</option>
	<option value="Pitcairn" title="Pitcairn">Pitcairn</option>
	<option value="Poland" title="Poland">Poland</option>
	<option value="Portugal" title="Portugal">Portugal</option>
	<option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
	<option value="Qatar" title="Qatar">Qatar</option>
	<option value="Réunion" title="Réunion">Réunion</option>
	<option value="Romania" title="Romania">Romania</option>
	<option value="Russian Federation" title="Russian Federation">Russian Federation</option>
	<option value="Rwanda" title="Rwanda">Rwanda</option>
	<option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
	<option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
	<option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
	<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa" title="Samoa">Samoa</option>
	<option value="San Marino" title="San Marino">San Marino</option>
	<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal" title="Senegal">Senegal</option>
	<option value="Serbia" title="Serbia">Serbia</option>
	<option value="Seychelles" title="Seychelles">Seychelles</option>
	<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
	<option value="Singapore" title="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia" title="Slovakia">Slovakia</option>
	<option value="Slovenia" title="Slovenia">Slovenia</option>
	<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
	<option value="Somalia" title="Somalia">Somalia</option>
	<option value="South Africa" title="South Africa">South Africa</option>
	<option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
	<option value="South Sudan" title="South Sudan">South Sudan</option>
	<option value="Spain" title="Spain">Spain</option>
	<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
	<option value="Sudan" title="Sudan">Sudan</option>
	<option value="Suriname" title="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland" title="Swaziland">Swaziland</option>
	<option value="Sweden" title="Sweden">Sweden</option>
	<option value="Switzerland" title="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
	<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
	<option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
	<option value="Thailand" title="Thailand">Thailand</option>
	<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
	<option value="Togo" title="Togo">Togo</option>
	<option value="Tokelau" title="Tokelau">Tokelau</option>
	<option value="Tonga" title="Tonga">Tonga</option>
	<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia" title="Tunisia">Tunisia</option>
	<option value="Turkey" title="Turkey">Turkey</option>
	<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
	<option value="Uganda" title="Uganda">Uganda</option>
	<option value="Ukraine" title="Ukraine">Ukraine</option>
	<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
	<option value="United States" title="United States">United States</option>
	<option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay" title="Uruguay">Uruguay</option>
	<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
	<option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
	<option value="Viet Nam" title="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara" title="Western Sahara">Western Sahara</option>
	<option value="Yemen" title="Yemen">Yemen</option>
	<option value="Zambia" title="Zambia">Zambia</option>
	<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
							
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
	
				<form>
					<select class="form-control" style="height: auto;" name="interest" id="interest">
    <option value="Boy">Boy</option>
    <option value="Girl">Girl</option>
    <option value="Other">Other</option>
   
  </select>
					<button type="button" class="save" id="InterestSave">Save</button>
				
					<button type="button" class="cancel">Cancel</button>
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
											<br>
<input  type="file" name="photo">
										
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

	<div id="myModal12" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title fhed">Upload Cover Photo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <div class="post-bar">
													
												  <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadCover/'; ?>" id="">
										
												<div class="job_descp">
											<br>
<input  type="file" name="photo">
										
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flatpickr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>