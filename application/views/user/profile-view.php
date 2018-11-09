<?php
include 'header.php' ;
$open_tokenId=base64_decode(urldecode($openToken));?>	
<script src="https://static.opentok.com/v2/js/opentok.js">
</script>	
<section class="cover-sec">
<input type="text" name="frd" id="frd" value="<?php echo $mydata['user_id']; ?>" hidden > 
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
            <div class="main-left-sidebar company-upv">
              <div class="user_profile">
                <div class="user-pro-img ">
                  <?php if($mydata['profile_pic']!=""){?>
                  <img src="<?php echo base_url() .'uploads/profile_pic/'.$mydata['profile_pic'] ;?>" alt="">
                  <?php }else{?>
                  <?php if($mydata['gen']==1)
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
                      <span> 
                        <?php  echo $mydata['full_name'];?>
                      </span>
                    </li>
                  </ul>
				  
				  
				  
				  
				    <ul class="myprf">
				
				  <li><i class="fa fa-male" aria-hidden="true"></i>

      <?php if($mydata['gen']==1)
{
?>
                 <label>Male </label>
                  <?php
}
else if($mydata['gen']==2)
{ ?>
                  <label>Female </label>
                  <?php	} 
				  
				  else 
{ ?>
                  <label>Others </label>
                  <?php	} ?>


				  </li>
				    <li id="obs"><i class="fa fa-map-marker" aria-hidden="true">
                      </i>    <?php  echo $mydata['country'] ;?> </li>
				  <!--li><i class="fa fa-female" aria-hidden="true"></i> Female </li-->
				  </ul>
				
					
					
				  
				  
				 
				  
				  
				  
                  <?php $idu=$this->session->userdata('user_id');
$ab=	$mydata['user_id'];		$i=0;	$fi=0;$ui=0; $f=0;$u=0; //if($mydata['user_id']!=$this->session->userdata('user_id')){?>
				  <input type="text" name="pa" id="pa" hidden value="<?php echo $idu; ?>">
				  <?php
				  
				   $query = $this->db->query("select * from  friends  where user_id=$ab and friend_id=$idu and status=0"); 
         $result=$query->result(); //echo $this->db->last_query();
                    foreach ($result as $row) {
            $fi = $row->friend_id;
            
        $ui=$row->user_id;
		
					}
					
					if(($fi==$idu)&&($ui==$ab))
					{
					
					
                     if($result==true)
					 {
						   $i=1;
						  
					  }  
					}
					
					/////////////////
					
					 $query = $this->db->query("select * from  friends  where user_id=$idu and friend_id=$ab and status=0"); 
         $result=$query->result(); //echo $this->db->last_query();
                    foreach ($result as $row) {
            $f = $row->friend_id;
            
        $u=$row->user_id;
		
					}
					
					if(($f==$ab)&&($u==$idu))
					{
					
					
                     if($result==true)
					 {
						   $i=3;
						  
					  }  
					}
					
					/////////
					
					
					
					
					  $query = $this->db->query("select * from  friends  where user_id=$ab and friend_id=$idu and status=1"); 
         $result=$query->result();
                    
                     if($result==true)
					 {
						   $i=2;
						  
					  }


					/*  $query = $this->db->query("select * from  friends  where user_id=$ab and friend_id=$idu and status=0"); 
         $result=$query->result();
                    
                     if($result==true)
					 {
						   $i=3;
						  
					  } 
					  */
					  
					  
					  
					  
				  $query = $this->db->query("select * from  friends  where   ((user_id=$idu and friend_id=$ab) or (user_id=$ab and friend_id=$idu))  "); 
         $result=$query->result();
                    
                     if($result==false)
					 {
						   $i=4;
						  
					  }
                      

				  ?>
				  <?php if($i==1) {
					  ?>
				  
				<br>
                    <button type="button" id="can" name="can" class="sendreq canreq mb20" data-id="<?php echo $ab;?>" > <i class="fa fa-window-close" aria-hidden="true"></i> Cancel request
        </button>
		
		
		
				  <?php } else if($i==2) {?>
		
			  
				<br>
                 <span>
											
												<a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $ab;  ?>" title="" data-id="<?php echo $ab ;?>" class="follow follow_friend "><i class="fa fa-video-camera cmsgq mb20 vbut" aria-hidden="true"></i></i></a>
												
												</span>
		
		
		  <?php } else if($i==3) {?>
		
		
		
		<br>
                           <button type="button" id="canss" name="canss" class="sendreq confi mb20" data-id="<?php echo $ab;?>" > <i class="fa fa-check-square-o" aria-hidden="true"></i>   Confirm Request
        </button>
		
		
		
                  <?php } else if($i==4) {?>
		
		
		
		<br>
                    <button type="button" id="send" name="send"  class="sendreq frereq mb20" data-id="<?php echo $ab;?>"  > <i class="fa fa-paper-plane" aria-hidden="true"></i> Send request
        </button>
		
		
		
                  <?php } ?>
                </div>
				
			
				
				  
					
				
				
				
                <!--user-pro-img end-->
              </div>
              <!--user_profile end-->
              
              <!--suggestions end-->
            </div>
            <!--main-left-sidebar end-->
          </div>
          <div class="col-lg-9">
            <div class="main-ws-sec">
              <div class="user-tab-sec">
                <!--h3> <!?php if($mydata['nick_name']!=""){ echo $mydata['nick_name'] ;}else { echo $mydata['full_name'];}?></h3-->
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
					
					
					
					
					                    
						  		<?php
			$uid=$mydata['user_id'];
			    $query=$this->db->query("select friendlist_hide from user_profile where user_id=$uid");

              $result=$query->result_array();
                    
                    foreach($result as $value){ 
					$status=$value['friendlist_hide'];
					
					}
					
					
					?>
					                       <?php if($status=="false")
{
?>
        
					
					
					
					
					
					
                    <li data-tab="my-frd-list">
                      <a href="#" title="">
                        <i class="fa fa-address-card col-sdd" aria-hidden="true">
                        </i>
                        <span>Friends list
                        </span>
                      </a>
                    </li>
<?php } ?>
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
					<div  id="postcontainer">
                  <?php $r=0;
if(!empty($feeds)){ 
foreach($feeds as $fd){  if($r<2) {  ?>
                  <div class="post-bar">
                    <div class="like_bt">
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
                            <h3>
                              <?php  echo $fd->full_name ;?>
                            </h3>
                          
                          </div>
                        </div>
                        <div class="ed-opts">
                          <a href="#" title="" class="ed-opts-open">
                            <i class="la la-ellipsis-v">
                            </i>
                          </a>
                          <ul class="ed-options">
                            <?php if($fd->user_id==$this->session->userdata('user_id')){?>
                            <li>
                              <a href="#" title="" class="ed-box-open" onclick="getFeeds(<?php echo $fd->id;?>)">Edit Post
                              </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url()."index.php/Profile/deleteFeed/".$fd->id;?>" onclick="return confirm('Are you sure?')">Delete Post
                              </a>
                            </li>
                            <?php } else{
?>
                            <li>
                              <a href="<?php echo base_url()."index.php/Profile/hideFeed/".$fd->id.'/'.$fd->user_id;?>" onclick="return confirm('Are you sure?')">Hide Post
                              </a>
                            </li>
                            <?php }?>
                          </ul>
                        </div>
                      </div>
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
																<a href="<?php echo $fd->linkUrl ?>" target="blank"><p><?php echo $fd->linktitle ?>"></p></a> 
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
																<img src="<?php echo base_url() .'uploads/photos/'.$fd->image_name ; ?>" class="image-responsive imgfeed"> 
															</div>
												<?php } }?>	
													
													
													<p class="feedp"><a href="<?php echo $fd->linkUrl ?>" target="blank" class="feedp"> <?php echo $fd->feeds;?> </a> </p>
										      <br>
												</div>
                      <div class="job-status-bar">
                        <ul class="like-com">
                          <li>
                            <i class="la la-heart heartr">
                            </i> 
                            <img src="<?php echo base_url(); ?>assets/images/liked-img.png" alt="">
                            <?php if($fd->no_likes!=0){?>
                            <span>
                              <?php echo $fd->no_likes;?>
                            </span>
                            <?php }?>
                          </li> 
                        </ul>
                      </div>
                    </div>
                  </div>
<?php $r++; } } }
else{ ?>
						
					<!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>

										</div>--><?php }?>
                </div>  </div>
                <!--posts-section end-->
              </div>
              <!--product-feed-tab end-->
              <div class="product-feed-tab" id="info-dd">
                <div class="user-profile-ov st2">
                  <h3>
                    <i class="fa fa-user-circle-o" aria-hidden="true">
                    </i> Basic Information
                  </h3>
                  <table class="tabl-cus">
                    <tbody>
                      <tr>
                        <td class="pers">Name
                        </td>
                        <td>
                          <i id="full_names"> 
                            <?php  echo $mydata['full_name'];?>
                          </i>
                        </td>
                      </tr>
                      <!--tr>
                        <td class="pers">Nick Name
                        </td>
                        <td> 
                          <i id="full_names"> 
                            <?php  echo $mydata['nick_name'];?>
                          </i>
                        </td>
                      </tr-->
					 
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
					  
					  
						  		<?php
			$uid=$mydata['user_id'];
			    $query=$this->db->query("select age_hide from user_profile where user_id=$uid");

              $result=$query->result_array();
                    
                    foreach($result as $value){ 
					$status=$value['age_hide'];
					
					}
					?>
					                       <?php if($status=="true")
{
?>
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
                          <i id="age"> 
                            <?php  echo $age;?>
                          </i> 
                        </td>
                      </tr>
                      <?php
}else 
{
?>
   <td class="pers">Date of birth
                        </td>
                        <td>
                          <i id="dobs">
                            <?php  echo "** ** ****";?> 
                          </i>
                        </td>
                      </tr>
 
                      <tr>
                        <td>Age
                        </td>
                        <td>
                          <i id="age"> 
                            <?php  echo "**";?>
                          </i> 
                        </td>
                      </tr>
<?php } ?>
                      <!-- <tr class="no_br">
                       <td>Private /  Public
                        </td>
                        <td>
                          <i id="visib">
                            <?php if($mydata['visibility']=='true'){?>
                            Public
                            <?php }else{?>
                              Private
                            <?php }?>  
                          </i>
                        </td>

                      </tr>-->
                    </tbody>
                  </table>
                </div>
                <!--user-profile-ov end-->
                <div class="user-profile-ov">
                  <h3>
                    <i class="fa fa-map-marker" aria-hidden="true">
                    </i> Location
                  </h3>
                  <div class="locpad">
                    <h4 id="country_ids">
                      <?php  echo $mydata['country'];?>
                    </h4>
                    <p id="addres"> 
                      <?php  echo $mydata['address'];?>
                    </p>
                  </div>
                </div>
                <!--user-profile-ov end-->
                <div class="user-profile-ov">
                  <h3>
                    <i class="fa fa-pencil" aria-hidden="true">
                    </i> About me
                  </h3>
                  <div class="locpad">
                    <p id="descriptions">
                      <?php  echo $mydata['description'];?>
                    </p>
                  </div>
                </div>
                <!--user-profile-ov end-->
                <div class="user-profile-ov">
                  <h3>
                    <i class="fa fa-heart" aria-hidden="true">
                    </i> Interest
                  </h3>
                  <div class="locpad">
                    <ul>
                      <li>
                        <a href="#" title="" id="Interest_ar">
                          <?php

