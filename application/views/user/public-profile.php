<?php
include 'header.php' ;
$open_tokenId=base64_decode(urldecode($openToken));?>	
<script src="https://static.opentok.com/v2/js/opentok.js"></script>	
<section class="banner-img1 text-white py-55 min8">
    <div class="container ">
      
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                     
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane tabbanc fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="card card-body text-white sepro">
                       <div class="row pb-3">
                           <div class="col-md-12">
                               <h4><i class="fa fa-search" aria-hidden="true"></i> Search Public Profile  </h4>
                           </div>
                       </div>
                       
                       <div class="row">
           <form method="post" action="<?php echo base_url(); ?>index.php/User/searchFriends" name="logform" class="form-inline inlbg"style="width: 100%;">
				
		    <div class="col-lg-3">
			<div class="form-group frmlook">
			  <label for="focusedInput">I'm looking for:</label>
			  <div class="custom-select">
				<select name="looking">
				<option value="3">Friends</option>
				<option value="2">A guy</option>
				<option value="1">A girl</option>
			</select>
</div>
</div>
  
    </div>
	    <div class="col-lg-4">
    <div class="form-group frmlook">
      <label for="focusedInput">Age:</label>
	  		  <div class="custom-select">
  <select name="age">
               <option>18-20 years old</option>
    <option>20-22 years old</option>
    <option>22-25 years old</option>
  </select>
</div>
     
    </div>
    </div>
	    <div class="col-lg-5">
    <div class="form-group frmlook ">
      <label for="focusedInput">From:</label>
	   		  <div class="custom-select ">
  <select name="country" id="country" >
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
	 
	    <div class="col-lg-12">
    
     
  <p class="c_accet"> <button type="submit" name="search"  class="btn acceptser  mt_48">Search</button></p>
    </div>
   
  </form>
                         
                       </div>
                   </div>

                          </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
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



	<?php
include 'footer.php';?> <!--Modal to show that we are calling-->
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
		
	
	
	<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>

	
