<?php
include 'header.php' ;
$open_tokenId=base64_decode(urldecode($openToken));?>	
<script src="https://static.opentok.com/v2/js/opentok.js">
</script>	
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<input type='text' name="uid" id="uid" value='<?php echo $UserId; ?>' hidden >
<section class="cover-sec">
  <?php if($mydata['cover_photo']!=""){?>
  <img src="<?php echo base_url() .'uploads/cover_photo/'.$mydata['cover_photo'] ;?>" alt="">
  <?php }else{
?>
  <img src="<?php echo base_url(); ?>assets/images/resources/cover-img.jpg" alt="">
  <?php }?>
  <a href="#" title="" data-toggle="modal" data-target="#myModal12">
    <i class="fa fa-camera">
      <input type="hidden">
    </i> Change Image
  </a>
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
                  <a href="#" title="" data-toggle="modal" data-target="#myModal11">
                    <i class="fa fa-camera">
                    </i>
                  </a>
                  <ul class="flw-status">
                    <li>
                      <span id="full"> 
                        <?php  echo $mydata['full_name'] ;?>
                      </span>
                    </li>
                  </ul>
				    <ul class="myprf">
				
				  <li><i class="fa fa-male" aria-hidden="true"></i>

      <?php if($user['gender']==1)
{
?>
                 <label>Male </label>
                  <?php
}
else
{ ?>
                  <label>Female </label>
                  <?php	} ?>


				  </li>
				    <li id="obs"><i class="fa fa-map-marker" aria-hidden="true">
                      </i>    <?php  echo $mydata['country'] ;?> </li>
				  <!--li><i class="fa fa-female" aria-hidden="true"></i> Female </li-->
				  </ul>
				<div class="tab-feed fnon">
                    <ul>
					<li data-tab="info-dd" class="animated fadeIn ">
                        <button type="button" class="sendreq" > View Profile </button>
                      </li>
        
                    </ul>
                  </div>
                </div>
                <!--user-pro-img end-->	
              </div>
              <!--user_profile end-->
              <!--div class="suggestions full-width">
                <div class="sd-title">
                  <h3>People Viewed Profile
                  </h3>
                </div>
              
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
                        <h4>
                          <?php echo $frq->full_name ;?>
                          </div>
                        </a>
                      <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
                        <span> 
                          <i class="fa fa-eye enqclqq" aria-hidden="true" >
                          </i>
                        </span>
                      </a>
                      </div>
                    <?php }}}
else{ ?>
            
                    <?php }?>
                  </div>
              
                </div-->
           
              </div>
              <!--main-left-sidebar end-->
            </div>
            <div class="col-lg-9">
              <div class="main-ws-sec">
                <div class="user-tab-sec">
                  <!--h3><!?php  echo $mydata['full_name'];?></h3-->
                  <div class="star-descp">
                  </div>
                  <!--star-descp end-->
                  <div class="tab-feed st2">
                    <ul>
                      <li data-tab="feed-dd" class="active">
                        <a href="#" title="">
                          <i class="fa fa-user" aria-hidden="true">
                          </i>
                          <span>Feed
                          </span>
                        </a>
                      </li>
                      <li data-tab="info-dd">
                        <a href="#" title="">
                          <i class="fa fa-pencil-square-o" aria-hidden="true">
                          </i>
                          <span>Info
                          </span>
                        </a>
                      </li>
                      <li data-tab="portfolio-dd" >
                        <a href="#" title="">
                          <i class="fa fa-camera" aria-hidden="true">
                          </i>
                          <span>Photos
                          </span>
                        </a>
                      </li>
                      <li data-tab="my-frd">
                        <a href="#" title="">
                          <i class="fa fa-users" aria-hidden="true">
                          </i>
                          <span>Friend Requests
                          </span>
                        </a>
                      </li>
                      <li data-tab="my-frd-list">
                        <a href="#" title="">
                          <i class="fa fa-address-card col-sdd" aria-hidden="true">
                          </i>
                          <span>My Friend list
                          </span>
                        </a>
                      </li>	
                      <li data-tab="my-str-list">
                        <a href="#" title="">
                          <i class="fa fa-address-card col-sdd" aria-hidden="true">
                          </i>
                          <span> My Stranger list
                          </span>
                        </a>
                      </li>
                      <!--li data-tab="payment-dd">