if($mydata['interest_area']==1)
{
	echo "Boy";
}
else if($mydata['interest_area']==2)
{
	echo "Girl";
}
else if($mydata['interest_area']==3)
{
	echo "Others";
}
						?>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--user-profile-ov end-->
              </div>
              <!--product-feed-tab end-->
              <div class="product-feed-tab" id="portfolio-dd">
                <div class="portfolio-gallery-sec">
                  <h3>Photos
                  </h3>
                  <div class="row">
                    <?php if(!empty($photos)){
foreach($photos as $ph){?>
                    <div class="col-lg-3  thumb">
                      <a class="thumbnail" href="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" data-lightbox="imgGLR" >
                        <img class="img-responsive" border="0" height="300" src="<?php echo base_url().'uploads/photos/'.$ph->file_name;?>" width="" />
                      </a>
                    </div>
                    <?php }}else{ ?>
                    <!--	<div class="download-box alert">
<div class="msg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  No data &#8211; </div>
</div>-->
                    <?php }?>		
                  </div>	
                </div>
                <!--portfolio-gallery-sec end-->
              </div>
              <!--product-feed-tab end-->
              <div class="product-feed-tab" id="my-frd">
                <div class="acc-setting">
                  <h3>My Friend Requests
                  </h3>
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
                        <h3>
                          <?php echo $frq->full_name ;?>
                        </h3>
                      </div>
                      <div class="accept-feat">
                        <ul>
                          <li>
                            <button type="button" class="accept-req" onclick="friendAccept(<?php echo $frq->user_id;?>)">Accept
                            </button>
                          </li>
                          <li>
                            <button type="button" class="close-req">
                              <i class="la la-close">
                              </i>
                            </button>
                          </li>
                        </ul>
                      </div>
                      <!--accept-feat end-->
                    </div>
                    <!--request-detailse end-->
                    <?php }}?>
                  </div>
                  <!--requests-list end-->
                </div>
              </div>
              <div class="product-feed-tab" id="my-frd-list">
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
                        <div class="clearfix">
                        </div>
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
                        <h3>
                          <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
                            <?php echo $frq->full_name;?>
                          </a>
                        </h3>
                    
					
					
					
					
					
					
					
					
				  
				 
				  
				  
				  
                  <?php $idu=$this->session->userdata('user_id');
