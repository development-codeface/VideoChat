<?php if(!empty($results)){
$i=1;
foreach($results as $frq){
	
if(($frq->user_id)!=($this->session->userdata('user_id'))) {
	?>
			  <div class="col-lg-2 col-md-2 col-sm-2 col-12">
							<div class="company_profile_info">
								<div class="company-up-info companyfont">								
                <div class="clearfix"></div>
                <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"> <div>
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
										 <h3>
                      
                        <?php echo $frq->full_name ;?>
                     
                    </h3> </div></a>
									 <ul>
                      <li>
                        <button type="button" class="accept-req" onclick="friendRequest(<?php echo $frq->user_id;?>)"> 
                          <i class="fa fa-check" aria-hidden="true">
                          </i> Sent request
                        </button>
                      </li>
                    </ul>
								</div>
			
							</div><!--company_profile_info end-->
						</div>
						                <?php 
$i++;
if($i==6){
?>
	<?php }	 
}}
} else{
echo "<div class='alert alert-danger' >No results </div> ";
}?>


	
            