<a href="#" title="">
<i class="fa fa-money" aria-hidden="true"></i>
<span>Payment</span>
</a>
</li-->
                    </ul>
                  </div>
                  <!-- tab-feed end-->
                </div>
                <!--user-tab-sec end-->
                <div class="product-feed-tab current" id="feed-dd">
                  <div class="posts-section">
                    <?php 
if(!empty($feeds)){
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
														
																<li><a href="#" title="" class="ed-box-open" onclick="getFeeds(<?php echo $fd->id;?>)">Edit Post</a></li>
														<li><a href="<?php echo base_url()."index.php/Profile/deleteFeed/".$fd->id;?>" onclick="return confirm('Are you sure?')">Delete Post</a></li>
													
													</ul>
														<!--li><a href="" data-toggle="modal" data-target="#myModalhid">Hide Post text</a></li-->
												</div>
																<div class="overview-box" id="education-box">
								<div class="overview-edit">
								<h3>Edit Feed</h3>

								<form method="POST" action="<?php echo base_url(); ?>index.php/Profile/updateFeed" name="editform" id="editform">
								<input type="hidden" name="feed-id"  id="feed-id" />
								<textarea id="feed-edit" name="feed-edit"  ></textarea>
								<button type="submit"  id="feedsave" name="feedsave">Save</button>
								<a href="<?php echo base_url()."index.php/User/Profile/"?>">	<button type="button" class="cancel">Cancel</button></a>
								</form>
								<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
								</div><!--overview-edit end-->
								</div><!--overview-box end-->
                      </div>
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
																<a href="<?php echo $fd->linkUrl ?>"><p><?php echo $fd->linktitle ?>"></p></a> 
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
													
													
													<p class="feedp"><?php echo $fd->feeds;?>..... </p>
										      <br>
												</div>
                      <div class="job-status-bar">
                        <ul class="like-com">
                          <li>
                            <input type='text' name="fid" id="fid" value='<?php echo $fd->user_id; ?>' hidden >
                            <a href="javascript:void(0)" onclick="setLike(<?php echo $fd->id;?>)">
                              <i class="la la-heart heartr">
                              </i> 
                            </a>
                            <img src="<?php echo base_url(); ?>assets/images/liked-img.png" alt="">
                            <?php if($fd->no_likes!=0){?>
                            <span id="<?php echo $fd->id;?>">
                              <?php echo $fd->no_likes;?>
                            </span>
                            <?php }else {?>
                            <span id="<?php echo $fd->id;?>" style="display:none">
                            </span>
                            <?php 
}?>
                          </li> 
                        </ul>
                      </div>
                    </div>
                    <?php } }else{ ?>
                    <!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>
</div>-->
                    <?php }?>
                  </div>
                  <!--posts-section end-->
                </div>
                <!--product-feed-tab end-->
                <div class="product-feed-tab" id="info-dd">
                  <div class="user-profile-ov st2 pbot">
                    <h3>
                      <i class="fa fa-user-circle-o" aria-hidden="true">
                      </i> Basic Information
                      <a href="#" title="" class="exp-bx-open pull-right">
                        <i class="fa fa-pencil-square-o">
                        </i> 
                        <span class="ed_bt"> Edit
                        </span>
                      </a>
                    </h3>
                    <table class="tabl-cus">
                      <tr>
                        <td class="pers">Name
                        </td>
                        <td>
                          <i id="full_names"> 
                            <?php  echo $mydata['full_name'];?>
                          </i>
                        </td>
                      </tr>
                      <tr>
                        <td class="pers">Nick Name
                        </td>
                        <td> 
                          <i id="nick_names"> 
                            <?php  echo $mydata['nick_name'];?>
                          </i>
                        </td>
                      </tr>
                      <tr>
                        <td class="pers">Gender
                        </td>
                        <td>
                          <i id="genders"> 
                            <?php if($mydata['gen']==1){?>Male
                            <?php }else if($mydata['gen']==2){?> Female 
                            <?php }else {?> Other
                            <?php  } ?> 
                          </i>
                        </td>
                      </tr>
                      <tr>
                        <td class="pers">Date of birth
                        </td>
                        <td>
                          <i id="dobs"> 
						
                            <?php echo date("d/m/Y", strtotime($mydata['birth']));?>
                          </i>
                        </td>
                      </tr>
                      <tr>
                        <td class="pers">Age
                        </td>
                        <td>
                          <i id="ager"> 
                            <?php  echo $mydata['ag'];?>
                          </i> 
						  
						  		<?php
			$uid=$this->UserId = $this->session->userdata('user_id');
			
			    $query=$this->db->query("select age_hide from user_profile where user_id=$uid");

              $result=$query->result_array();
                    
                    foreach($result as $value){ 
					$status=$value['age_hide'];
					
					}
					?>
						  
						   <div class="togl_div togl_divch">
            <?php $currentStatus = ($status=='true')? "1" : "2";?> 
            <?php $checked = ($currentStatus== 1) ? "checked=''" :  ""; ?>
            <input type="checkbox" name="checkbox11" id="checkbox11" value="<?php echo $currentStatus?>" class="ios-toggle" <?php echo $checked?> >
            <label for="checkbox11" class="checkbox-label checkbox-labelch" data-off="Unhide" data-on="Hide" ></label>
          </div>    
                          







						  </td>
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
                  </div>
                  <!--user-profile-ov end-->
                  <div class="user-profile-ov">
                    <h3> 
                      <i class="fa fa-map-marker" aria-hidden="true">
                      </i> Location  
                      <a href="#" title="" class="lct-box-open pull-right">
                        <i class="fa fa-pencil-square-o">
                        </i> 
                        <span class="ed_bt"> Edit
                        </span>
                      </a>
                    </h3>
                    <h4 id="country_ids">
                      <?php  echo $mydata['country'];?>
                    </h4>
                  </div>
                  <!--user-age-ov end-->
                  <div class="user-profile-ov">
                    <h3> 
                      <i class="fa fa-pencil" aria-hidden="true">
                      </i>About me 
                      <a href="#" title="" class="overview-open pull-right">
                        <i class="fa fa-pencil-square-o ">
                        </i> 
                        <span class="ed_bt"> Edit
                        </span>
                      </a>
                    </h3>
                    <p id="descriptions">
                      <?php  echo $mydata['description'];?>
                    </p>
                  </div>
                  <!--user-profile-ov end-->
                  <div class="user-profile-ov">
                    <h3> 
                      <i class="fa fa-heart" aria-hidden="true">
                      </i> Interest  
                      <a href="#" title="" class="skills-open pull-right">
                        <i class="fa fa-pencil-square-o">
                        </i> 
                        <span class="ed_bt"> Edit
                        </span>
                      </a> 
                    </h3>
                    <!--ul>
                      <?php if($mydata['interest_area']==1)
{
?>
                      <li >
                        <a  id="Interest_ar">
                          <?php echo "Boy" ;?>
                        </a>
                      </li>
                      <?php
}
else
{
?>
                      <li >
                        <a  id="Interest_ar">
                          <?php echo "Girl" ;?>
                        </a>
                      </li>
                      <?php
} ?>
                    </ul-->
                  </div>
                  <!--user-profile-ov end-->
                </div>
                <!--product-feed-tab end-->
                <div class="product-feed-tab" id="portfolio-dd">
                  <div class="portfolio-gallery-sec">
                    <h3>Photos
                    </h3>
                    <div class="row">
                      <div class="">
                        
						
						<form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadPhotos/'; ?>" id="myimg" name="myimg">
										  <?php	