$ab=	$frq->user_id;		$i=0;	$fi=0;$ui=0; $f=0;$u=0; //if($mydata['user_id']!=$this->session->userdata('user_id')){?>
				  <input type="text" name="pa" id="pa" hidden value="<?php echo $idu; ?>">
				  <?php
				  
				   $query = $this->db->query("select * from  friends  where user_id=$ab and friend_id=$idu and status=0"); 
         $result=$query->result(); //echo $this->db->last_query();
                    foreach ($result as $row) {
            $fi = $row->friend_id;
            
        $ui=$row->user_id;
		
					}
					
					if(($fi==$idu)&&($ui==$ab))
					{
					
					
                     if($result==true)
					 {
						   $i=1;
						  
					  }  
					}
					
					/////////////////
					
					 $query = $this->db->query("select * from  friends  where user_id=$idu and friend_id=$ab and status=0"); 
         $result=$query->result(); //echo $this->db->last_query();
                    foreach ($result as $row) {
            $f = $row->friend_id;
            
        $u=$row->user_id;
		
					}
					
					if(($f==$ab)&&($u==$idu))
					{
					
					
                     if($result==true)
					 {
						   $i=3;
						  
					  }  
					}
					
					/////////
					
					
					
					
					  $query = $this->db->query("select * from  friends  where user_id=$ab and friend_id=$idu and status=1"); 
         $result=$query->result();
                    
                     if($result==true)
					 {
						   $i=2;
						  
					  }


					/*  $query = $this->db->query("select * from  friends  where user_id=$ab and friend_id=$idu and status=0"); 
         $result=$query->result();
                    
                     if($result==true)
					 {
						   $i=3;
						  
					  } 
					  */
					  
					  
					  
					  
				  $query = $this->db->query("select * from  friends  where   ((user_id=$idu and friend_id=$ab) or (user_id=$ab and friend_id=$idu))  "); 
         $result=$query->result();
                    
                     if($result==false)
					 {
						   $i=4;
						  
					  }
                      

				  ?>
				  
				  
				 
				  
				  
				  
				  
				  
				  <?php 
				  
				   if($ab==$idu) {?>
				     <button type="button" id="can" name="can" class="sendreqch " data-id="<?php echo $ab;?>" > <i class="fa fa-user" aria-hidden="true"></i> </i> Friends
        </button>
		<?php
				   }
				   else
				   {
				  
				  if($i==1) {
					  ?>
				  
				
                    <button type="button" id="can" name="can" class="sendreqch canreq" data-id="<?php echo $ab;?>" > <i class="fa fa-window-close" aria-hidden="true"></i> Cancel request
        </button>
		
		
		
				  <?php } else if($i==2) {?>
		
			  
				
                 <span>
											
												<a href="<?php echo base_url(); ?>index.php/Profile/messages?user=<?php echo $ab;  ?>" title="" data-id="<?php echo $ab ;?>" class="follow follow_friend "><i class="fa fa-video-camera cmsgq  vbut" aria-hidden="true"></i></i></a>
												
												</span>
		
		
		  <?php } else if($i==3) {?>
		
		
		
		
                           <button type="button" id="canss" name="canss" class="sendreqch confi" data-id="<?php echo $ab;?>" > <i class="fa fa-check-square-o" aria-hidden="true"></i> Confirm Request
        </button>
		
		
		
                  <?php } else if($i==4) {?>
		
		
		
	
                    <button type="button" id="send" name="send"  class="sendreqch frereq" data-id="<?php echo $ab;?>"  > <i class="fa fa-paper-plane" aria-hidden="true"></i> Send request
        </button>
		
		
		
				   <?php }} ?>
              
		
				  
					
					
					
					  </div>   </div>  
               </div>  
					
              
