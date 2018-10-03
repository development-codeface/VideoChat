<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>INT BUDDY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Simple-Lightweight-jQuery-Input-Mask-Plugin-Masked-input/dist/jquery.masked-input.js"></script>
  
  <script>
        var place =0;
        function changeColor() {
            // your color list
            var colorList = ["rgba(232, 155, 155, 0.79)","white"];
            // set the color
			
            document.getElementById("heading").style.backgroundColor = colorList[place]; 
            place++;
            // if place is greater than the list size, reset
            if (place ===colorList.length) place=0; 
        }

    </script>
 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
<script>
window.onload = function(){
	var popup = document.getElementById('popup');
    var overlay = document.getElementById('backgroundOverlay');
    var openButton = document.getElementById('openOverlay');
    document.onclick = function(e){
        if(e.target.id == 'backgroundOverlay'){
            popup.style.display = 'none';
            overlay.style.display = 'none';
        }
        if(e.target === openButton){
         	popup.style.display = 'block';
            overlay.style.display = 'block';
        }
    };
};
</script>

 
</head>


<body>
  <div class="modal fade" id="myModalchat" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content contentimg">
        <div class="modal-header">
		  <h4 class="modal-title vich"> <h4 class="plsech">Please select  chat</h4></h4>
          <button type="button" class="close cloimg" data-dismiss="modal"><img src="<?php echo base_url(); ?>assets/images/close-button-.png"></button>
        
        </div>
		
        <div class="modal-body modb">
	<?php	$user_id=$this->session->userdata('user_id'); ?>
         <a href="<?php echo base_url(); ?>index.php/Profile/friends" class="fr_btn"><i class="fa fa fa-users" aria-hidden="true"></i> Friends  </a> 
        <a href="<?php echo base_url(); ?>index.php/Profile/messages_stranger?user=<?php echo $user_id ?>" title="" data-id="<?php echo $user_id;?>" class="follow follow_friend"></i> Stranger   </a>


        </div>
        
      </div>
      
    </div>
  </div>


	<div class="wrapper">

		<header id="heading">
			<div class="container">
				<div class="col-lg-12">
				
					<div class="logo">
					<a href="<?php echo base_url(); ?>index.php/user/profile" title=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>
					</div><!--logo end-->
				
					<nav class="icfa">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>index.php/user/profileSearch" title="">
								<i class="fa fa-user-circle-o" aria-hidden="true"></i>  Public Profile
								</a>
								
							</li>
								<li>
							<!--a href="<!?php echo base_url(); ?>index.php/user/videochat"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span>	Video Chat</a-->
								<a href=""  data-toggle="modal" data-target="#myModalchat"> <i class="fa fa-video-camera" aria-hidden="true"></i> 	Video Chat</a>
								<!--<a href=""  data-toggle="modal" data-target="#myModalchat">
									<span><i class="fa fa-video-camera" aria-hidden="true"></i></span>
									Video Chat
								</a>-->
								
							</li>
						
						
						</ul>
					</nav><!--nav end-->
						
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
		<label class="switch">
 <input type="checkbox" checked>
 <span class="slider round" onclick="changeColor()" ></span>
 <span class="absolute-no" onclick="changeColor()" >Private</span>