$user_id =$this->session->userdata('user_id');
	$data = $this->users_model->countimage($user_id);
if($data <3)
{
	?>
                          <div class="job_descp">
                            <input type ="hidden" name="abc" id="abc" value=
                                   <?php echo $mydata['user_id'] ?> >
                            <input name="photopublic" id="photopublic" type="file" >
                          </div>
                          </div>
                        <div class="col-lg-3">
								  
	
                          <div class="job-status-bar">
                            <button type="submit" name="register" class="btn btn-success">Upload 
                            </button>
                          </div>
						  </div>
						    <?php  } else{?>
		<div class="alert alert-danger">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Your Photo uploading limit is maximum please delete to continue !!! </div>

										</div>
										
<?php }?>
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
                          <a class="thumbnail" href="<?php echo base_url() .'uploads/photos/'.$row['file_name'] ; ?>" data-lightbox="imgGLR">
                            <img class="img-responsive" border="0" height="300" src="<?php echo base_url() .'uploads/photos/'.$row['file_name'] ; ?>" >
                          </a>
                          <div class="middleg">
                            <div class="textg">
                              <a href="" data-toggle="modal" data-id="<?php echo $row['id'];?>" data-target="#myModalhid" class="modalLink">
                                <i class="fa fa-trash-o" aria-hidden="true">
                                </i>
                              </a>
                            </div>
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
                    </div>   </div>
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
                      <span class="close">×
                      </span>
                      <img class="modal-content" id="img01">
                      <div id="caption">
                      </div>
                    </div>
                  </div>
                  <?php if(!empty($photos)){
foreach($photos as $ph){?>
                  <div class="col-lg-3  thumb">
                    <a class="thumbnail" href="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" data-lightbox="imgGLR" >
                      <img class="img-responsive" border="0" height="300" src="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" width="" />
                    </a>
                  </div>
                  <?php }}else{ ?>
                  <!--		<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>
</div> -->
                  <?php }?>
                </div>	
                <div class="product-feed-tab" id="my-frd">
                 
                    <div class="clerarfix"></div>