<?php }} ?>   
                    <!--company_profile_info end-->
                 
              
               </div> </div>  
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
            </div>
            <!--main-ws-sec end-->
          </div>
        </div>
      </div>
      <!-- main-section-data end-->
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
<div class="overview-box" id="overview-box">
  <div class="overview-edit">
    <h3>Overview
    </h3>
    <span>5000 character left
    </span>
    <form method="POST">
      <textarea id="description">
        <?php echo $mydata['description'];?>
      </textarea>
      <button type="button" class="save" id="descriptionsave">Save
      </button>
      <button type="button" class="cancel">Cancel
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
    <h3>Basic Information
    </h3>
    <form method="POST" ACTION="">
      <input type="text" name="full_name" id="full_name" placeholder="Name" value="<?php  echo $mydata['full_name'];?>">
      <!--input type="text" name="nick_name" id="nick_name" placeholder="Nick Name" value="<?php  echo $mydata['nick_name'];?>"-->
      <input type="date" name="dob"  id="dob" placeholder="Date of birth" value="<?php  echo $mydata['dob'];?>">
      <div class="form-group">
        <label class="checkbox-inline">
          <b>Gender 
          </b> :
        </label>
        <?php   $o="";$f="";$m="";
        if($mydata['gender']==1){ 
          $m="checked";
          }else if($mydata['gender']==2){ $f="checked";
          }else { $o="checked";}?>
        <label class="checkbox-inline">
          <input type="radio" name="gender" id="gender" 
                 <?php echo $f;?> style=" width: 15px;
          height: 15px;" value="1" >&nbsp;Female 
        </label>
        <label class="checkbox-inline">
          <input type="radio" name="gender"  id="gender" 
                 <?php echo $m;?> style="width: 15px;
          height: 15px;"  value="2">&nbsp;Male 
        </label>
        <label class="checkbox-inline">
          <input type="radio" name="gender"  id="gender" 
                 <?php echo $o;?> style="width: 15px;
          height: 15px;"  value="3">&nbsp;Other 
        </label>
      </div>
      <div class="form-group">
        <label for="pwd">private /  public:
        </label>
        <label class="switch swtlastm">
          <input type="checkbox" name="visibility"  id="visibility">
          <span class="slider round">
          </span>
        </label>
      </div>
      <button type="button" id="basicinfo" class="save" >Save
      </button>
      <button type="button" class="cancel">Cancel
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
<div class="overview-box" id="education-box">
  <div class="overview-edit">
    <h3>Education
    </h3>
    <form>
      <input type="text" name="school" placeholder="School / University">
      <div class="datepicky">
        <div class="row">
          <div class="col-lg-6 no-left-pd">
            <div class="datefm">
              <input type="text" name="from" placeholder="From" class="datepicker">	
              <i class="fa fa-calendar">
              </i>
            </div>
          </div>
          <div class="col-lg-6 no-righ-pd">
            <div class="datefm">
              <input type="text" name="to" placeholder="To" class="datepicker">
              <i class="fa fa-calendar">
              </i>
            </div>
          </div>
        </div>
      </div>
      <input type="text" name="degree" placeholder="Degree">
      <textarea placeholder="Description">
      </textarea>
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
<div class="overview-box" id="location-box">
  <div class="overview-edit">
    <h3>Location
    </h3>
    <form>
      <div class="datefm">
        <select name="country_id" id="country_id">
          <option>Country
          </option>
          <option value="India">India
          </option>
          <option value="pakistan">Pakistan
          </option>
          <option value="England">England
          </option>
          <option value="China">China
          </option>
          <option value="UAE">UAE
          </option>
          <option value="United Sates">United Sates
          </option>
        </select>
        <i class="fa fa-globe">
        </i>
      </div>
      <div class="datefm">
        <input type="text" name="address"  id="address" placeholder="locations" >	
        <i class="fa fa-map-marker">
        </i>
      </div>
      <button type="button" class="save" id="locationSave" >Save
      </button>
      <button type="button" class="cancel">Cancel
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
<div class="overview-box" id="skills-box">
  <div class="overview-edit">
    <h3>Interest
    </h3>
    <ul>
      <li>
        <a href="#" title="" class="skl-name">HTML
        </a>
        <a href="#" title="" class="close-skl">
          <i class="la la-close">
          </i>
        </a>
      </li>
      <li>
        <a href="#" title="" class="skl-name">php
        </a>
        <a href="#" title="" class="close-skl">
          <i class="la la-close">
          </i>
        </a>
      </li>
      <li>
        <a href="#" title="" class="skl-name">css
        </a>
        <a href="#" title="" class="close-skl">
          <i class="la la-close">
          </i>
        </a>
      </li>
    </ul>
    <form>
      <input type="text" name="skills" placeholder="Skills">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://static.opentok.com/v2/js/opentok.js">
