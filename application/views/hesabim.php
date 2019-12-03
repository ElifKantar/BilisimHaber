<?php
      $this->load->view('_header');
      $this->load->view('uye_sidebar');
      //Controller gereksiz kalabalıktan kurtuldu.
?>


		
		<div class="content-form col-md-6"><br><br><br>
			<h3>Uye Hesap Bilgileri</h3>
					 		
			<?php if($this->session->flashdata("mesaj")){ ?>
					  <div class="list-group-item list-group-item-danger">
                      		<p><?=$this->session->flashdata("mesaj")?></p>
                      	</div>

                      		<br>
            <?php } ?>
			<form class="form-horizontal" method="post" action="<?=base_url()?>uye/uye_guncelle">
		        <div class="box-body">
		            <div class="form-group">
		                <label for="inputEmail3" class="col-sm-3 control-label">Ad Soyad</label>

		                <div class="col-sm-9">
		                    <input type="adsoyad" value="<?=$uye[0]->adsoyad?>" name="adsoyad" required class="form-control" id="adsoyad" placeholder="Ad Soyad">
		                  </div>
		            </div>

		            <div class="form-group">
		                <label for="inputPassword3" class="col-sm-3 control-label">E-mail</label>

		                <div class="col-sm-9">
		                    <input type="email" name="email" required value="<?=$uye[0]->email?>" class="form-control" id="inputEmail" placeholder="E-mail">
		                </div>
		            </div>


		            <div class="form-group">
		                  <label for="inputPassword3" class="col-sm-3 control-label">Şifre</label>

		                <div class="col-sm-9">
		                    <input type="password" name="sifre" required value="<?=$uye[0]->sifre?>" class="form-control" id="inputPassword" placeholder="Şifre">
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="inputPassword3" class="col-sm-3 control-label">Telefon</label>

		                <div class="col-sm-9">
		                    <input type="tel" name="tel" value="<?=$uye[0]->tel?>" class="form-control" id="tel" placeholder="Telefon">
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="inputPassword3" class="col-sm-3 control-label">Şehir</label>

		                <div class="col-sm-9">
		                    <input type="sehir" name="sehir" value="<?=$uye[0]->sehir?>" class="form-control" id="inputEmail" placeholder="Şehir">
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="inputPassword3" class="col-sm-3 control-label">Adres</label>

		                <div class="col-sm-9">
		                    <input type="adres" name="adres" value="<?=$uye[0]->adres?>" class="form-control" id="inputEmail" placeholder="Adres">
		                </div>
		            </div>



		        </div>
		              <!-- /.box-body -->
		        <div class="contact-form-row box-footer col-md-offset-3">
		            <input type="submit" value="Güncelle" name="guncelle">
		        </div>





		</div>
		<div class="clearfix"></div>
	</div>
</div>


<?php
      $this->load->view('_footer');
?>