<h3>&nbsp;</h3>
					<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs myreq">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Requests Sent </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Requests Received  </a>
						</li>
						
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
						
					
						
						
						    <div class="requests-list widt100">
                  <?php if(!empty($sendRequest)){
$i=1;
foreach($sendRequest as $frq){
	
	?>
                  <div class="request-details request-detailsch" id="req_<?php echo $frq->user_id;?>">
                <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">		       <div class="noty-user-img" id="img_<?php echo $frq->user_id;?>">
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
									
									
                    </div>
                    <div class="request-info" id="nam_<?php echo $frq->user_id;?>">
					
                      <h3>
                        <?php echo $frq->full_name ;?>
                      </h3>
                      <!--<span>Graphic Designer</span>-->
                    </div></a>
                    <div class="accept-feat">
                      <ul>
                        <li>
                          <button type="button" class="accept-req" id="accept-req_<?php echo $frq->user_id;?>" onclick="">Requested
                          </button>
                        </li>
                        <li>
                        <button type="button" data-id="<?php echo $frq->user_id;?>"  class="canc-req"  id="canc-req_<?php echo $frq->user_id;?>">
                            <i class="la la-close">
                            </i>
                          </button>
                        </li>
                      </ul>
                    </div>
                    <!--accept-feat end-->
                  </div>
                  <!--request-detailse end-->
                  <?php }} ?>
                </div>
						
						
						
						</div>
						<div class="tab-pane" id="tab_default_2">
						
												 <div class="requests-list widt100">
                      <?php if(!empty($friendsRequest)){
$i=1;
foreach($friendsRequest as $frq){?>
                      <div class="request-details request-detailsch" id="imr_<?php echo $frq->user_id;?>">
                        <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">		   <div class="noty-user-img" id="imgg_<?php echo $frq->user_id;?>">
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
                        <div class="request-info" id="namm_<?php echo $frq->user_id;?>">
                          <h3>
                            <?php  echo $frq->full_name ;?>
                          </h3>
                        </div></a>
                        <div class="accept-feat">
                          <ul>
                            <li>
                              <button type="button" class="accept-req" id="friendAccept_<?php echo $frq->user_id;?>" onclick="friendAccept(<?php echo $frq->user_id;?>)">Accept
                              </button>
                            </li>
                            <li>
                              <button type="button" data-id="<?php echo $frq->user_id;?>" id="close-req_<?php echo $frq->user_id;?>" class="close-req ">
                                <i class="la la-close">
                                </i>
                              </button>
                            </li>
                          </ul>
                        </div>
                        <!--accept-feat end-->
                      </div>
                      <!--request-detailse end-->
                      <?php }}