</label>
					<div class="search-barmsg nav-cl">
					
						<!--ul>
						
							<li>
							 
								<a href="<?php echo base_url(); ?>index.php/Profile/friends"  data-tooltip="My Friends" class="tooltip-bottom"><i class="fa fa fa-users" aria-hidden="true"></i></a>
							</li>
						<li>
						
						
						
						<?php
						 $user_id=$this->session->userdata('user_id');
					
						 ?>
							
								
								<a   id="mes" class="not-box-open follow_friend" data-id="<?php echo $user_id;?>"  title="Messages"><i class="fa fa-comment" aria-hidden="true"></i></a>
								<div class="notification-box msg" >
									<div class="nt-title">
									
										
											
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
									
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img1.png" alt="">
												
												
										
												
												
							  				</div>
							  				<div class="notification-info" id="notification_chat" >
							  				<input type="text" name="noty" id="noty" >
								
							  				</div>
						  				</div>
						  				
						  			
						  				<div class="view-all-nots">
						  					<a href="<?php echo base_url(); ?>index.php/Profile/messagesUser" title="">View All Messsages</a>
						  				</div>
									</div>
								</div>
							</li>
							
							<li>
							<a href="<?php echo base_url(); ?>index.php/Profile/notifications"   data-tooltip="Notifications" class="tooltip-bottom"  title="Notification"><i class="fa fa-bell" aria-hidden="true"></i></a>
							</li>
						</ul-->
						
						<ul>
	
							<!--li>
							 
								<a href="<?php echo base_url(); ?>index.php/Profile/friends"  data-tooltip="My Friends" class="tooltip-bottom"><i class="fa fa fa-users" aria-hidden="true"></i></a>
							</li-->
							
						<!--li>
								
								<a href="#"  id=""  class="not-box-open"  title="Messages"><i class="fa fa-comment" aria-hidden="true"></i></a>
								<div class="notification-box msg">
									<div class="nt-title">
									
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="<?php echo base_url(); ?>index.php/Profile/messagesUser" title="">View All Messsages</a>
						  				</div>
									</div>
								</div>
							</li-->
							<!--li>
							<a href="messages_user.html"  id="tooltipex2"  class="not-box-open"  title="Messages"><i class="fa fa-comment" aria-hidden="true"></i></a></li-->
							<!--li>
							<a href="<?php echo base_url(); ?>index.php/Profile/notifications"   data-tooltip="Notifications" class="tooltip-bottom"  title="Notification">
							
							<i class="fa fa-comment" aria-hidden="true"></i>
							
							</a>
							</li-->
								<div class="ed-opts  form_wrapper notmsg">
								<a href="<?php echo base_url(); ?>index.php/Profile/friends"  data-tooltip="My Friends" class="tooltip-bottom"><i class="fa fa fa-users" aria-hidden="true"></i></a>
												
												</div>
								<!--div class="ed-opts  form_wrapper notmsg">
													<a href="#" title="" class="ed-opts-open">
													<i class="fa fa-comment" aria-hidden="true"></i>
													</a>
										
													<ul class="ed-options not1" id="myModal">
													
																<div class="nott-list ">
										<div class="notfication-details ">
							  				<div class="noty-user-img">
							  				<img src="<?php echo base_url(); ?>assets/images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  				<img src="<?php echo base_url(); ?>assets/images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  				<h3><a href="<?php echo base_url(); ?>index.php/Profile/messages" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="<?php echo base_url(); ?>index.php/Profile/messagesUser" title="" class="viewpad">View All Messsages</a>
						  				</div>
									</div>
																										</ul>
												</div-->
										
												
			<div class="ed-opts  form_wrapper notmsg">
			<a   id="mes" class="not-box-open follow_friend ed-opts-open" data-id="<?php echo $user_id;?>"  title="Messages"><i class="fa fa-bell" aria-hidden="true"></i></a>
												
										
													<ul class="ed-options not1" id="myModal">
													<div class="nott-list">
									
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img1.png" alt="">
												
												
										
												
												
							  				</div>
							  				<div class="notification-info" id="notification_chat" >
							  				<input type="text" name="noty" id="noty" >
								
							  				</div>
						  				</div>
						  				
						  			<div class="view-all-nots">
						  					<a href="<?php echo base_url(); ?>index.php/Profile/messagesUser" title="" class="viewpad">View All Notifications</a>
						  				</div>
						  				
															
																										</ul>
												</div>
						</ul>
					</div>
						
								<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">


			
						 <?php
						
						 $rss=$this->users_model->GetMyData($this->session->userdata('user_id'));
						    if($rss['profile_pic']==""){?>
							
							
							<?php if($user['gender']==1)
											{
												?>
											<img src="<?php echo base_url(); ?>assets/images/resources/malemaleavatar.png" alt="" class="user-info1">
											<?php
											}
											else
											{ ?>
												<img src="<?php echo base_url(); ?>assets/images/resources/femalemaleavatar.png" alt="" class="user-info1">
										<?php	} ?>
							
							
							
							
							
						
							<?php } else{?>
							<img src="<?php echo base_url() .'uploads/profile_pic/'.$rss['profile_pic'] ;?>" alt="" class="user-info1">
							<?php }?>
							<span class="fa fa-circle msg-top"></span> <?php //echo $rss['full_name'];?>
						<?php if($rss['nick_name']!=""){ echo $rss['nick_name'] ;}else { echo $rss['full_name'];}?> 
							<i class="la la-sort-down"></i>
						
					
</button>
  <div id="myDropdown" class="dropdown-content">

						
							<a href="<?php echo base_url(); ?>index.php/Profile/settings" title=""><i class="fa fa-cog" aria-hidden="true"></i> &nbsp;Account Setting</a>
						<a href="<?php echo base_url(); ?>index.php/Profile/myProfile" title=""><i class="fa fa-user" aria-hidden="true"></i> &nbsp;My Profile</a>
							<a href="<?php echo base_url(); ?>index.php/Auth/logout" title=""><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;Logout</a>
					
  </div>
</div>
					</div>
					<!--div class="user-accountast">
						
<div class="toggle-btn">

													<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
												</div>
												<p class="pvpw">Private / Public</p>
					</div-->
				
				</div><!--header-data end-->
			</div>
		</header><!--header end-->
 <!-- Modal -->

  <div class="modal fade" id="myModalchat" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content contentimg">
        <div class="modal-header">
		  <h4 class="modal-title vich">&nbsp;</h4>
          <button type="button" class="close cloimg" data-dismiss="modal"><img src="<?php echo base_url(); ?>assets/images/close-button-.png"></button>
        
        </div>
		 <h4 class="plsech">Please Select  Chat</h4>
        <div class="modal-body modb">
		
         <a href="Friends_mess_chat.html" class="bgpopup"><!--i class="fa fa fa-users" aria-hidden="true"></i--> Friends &nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="messages.html" class="bgpopup bgpopups"><!--i class="fa fa-question-circle" aria-hidden="true"></i--> Stranger&nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>


        </div>
        
      </div>
      
    </div>
  </div>

  
  	<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"style="    display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body johnc">
	   <img src="<?php echo base_url(); ?>assets/images/resources/pf-icon1.png" alt="">
	   <h4><b> John</b> </h4>
	  <button type="submit" class="btn btn-success" ><a href="">
          Send Request</a>
        </button>
      
      </div>
    
    </div>
  </div>
  
 
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script type="text/javascript" >
	
	$(document).ready(function() {
	
		$('.follow_friend').click(function() { 
		var uid =$(this).data('id');


	$.ajax({
				type: "POST",
					url: "../Profile/notifications_tab",
					
					data:{uid:uid},
					dataType:"text", 
					success: function(result){
					var resultObjt = JSON.parse(result)


			if(result.notifications){
			$.each(json.notifications, function(i, value){
			if(i < 5){
			$('#noty').html("<div>"+value.messages+"<br/>"+value.profile_pic+"<br/>"+value.gender+"<br/></div>");
			//$('#not').html(result.notifications);
			}
				   
			   });
			}
							}

										
					});}); 
				}); 
	

  </script>
