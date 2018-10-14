
              <h3 class="mg64">
                 Search Results 
              </h3>
			  <div class="clearfix"></div>
              <div class="col-lg-12">
              <div class="requests-list">
                <?php if(!empty($results)){
$i=1;
foreach($results as $frq){
	
if(($frq->user_id)!=($this->session->userdata('user_id'))) {
	?>

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
                    <h3>
                      <a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>">
                        <?php echo $frq->full_name ;?>
                      </a>
                    </h3>
                  </div>
                  <div class="accept-feat">
                    <ul>
                      <li>
                        <button type="button" class="accept-req" onclick="friendRequest(<?php echo $frq->user_id;?>)"> 
                          <i class="fa fa-check" aria-hidden="true">
                          </i> Send request
                        </button>
                      </li>
                    </ul>
                  </div>
                  <!--accept-feat end-->
                </div>
				
                <!--request-detailse end-->
                <?php 
$i++;
if($i==6){
?>
	<?php }	 
}}
} else{
echo "<div class='alert alert-danger' >No results </div> ";
}?>
              </div>
              </div>
              <!--requests-list end-->	
            