else{ ?>
                      <!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>
</div> -->
                      <?php }?>
                    </div>
						
						
						
						
						
						
						
						</div>
				
					</div>
				</div>
			</div>

                    <div class="col-lg-8">
                   
                    </div>
                    </div>
					
                    <!--requests-list end-->
                    <div class="clearfix">
                    </div>
                    <!--	<div class="success-box alert">
<div class="msg"><i class="fa fa-check" aria-hidden="true"></i> Success &#8211; Your message will goes here</div>
</div>
<div class="error-box alert">
<div class="msg"><i class="fa fa-times" aria-hidden="true"></i> Error &#8211; Message will goes here</div>
</div>
<div class="info-box alert">
<div class="msg"><i class="fa fa-database" aria-hidden="true"></i> Info &#8211; Information message will goes here</div>
</div>-->
                 
                <div class="product-feed-tab" id="my-frd-list">
				<h3 class="h3cl">My Friend list </h3>
                  <div class="row">
				  
                    <?php if(!empty($friendList)){
$i=1;

foreach($friendList as $frq){?> 
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12"  id="un_<?php echo $frq->user_id;?>">
                      <div class="company_profile_info " >
                        <div class="company-up-info">	
                          <?php if( $frq->status==1){?>
                          <i class="fa fa-circle msg-online" aria-hidden="true"> 
                            <span>Online
                            </span>
                          </i>
                          <?php }else{?>
                          <i class="fa fa-circle msg-off" aria-hidden="true"> 
                            <span>Offline
                            </span>
                          </i>
                          <?php }?>
						<div class="ed-opts form_wrapper unfr">
                                                    <a  title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options unfrhide" data-id="<?php echo $frq->user_id;?>"    style="display: none;">
                                                                                                                            <li><a  title=""><i class="fa fa-user-times " aria-hidden="true"></i> &nbsp; Unfriend</a></li>
                                                        
                                                                                                        </ul>
                                                </div>
                          <div class="clearfix">
                          </div>
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
                          <h3>
                            <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
                              <?php if($frq->full_name!=""){ echo $frq->full_name ;}else { echo $frq->full_name;}?>
                            </a>
                          </h3>
                       <ul>
										<li><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="" class="follow msgch" data-username=' <?php echo $frq->full_name;?>' data-id="<?php $frq->user_id; ?>"><i class="fa fa-video-camera " aria-hidden="true"></i></a></li>
										<!--li><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="" class="hire-us"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li-->
									</ul>
                        </div>
                      </div>
                      <!--company_profile_info end-->
                    </div>
                    <?php }}else{ ?>
                    <?php }?>
                  </div>
                </div>
                <div class="product-feed-tab" id="my-str-list">
                  <div class="row">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div> 
</div>
</main>
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
<!-- Snackbar -->
<div class="overview-box" id="overview-box">
  <div class="overview-edit">
    <h3>
      <i class="fa fa-pencil" aria-hidden="true">
      </i>About me
    </h3>
    <span>5000 character left
    </span>
    <form method="POST">
      <textarea id="description">
        <?php echo $mydata['description'];?>
      </textarea>
      <p class="sav_bt">	
        <button type="button" class="save" id="descriptionsave">Save
        </button>
      </p>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div>
</div>
<div class="overview-box" id="about-box">
  <div class="overview-edit">
    <h3>About
    </h3>
    <form>
      <input type="text" name="subject" placeholder="Name">
      <input type="text" name="subject" placeholder="Nick Name">
      <button type="submit" class="save">Save
      </button>
      <button type="submit" class="save-add">Save & Add More
      </button>
      <button type="submit" class="cancel">Cancel
      </button>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div>
  <!--overview-edit end-->
