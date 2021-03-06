<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Live Chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#tooltipex").tooltip({
            
        });
    });
	 $(document).ready(function(){
        $("#tooltipex2").tooltip({
            
        });
    });
	 $(document).ready(function(){
        $("#tooltipex3").tooltip({
            
        });
    });
    </script>
</head>


<body>



	<div class="wrapper">

		<header>
			<div class="container">
				<div class="header-data">
				
					<div class="logo">
					<a href="profile-status.html" title=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>
					</div><!--logo end-->
				
					<nav class="icfa">
						<ul>
							<li class="active">
								<a href="public-profile.html" title="">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
									
							Public Profile
								</a>
								
							</li>
								<li>
								<a href=""  data-toggle="modal" data-target="#myModalchat">
									<span><i class="fa fa-video-camera" aria-hidden="true"></i></span>
									Video Chat
								</a>
								
							</li>
						
						
						</ul>
					</nav><!--nav end-->
						<div class="search-barmsg nav-cl">
					
						<ul>
						
							<li>
								<a href="profiles.html"  id="tooltipex"   title="My Friends"><i class="fa fa fa-users" aria-hidden="true"></i></a>
							</li>
						<li>
								
								<a href="#"  id=""  class="not-box-open"  title="Messages"><i class="fa fa-comment" aria-hidden="true"></i></a>
								<div class="notification-box msg">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url(); ?>assets/images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="messages_user.html" title="">View All Messsages</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
							<!--li>
							<a href="messages_user.html"  id="tooltipex2"  class="not-box-open"  title="Messages"><i class="fa fa-comment" aria-hidden="true"></i></a></li-->
							<li>
							<a href="notification.html"  id="tooltipex3"  class="not-box-open"  title="Notification"><i class="fa fa-bell" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info userb">
						
							<img src="<?php echo base_url(); ?>assets/images/resources/user.png" alt="">
							<span class="fa fa-circle msg-top"></span>
						<a href="#" title="">Sam </a>
							<h6>#434465</h6>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
						
							<h3 class="tc"><a href="profile-account-setting.html" title=""><i class="fa fa-cog" aria-hidden="true"></i> &nbsp;Account Setting</a></h3>
						<h3 class="tc"><a href="my-profile.html" title=""><i class="fa fa-user" aria-hidden="true"></i> &nbsp;My Profile</a></h3>
							<h3 class="tc"><a href="sign-in.html" title=""><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;Logout</a></h3>
						</div><!--user-account-settingss end-->
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
       <a href="messages.html" class="bgpopup"><!--i class="fa fa-question-circle" aria-hidden="true"></i--> Stranger&nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>


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
	   <h4><b> John Doe</b> </h4>
	  <button type="submit" class="btn btn-success" ><a href="">
          Sent Request</a>
        </button>
      
      </div>
    
    </div>
  </div>
</div>
