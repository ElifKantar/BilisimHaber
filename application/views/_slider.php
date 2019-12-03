<div class="clearfix"></div>
			<div class="main-content">		
				<div class="col-md-12 total-news">
					<div class="slider">
						<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>

						 <div class="conference-slider">

						 	<ul class="conference-rslide" id="conference-slider">

							<?php
							foreach($guncel as $rs){
							?>

							  <li ><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="475" width="500">
							  	<center><div class="breaking-news-title col-md-1">
								<p><?=$rs->adi?></p>
							  </div></center></a>
							  </li>

							<?php } ?>

							</ul>
							
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
								
							<?php
							foreach($guncel as $rs){
							?>
							  
							  <li><a href="#"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="102" width="100"></a></li>
							
							<?php } ?>

						    </ul>

			                <!-- Slideshow 3 -->

							
						</div> 
					</div>



					 	