</div>
<!--overview-box end-->
<div class="overview-box" id="experience-box">
  <div class="overview-edit">
    <h3>
      <i class="fa fa-user-circle-o" aria-hidden="true">
      </i> Basic Information
    </h3>
    <form method="POST" action="">
      <label class="mylab">Name
      </label>
      <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Name" value="<?php  echo $mydata['full_name'];?>">
      <label class="mylab">Nick name
      </label>
      <input type="text" name="nick_name"  class="form-control" id="nick_name" placeholder="Nick Name" value="<?php  echo $mydata['nick_name'];?>">
      <label class="mylab">Date of birth
      </label>
      <!--input type="text" id="dob" name="dob" class="form-control" data-masked-input="99/99/9999" placeholder="Date of birth" maxlength="10" value="<?php  echo $mydata['birth'];?>"-->
      <input type="text" id="dob" name="dob" placeholder="Date of birth" maxlength="10" value="<?php echo date("d/m/Y", strtotime($mydata['birth']));?>"  readonly>
      <!--<label class="mylab">Age Privacy
      </label>
      <div class="datefm">
        <select name="age_id" id="age_id">
          <option value="1">Public
          </option>
          <option value="2">Private
          </option>
        </select>
        <i class="fa fa-sort-desc" aria-hidden="true">
        </i>
        </td>
      </div> -->
    <div class="col-lg-12 no-pdd">
      <div class="checky-sec">
        <div class="fgt-sec">
          <small class="checkbox-inline">
            <b >Gender :
            </b> &nbsp;
          </small>
        </div>
        <!--fgt-sec end-->
        <?php   $o="";$f="";$m="";
        if($mydata['gen']==1){ 
          $m="checked";
          }else if($mydata['gen']==2){ $f="checked";
          }else { $o="checked";}?>
        <div class="fgt-sec">
          <input type="radio" name="gender" id="c5" 
                 <?php echo $m;?>   value="1">
          <label for="c5">
            <span>
            </span>
          </label>
          <small>Male &nbsp;
          </small>
        </div>
        <!--fgt-sec end-->
        <div class="fgt-sec">
          <input type="radio" name="gender" id="c6" 
                 <?php echo $f;?>   value="2">
          <label for="c6">
            <span>
            </span>
          </label>
          <small> Female &nbsp;
          </small>
        </div>
        <!--fgt-sec end-->
        <div class="fgt-sec">
          <input type="radio" name="gender" id="c7"
          <?php echo $o;?>   value="3">
          
          <label for="c7">
            <span>
            </span>
          </label>
          <small> Other
          </small>
        </div>
        <!--fgt-sec end-->
      </div>
    </div>
  
    <div class="clearfix">
    </div>		
    <div class="col-lg-12">
      <p class="sav_bt">	
        <button type="button" id="basicinfo" class="save" >Save
        </button>
      </p>
      <div class="clearfix">
      </div>
    </div>
    </form>
  <a href="#" title="" class="close-box">
    <i class="la la-close">
    </i>
  </a>
</div>
<!--overview-edit end-->
</div>
<!--overview-box end-->
<div class="overview-box" id="location-box">
  <div class="overview-edit">
    <h3>
      <i class="fa fa-map-marker" aria-hidden="true">
      </i> Location
    </h3>
    <form method="POST" action="">
      <div class="datefm">
        <select name="country_id" id="country_id">
          <?php 
foreach($countries as $row)
{ ?>
          <option value="<?php echo $row->c_id ?>">
            <?php echo $row->country ?>
          </option>
          <?php  }
?>
        </select>
        <i class="fa fa-sort-desc frig"  aria-hidden="true">
        </i>
       
      </div>
      <p class="sav_bt">
        <button type="button" class="save" id="locationSave" >Save
        </button>
      </p>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div>
  <!--overview-edit end-->
</div>
<!--overview-box end-->
<div class="overview-box" id="education-box">
  <div class="overview-edit">
    <h3>Age privacy
    </h3>
    <form>
      <div class="datefm">
        <select name="age_id" id="age_id">
          <option value="1">Public
          </option>
          <option value="2">Private
          </option>
        </select>
        <i class="fa fa-sort-desc" aria-hidden="true">
        </i>
      </div>
      <p class="sav_bt">	
        <button type="button" class="save" id="agesave">Save
        </button>
      </p>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div> 
  <!--overview-edit end-->
