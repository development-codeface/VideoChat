<?php
include 'header.php';
$open_tokenId=base64_decode(urldecode($openToken));
$user=$this->session->userdata('user_id');?>
<input type='text' name="uid" id="uid" value='<?php echo $user; ?>' hidden >
<script src="https://static.opentok.com/v2/js/opentok.js"></script>	

<section class=" se_pad min8">
    <div class="container">
      
        <div class="pb-3"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                     
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="card card-body text-white seproc">
                       <div class="row pb-3">
                           <div class="col-md-12">
						     <h4><i class="fa fa-search" aria-hidden="true"></i>  Search Public Profile  </h4>
                               <!--h4><i class="fa fa-search" aria-hidden="true"></i> Search Public Profile  </h4-->
                           </div>
                       </div>
                       
                       <div class="row selab">
			<form method="post" action="<?php echo base_url(); ?>index.php/User/searchFriends" name="logform" class="form-inline inlbg"style="width: 100%;">
		    <div class="col-lg-2">
			<div class="form-group frmlook">
			  <label for="focusedInput">I'm looking for:</label>
			  <div class="custom-select">
   <select name="looking">
              <option value="3">friends</option>
    <option value="2">A guy</option>
    <option value="1">A girl</option>
  </select>
</div>
                                </div>
  
    </div>
	    <div class="col-lg-3">
    <div class="form-group frmlook">
      <label for="focusedInput">Aged:</label>
	  		  <div class="custom-select">
   <select name="age">
               <option>18-20 years old</option>
    <option>20-22 years old</option>
    <option>22-25 years old</option>
  </select>
</div>
     
    </div>
    </div>
	    <div class="col-lg-4">
    <div class="form-group frmlook">
      <label for="focusedInput">From:</label>
	   		  <div class="custom-select">
			<select name="country">
				<option value="0">All</option>
          <?php  foreach($countries as $row)
            { ?>
			
             <option value="<?php echo $row->c_id ?>"><?php echo $row->country ?></option>
           <?php  }
                  ?>
  </select>
</div>
      
    </div>
    </div>
	 
	    <div class="col-lg-2">
    <div class="form-group">
     
  <button type="submit" name="search" class="btn acceptser mt_48">Search</button>
    </div>
    </div>
  </form>
                         
                       </div>
                   </div>

                          </div>
                       
                        </div>
                    </div>
					<div class="col-md-12">
				<div class="acc-setting">
							  			<h3><i class="fa fa fa-users" aria-hidden="true"></i> Friends List </h3>
										
										<div class="requests-list">
										<?php if(!empty($results)){
											$i=1;
											foreach($results as $frq){?>
										

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
							  						<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name ;?></a></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="button" class="accept-req" onclick="friendRequest(<?php echo $frq->user_id;?>)"> <i class="fa fa-check" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
										<?php 
										 $i++;
										 if($i==6){
											 ?>
										
										 
										<?php 	} 
											}
											 
										 } ?>
							  				 </div>
							  			 <!--requests-list end-->	
							  		</div>
			</div>
                </div>
            </div>
        </div>
		
    </div>
</section>
		<!--section class="profile-account-setting">
			<div class="container">
			<div class="row padprs">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="acc-setting">
							  			<h3>Online Friends </h3>
							  			<div class="requests-list">
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img1.png" alt="">
													<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
												
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img2.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img3.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Poonam</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  									<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  						
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img4.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Bill Gates</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img5.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img6.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  			</div>
							  		</div>
			</div>
			</div>
			</div>
		</section-->



	<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
				
						<li><a href="#" title="">Cookies Policy</a></li>
						
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p>Copyright 2018 . All rights reserved</p>
				
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->
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
                <div class="modal-header" id="calleeInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-success btn-sm answerCall" id='startVideo'>
                        <i class="fa fa-video-camera"></i> Video Call
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" id='rejectCall'>
                        <i class="fa fa-times-circle"></i> Reject Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->
        
        <!--Snackbar -->
        <div id="snackbar"></div>
        <!-- Snackbar -->
           
	
<s<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script>
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $openSessionId;?>";
		var TOKEN = "<?php echo $open_tokenId;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>

	

<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);</script>

<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>


</body>

</html>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>


