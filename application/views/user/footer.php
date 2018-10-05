<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="<?php echo base_url(); ?>index.php/Profile/privacy_policy" title="">Privacy Policy</a></li>
				
						<li><a href="<?php echo base_url(); ?>index.php/Profile/terms_conditions" title="">Terms Conditions</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/Profile/contact" title="">Contact </a></li>
					</ul>
					<p>Copyright © 2018 IntBuddy. All rights reserved.</p>
				
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->
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

<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>