</div>
<!--overview-box end-->
<div class="overview-box" id="skills-box">
  <div class="overview-edit sign_in_sec " style="display:block;">
    <h4>
      <i class="fa fa-heart" aria-hidden="true">
      </i> Interest
    </h4>
    <form>
<div id="select7" class="select7_container">
       <div class="select7_arrow">&#9662;</div>
       <div class="select7_placeholder">Select Interest</div>
       <select class="select7_select" name="intr[]" id="selval" onchange="add_selected_item(this, event);">
           <option class="select7_hide" value="filler"></option>
       
	<?php   foreach($intrest as $row)
{ ?>
          <option value="<?php echo $row->in_id ?>">
            <?php echo $row->intrest ?>
          </option>
          <?php  }
?>
	   
	   
	   
               
       </select>
       <div class="select7_items"></div>
   </div>
      <!--div class="datefm">
        <select name="Interest_id" id="Interest_id">
          <option value="1">Boy
          </option>
          <option value="2">Girl
          </option>
          <option value="3">Other
          </option>
        </select>
        <i class="fa fa-sort-desc" aria-hidden="true">
        </i>
      </div-->
      <p class="sav_bt">	
        <button type="button" class="save InterestSave" id="InterestSave">Save
        </button>
      </p>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div>
  <!--overview-edit end-->
</div>
<!--overview-box end-->
<div class="overview-box" id="age-box">
  <div class="overview-edit sign_in_sec " style="display:block;">
    <h4>
      <i class="fa fa-heart" aria-hidden="true">
      </i> Interest
    </h4>
    <form>
      <div class="datefm">
        <select name="Interest_id" id="Interest_id">
          <option value="1">
          </option>
          <option value="2">
          </option>
          <option value="3">
          </option>
        </select>
        <i class="fa fa-sort-desc" aria-hidden="true">
        </i>
      </div>
      <p class="sav_bt">	
        <button type="button" class="save" id="InterestSave">Save
        </button>
      </p>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div>
  <!--overview-edit end-->
</div>
<!--overview-box end-->
<div class="overview-box" id="create-portfolio">
  <div class="overview-edit">
    <h3>Create Portfolio
    </h3>
    <form>
      <input type="text" name="pf-name" placeholder="Portfolio Name">
      <div class="file-submit">
        <input type="file" name="file">
      </div>
      <input type="text" name="website-url" placeholder="htp://www.example.com">
      <button type="submit" class="save">Save
      </button>
      <button type="submit" class="cancel">Cancel
      </button>
    </form>
    <a href="#" title="" class="close-box">
      <i class="la la-close">
      </i>
    </a>
  </div>
  <!--overview-edit end-->
</div>
<!--overview-box end-->
</div>
<!--theme-layout end-->
<div id="myModal11" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fhed">Upload Profile Picture
        </h4>
        <button type="button" class="close" data-dismiss="modal">&times;
        </button>
      </div>
      <div class="modal-body">
        <div class="post-bar">
          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadProfile/'; ?>" id="">
            <div class="job_descp">
              <input type ="hidden" name="abc" id="abc" value=
                     <?php echo $mydata['user_id'] ?> >
              <br>
              <input  type="file" name="photopro" id="photopro">
            </div>
            <div class="job-status-bar">
              <button type="submit" name="register" class="btn btn-success">Upload
              </button>
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
        <h4 class="modal-title fhed">Upload Cover Photo
        </h4>
        <button type="button" class="close" data-dismiss="modal">&times;
        </button>
      </div>
      <div class="modal-body">
        <div class=" ">
          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url().'index.php/Profile/UploadCover/'; ?>" id="">
            <div class="job_descp">
              <br>	
              <input type ="hidden" name="abc" id="abc" value=
                     <?php echo $mydata['user_id'] ?> >
              <input  type="file" name="photocover" id="photocover">
			   <button type="submit" name="register" class="btn btn-success">Upload 
              </button>
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
        <p class="ays">Are you sure delete image
        </p>
        <button type="button" class="close" data-dismiss="modal">&times;
        </button>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-default pull-left"  onclick="deleteimg()" >
          Yes
        </button>
        <button type="submit" class="btn btn-success btn-default pull-left" data-dismiss="modal">
          No
        </button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js">
