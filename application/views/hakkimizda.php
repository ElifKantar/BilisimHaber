<?php
      $this->load->view('_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>


<div class="clearfix"></div>
			<div class="main-content">		
				<div class="about-section">
					<div class="col-md-12 contact-section-head">
							<h3>HAKKIMIZDA</h3>
							<p><h4><?=$veri[0]->hakkimizda?></h4></p>
						</div>
						<div class="clearfix"></div>
				</div>
			</div>



<?php
      $this->load->view('_footer');
?>
