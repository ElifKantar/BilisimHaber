<?php
      $this->load->view('_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>


<div class="blog-main-content">		
    <div class="col-md-9 total-news">
        <div class="content">
			<div class="grids">

				<?php
				foreach ($veriler as $rs) {

				?>


				<div class="grid box">
					<div class="grid-header">
						<a class="gotosingle" href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><font face="cambria" size="6"><b><?=$rs->adi?></b></font></a>
						<ul>
						<li><span><a href="<?=base_url()?>"></a>&nbsp;<?=$rs->tarih?></span></li>
						</ul>
					</div>
					<div class="grid-img-content">
						<a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" class="blog" height="200" width="200"/></a>
						<p><font size="3"><?=$rs->aciklama?></font><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>">...</a></p>
						<div class="clearfix"> </div>
					</div>
					<div class="comments">
					<ul>
						<li><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>assets/images/views.png" title="view" /></a></li>
						<li><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>assets/images/likes.png" title="likes" /></a></li>
						<li><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>assets/images/link.png" title="link" /></a></li>
						<li><a class="readmore" href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>">Devamını Oku</a></li>
					</ul>
					</div>
		        </div>

		        <?php } ?>


			<div class="clearfix"> </div>
		</div>
			<div class="clearfix"> </div>
	</div>
			<div class="clearfix"> </div>
		
					<div class="clearfix"> </div>
					
			</div>
				</div>	
				<div class="col-md-3 side-bar">
					<div class="l_g_r">
						<div class="categories">
							<h4>Kategoriler</h4>
							
							<?php foreach ($kategoriler as $rs) {?>
					            <h6><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>/<?=$rs->adi?>"><?=$rs->adi?></a></h6>
							<?php } ?>
					    </div>						

					</div>
				</div>
				<div class="clearfix"></div>

<?php
      $this->load->view('_footer');
      //Controller gereksiz kalabalıktan kurtuldu.
?>
