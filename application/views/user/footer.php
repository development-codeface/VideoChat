<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
							<li><a href="<?php echo base_url(); ?>index.php/Profile/cookies" title="">Cookies</a></li>
				
						<li><a href="<?php echo base_url(); ?>index.php/Profile/terms_conditions" title="">User Terms & Privacy Policy</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/Profile/howit_work">How it works </a></li>
						<li><a href="" data-toggle="modal" data-target="#Contact">Contact Us</a></li>
					</ul>
					<p>Copyright © 2018 IntBuddy. All rights reserved.</p>
				
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->
	  <div class="modal fade" id="Contact" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content contentimg conwhite">
          <div class="modal-header">
            <h4 class="modal-title vich"> 
              <h4 class="plsechcon">Contact us
              </h4>
            </h4>
            <button type="button" class="close cloimg clotop" data-dismiss="modal">
              <img src="<?php echo base_url(); ?>assets/images/close-button-.png">
            </button>
          </div>
          <div class="modal-body infoh">
		  
            <h1>
			<p>"We love to see your feedback so that we can improve Int Buddy."</p>
			 Please email us at : <b> info@intbuddy.com</b></h1>
			<a href="<?php echo base_url(); ?>index.php/user/profile" title="">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
              </a>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript" >


    var box = $('.ed-options');
    var link = $('.ed-opts-open');
    $(document).click(function() {
        box.hide(); //box1.hide();
    });
    box.click(function(e) {
        e.stopPropagation();
    });
	$(".ed-opts-open").on("click", function(){
	$(this).parent('.form_wrapper').find(box).show();
});

</script>
<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom-file-input.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>