</script>
<script>
  var APIKEY = "<?php echo $apiKey;?>";
  //YOUR_API_KEYdash;
  var SESSIONID = "<?php echo $openSessionId;?>";
  var TOKEN = "<?php echo $open_tokenId;?>";
  //alert(apiKey +' == '+ sessionId);
</script>
<script>
  var site_url='<?php  echo base_url();?>index.php/';
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flatpickr.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js">
</script>
<!--script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js">
</script-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js">
</script>
</body>
</html>
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
<script>

		$('.frereq').click(function() { 
	 var Uid = $("#pa").val();
	var frinedId =$(this).data('id'); 
	
	 
	
	$.ajax({
		type: "POST",
		url:site_url+"User/friendRequest",
		
		data:{Uid:Uid,frinedId:frinedId},
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
			
				
			$("#send" ).html("Cancel request");
			location.reload();
				}

        },

		});	});
		
		 $('.canreq').click(function() { 
	var uid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: site_url+"/Profile/cancel_request",
				data:{uid:uid},
				dataType:'json', 
				success: function(result){
					
					 if(result.status==1){
			
				
			$("#can" ).html("Sent request");
		location.reload();
				}

				},               
		}); 		
			             
				
		}); 
		
		
	$('.frereqfrd').click(function() { 
	 var Uid = $("#pad").val();
	var frinedId =$(this).data('id'); 
	
	 
	
	$.ajax({
		type: "POST",
		url:site_url+"User/friendRequest",
		
		data:{Uid:Uid,frinedId:frinedId},
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
			
				
			$("#sendf" ).html("Cancel request");
			location.reload();
				}

        },

		});	});
		
		 $('.canreqfrd').click(function() { 
	var uid =$(this).data('id'); 
				$.ajax({
			type: "POST",
				url: site_url+"/Profile/cancel_request",
				data:{uid:uid},
				dataType:'json', 
				success: function(result){
					
					 if(result.status==1){
			
				
			$("#canf" ).html("Sent request");
		location.reload();
				}

				},               
		}); 		
			             
				
		}); 


		$('.confi').click(function() { 
	      var Uid = $("#pa").val();
	var frinedId =$(this).data('id'); 
	
		$.ajax({
		type: "POST",
		url:site_url+"User/AccetFriends",
		data:{Uid:Uid,frinedId:frinedId},
		dataType: 'json',
        success: function(data) {
            if(data.status==1){
				
				//$("#"+userId).remove();
				location.reload();

				}

        },

		});		
		}); 

</script>


<script type="text/javascript">
var i=1;
var j=1;
    $(window).scroll(function () {
		
		
        if ($(document).height() <= $(window).scrollTop() + $(window).height()) {
            var fi=i*2;
			var la=(i+1)*2;
		//	alert(fi);	alert(la);
		var frd = $("#frd").val();
		

  $.ajax({
            type: "POST",
            url: "../profileView_limited",
           data:{fi:fi,la:la,frd:frd},
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