</script>
<script>
  $('#dob').datepicker({
	   minDate: new Date(1900,1-1,1), maxDate: '-18Y',
      dateFormat: 'dd/mm/yy',
      defaultDate: new Date(),
      changeMonth: true,
      changeYear: true,
      yearRange: '-110:-18'
  });
</script>
<script>
$(document).ready(function() {	
	


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
	

</script>
<script>
  function getFeeds(intValue) {
    var val=intValue;
    $.ajax({
      type: "POST",
      url: "../Profile/edit_data",
      data:{
        val:val}
      ,
      dataType:"text", 
      success: function(result){
        var resultObjt = JSON.parse(result)
        $("#feed-edit").val(resultObjt.feed);
        $("#feed-id").val(resultObjt.feedid);
      }
    }
          );
  }
  $("#editform").validate({
    errorPlacement: function(error, element) {
      console.log(element.attr('name'));
      $( error ).insertAfter( element);
    }
    ,
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
          }
                      , 1500);
        }
      }
            );
      return false;
    }
  }
                         );
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
</script>


<!--------------------------------------Form Validation script---------------------------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript"> 
  $("#myimg").validate({
    rules: {
      photopublic:"required"
    }
    ,
    messages: {
      photopublic:"Please choose the file"
    }
  }
                      );
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					   $('#checkbox11').change(function () {				
    var status = $(this).val();
//	alert(status);
	  //var uid =$(this).data('id');
    $.ajax({
      type: "POST",
     url: "../Profile/update_age_privacy",
      data:{profilestatus:status},
      dataType:"text", 
      success: function(result){
        privacyChangeCallbacks(result);
        //location.reload();
      }
	
 }); });

 function privacyChangeCallbacks(result){

    var status = JSON.parse(result);
	
    var publicStatus = "2";
    if(status.visibility == "true"){
      publicStatus   = "1"
    }
    $('#checkbox11').val(publicStatus);
 }
 
  $('.close-req').click(function() { 
	var uid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: "../Profile/reject_request",
				data:{uid:uid},
				dataType:"text", 
					success: function(result){
					
				
						$("#close-req_"+uid).remove();
					$("#friendAccept_"+uid).remove();
					$("#imgg_"+uid).remove();
					$("#namm_"+uid).remove();
					/*var resultObj = JSON.parse(result)
			 window.setTimeout(function(){location.reload()},1000);*/
				}               
		}); 		
			             
				
		}); 

		
		
		
  $('.canc-req').click(function() { 
	var uid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: "../Profile/cancel_request",
				data:{uid:uid},
				dataType:"text", 
				success: function(result){
					
				
					$("#req_"+uid).remove();
					/*var resultObj = JSON.parse(result)
			 window.setTimeout(function(){location.reload()},1000);*/
				}               
		}); 		
			             
				
		}); 
			
</script>
<script>
  var selID = "";
  $('.modalLink').click(function(){
    var ID=$(this).attr('data-id');
    selID =  ID;
  }
                       );
  function deleteimg() {
    $.ajax({
      type: "POST",
      url: "../Profile/delete_img",
      data:{
        selID:selID}
      ,
      dataType:"text", 
      success: function(){
        setInterval(function(){
          window.location.href="../Profile/myProfile";
        }
                    , 1500);
      }
    }
          );
  }
</script>
<script>
$(".buttonlo").click(function() {
   $('#myOverlay').show();
   $('#loadingGIF').show();
   setTimeout(function(){
       $('#myOverlay').hide();
       $('#loadingGIF').hide();
   },2800);
});
</script>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto">
</audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto">
</audio>
<audio id="dialTone" src="<?php echo base_url(); ?>assets/media/dialtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js">
</script>
<script>
  normalConnection();
</script>

