<?php
      $this->load->view('_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>


<div class="blog-main-content">		
	<div class="col-md-9 total-news">
					
	<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<font class="gotosingle" face="cambria" size="6"><b><?=$veri[0]->adi?></b></font>
				<ul>
				<li><span><b><?=$veri[0]->tarih?></b></span></li>
				</ul>
			</div>
			<br>
			<div class="singlepage">
							<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="400"/>
							<p><?=$veri[0]->icerik?></p>
							
			</div>

			  <?php
			foreach($resimler as $rs)
			{
			?>
							<div class="col-md-4 tech">
								<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="250" width="250">
							</div>
             <?php } ?>


			<div class="clearfix"> </div>

		</div>
	
			<div class="clearfix"> </div>
	</div>

		<h3><font color="#000" face="cambria"><b>YORUMLARINIZ</b></h3>
	 <?php
			foreach($yorum as $rs)
			{
		?>

	<ul class="comment-list">
		<li><img src="<?=base_url()?>assets/images/avatar.png" class="img-responsive" alt="">
			<div class="desc">
				<p><?=$rs->tarih?></p><br>
				<p><?=$rs->yorum?></p><br>
				<p><font color="#000" face="cambria"><b><?=$rs->adsoyad?></b></font></p>
			</div>
			<div class="clearfix"></div>
		</li>
	</ul>
	<?php } ?>

	<?php if($this->session->userdata('uye_session')){?>

	<div class="content-form">
	 <form method="post" action="<?=base_url()?>home/yorum_ekle">
	 	<input type="hidden" name="haber_id" value="<?=$veri[0]->Id?>">
	 	<textarea placeholder="Yorumunuz" name="yorum"></textarea>
	 	<input type="submit" value="Gönder"/>
	 </form>
	</div>

	<?php }
	else
	{?>
		<div class="list-group-item list-group-item-danger">
            <p><b><center>Üye yapabilmek için <a href="<?=base_url()?>home/login_ol">üye girişi</a> yapmanız gerekiyor!</center></b></p>
        </div>
    <?php } ?>

</div>	
</div>

<div class="clearfix"></div>	
<div class="clearfix"></div>	
<?php
      $this->load->view('_footer');
      //Controller gereksiz kalabalıktan kurtuldu.
?>