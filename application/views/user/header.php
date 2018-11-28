<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>INT BUDDY
    </title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css">
	  <script>var BASEURL = '<?php echo base_url(); ?>';</script>
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/select7.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select7.js"></script>
   
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lightbox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="https://www.jqueryscript.net/demo/Simple-Lightweight-jQuery-Input-Mask-Plugin-Masked-input/dist/jquery.masked-input.js">
    </script>
    <?php $rss=$this->users_model->GetMyData($this->session->userdata('user_id')); ?>
    <script>
      var USERNAME  = '<?php echo $rss['full_name'];?>';
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
    <script>
      $(document).ready(function() {
        $('.pub_jav').click(function() {
          var uid =$(this).data('id');
          $.ajax({
            type: "POST",
            url: "../Profile/update_privacy",
            data:{
              uid:uid}
            ,
            dataType:"text", 
            success: function(result){
            }
          }
                );
        }
                           );
        $('.priv_jav').click(function() {
          var uid =$(this).data('id');
          $.ajax({
            type: "POST",
            url: "../Profile/update_privacy_private",
            data:{
              uid:uid}
            ,
            dataType:"text", 
            success: function(result){
            }
          }
                );
        }
                            );
      }
                       );
    </script>
  </head>
  <body>
    <div class="modal fade" id="myModalchat" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content contentimg">
          <div class="modal-header">
            <h4 class="modal-title vich"> 
              <h4 class="plsech">Please select  chat
              </h4>
            </h4>
            <button type="button" class="close cloimg" data-dismiss="modal">
              <img src="<?php echo base_url(); ?>assets/images/close-button-.png">
            </button>
          </div>
          <div class="modal-body modb">
            <?php	$user_id=$this->session->userdata('user_id'); ?>
            <a href="<?php echo base_url(); ?>index.php/Profile/friends" class="str_btn">
              <i class="fa fa fa-users" aria-hidden="true">
              </i> Friends  
            </a> 
            <a href="<?php echo base_url(); ?>index.php/Profile/messages_stranger" title="" data-id="<?php echo $user_id;?>" class="follow follow_friend str_btn str_frd"> 
              <i class="fa fa-user-circle-o" aria-hidden="true">
              </i> Stranger   
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <header id="heading">
        <div class="container">
          <div class="col-lg-12">
            <div class="logo">
              <a href="<?php echo base_url(); ?>index.php/user/profile" title="">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
              </a>
            </div>
            <!--logo end-->
            <nav class="icfa">
			<div class="menu-btn menures">
             <a href="#" title="">
               <i class="fa fa-window-close" aria-hidden="true"></i>
             </a>
           </div>
              <ul>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/user/profileSearch" title="">
                    <i class="fa fa-user-circle-o" aria-hidden="true">
                    </i>  Public Profile
                  </a>
                </li>
                <li>
                  <!--a href="<!?php echo base_url(); ?>index.php/user/videochat"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span>	Video Chat</a-->
                  <a href=""  data-toggle="modal" data-target="#myModalchat"> 
                    <i class="fa fa-video-camera" aria-hidden="true">
                    </i> 	Video Chat
                  </a>
                </li>
              </ul>
            </nav>
            <!--nav end-->
            <div class="menu-btn">
              <a href="#" title="">
                <i class="fa fa-bars">
                </i>
              </a>
            </div>
		
            <!--menu-btn end-->
				<?php
			$uid=$this->UserId = $this->session->userdata('user_id');
			
			    $query=$this->db->query("select visibility from user_profile where user_id=$uid");

              $result=$query->result_array();
                    
                    foreach($result as $value){ 
					$status=$value['visibility'];
					
					}
					?>
            <div class="user-account">        
          <div class="togl_div">
            <?php $currentStatus = ($status=='true')? "1" : "2";?> 
            <?php $checked = ($currentStatus== 1) ? "checked=''" :  ""; ?>
            <input type="checkbox" name="checkbox1" id="checkbox1" value="<?php echo $currentStatus?>" class="ios-toggle" <?php echo $checked?> >
            <label for="checkbox1" class="checkbox-label" data-off="Private" data-on="Public" ></label>
          </div>         
	
              <div class="search-barmsg nav-cl">
                <div class="ed-opts  form_wrapper notmsg">
                  <a href="<?php echo base_url(); ?>index.php/Profile/friends"  data-tooltip="My Friends" class="tooltip-bottom">
                    <i class="fa fa fa-users" aria-hidden="true">
                    </i>
                  </a>
                </div>
				<?php
				
				$query = $this->db->query("select count(messages) as cs  from notification where fri_id=$uid and status=0");
        foreach ($query->result() as $row) {
            $cnt = $row->cs;
            
        }
       
				
				?>
				
                <div class="ed-opts  form_wrapper ">
				<?php if($cnt!=0){?>
				<span class="count"><?php echo $cnt ?></span>
				<?php } ?>
                  <a   href ="#" id="mes" data-tooltip="Notifications" class=" not-box-open ed-opts-open follow_friends tooltip-bottom notchange" data-id="<?php echo $user_id;?>" >
                    <i class="fa fa-bell  "  aria-hidden="true">
                    </i>
                  </a>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
                  <ul class="ed-options not1" id="myModal">
<div class="nott-list">

<div class="notfication-details " id="noth">
                                              
                                          </div>
<div class="view-all-nots">
<a href="<?php echo base_url(); ?>index.php/Profile/Notifications" title="" class="viewpad">View All Notifications</a>
</div>
</ul>

















                </div>
                </ul>
            </div>
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">
                <?php
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
                <span class="fa fa-circle msg-top">
                </span > 
			
                <?php //echo $rss['full_name'];?>
                <?php  echo $rss['full_name'];?> 
				
              </button>
              <div id="myDropdown" class="dropdown-content">
                <a href="<?php echo base_url(); ?>index.php/Profile/myProfile" title="">
                  <i class="fa fa-user" aria-hidden="true">
                  </i> &nbsp;My Profile
                </a>
			   <a href="<?php echo base_url(); ?>index.php/Profile/settings" title="">
                  <i class="fa fa-cog" aria-hidden="true">
                  </i> &nbsp;Account Setting
                </a>
               
                <a href="<?php echo base_url(); ?>index.php/Auth/logout" title="">
                  <i class="fa fa-sign-out" aria-hidden="true">
                  </i> &nbsp;Logout
                </a>
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
        </div>
        <!--header-data end-->
        </div>
      </header>
	  <div class="fakeloader"></div>

    <!--header end-->
    <!-- Modal -->
    <div class="modal fade" id="myModalchat" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content contentimg">
          <div class="modal-header">
            <h4 class="modal-title vich">&nbsp;
            </h4>
            <button type="button" class="close cloimg" data-dismiss="modal">
              <img src="<?php echo base_url(); ?>assets/images/close-button-.png">
            </button>
          </div>
          <h4 class="plsech">Please Select  Chat
          </h4>
          <div class="modal-body modb">
            <a href="Friends_mess_chat.html" class="bgpopup">
              <!--i class="fa fa fa-users" aria-hidden="true"></i--> Friends &nbsp;&nbsp;
              <i class="fa fa-angle-right" aria-hidden="true">
              </i>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="messages.html" class="bgpopup bgpopups">
              <!--i class="fa fa-question-circle" aria-hidden="true"></i--> Stranger&nbsp;&nbsp; 
              <i class="fa fa-angle-right" aria-hidden="true">
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header"style="    display: block;">
            <button type="button" class="close" data-dismiss="modal">&times;
            </button>
          </div>
          <div class="modal-body johnc">
            <img src="<?php echo base_url(); ?>assets/images/resources/pf-icon1.png" alt="">
            <h4>
              <b> John
              </b> 
            </h4>
            <button type="submit" class="btn btn-success" >
              <a href="">
                Sent Request
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src="https://static.opentok.com/v2/js/opentok.js">
    </script>
    <script type="text/javascript" >
      
      $('.str_frd').click(function() {
        var uid =$(this).data('id');
        $.ajax({
          type: "POST",
          url: "../Profile/messages_stranger",
          data:{
            uid:uid}
          ,
          dataType:"text", 
          success: function(result){
            var resultObj = JSON.parse(result)
            }
        });
      });
			// Not required for now			 
	    $('#checkbox2').change(function () {					
        var status = $(this).val();
        //var uid =$(this).data('id');
        $.ajax({
            type: "POST",
            url: "../Profile/update_privacy",
            data:{profilestatus:status},
            dataType:"text", 
            success: function(result){
              //location.reload();
              
            }
        });
      }); 
 $('#checkbox1').change(function () {				
    var status = $(this).val();
	  //var uid =$(this).data('id');
    $.ajax({
      type: "POST",
      url: "../Profile/update_privacy",
      data:{profilestatus:status},
      dataType:"text", 
      success: function(result){
        privacyChangeCallback(result);
        //location.reload();
      }
	
 }); });

 function privacyChangeCallback(result){

    var status = JSON.parse(result);
    var publicStatus = "2";
    if(status.visibility == "true"){
      publicStatus   = "1"
    }
    $('#checkbox1').val(publicStatus);
 }
 
 
 
 
 
      $('.follow_friends').click(function() {
          var uid =$(this).data('id');
          $.ajax({
            type: "POST",
            url: "../Profile/notifications_tab",
            data:{
              uid:uid}
            ,
            dataType:"text", 
            success: function(result){
				//alert(result);
				
         $("#noth").html(result);
            }
          }
                );
        }
                                 );
    </script>

	<div id="myOverlay"></div>
<div id="loadingGIF"><img src="../../assets/images/sp.gif" /></div>
