<?php
      $this->load->view('_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="main-content">
					<div class="contact-section col-md-6 text-center">
					<div class="contact-section-head">
						<h3>Kayıt Ol</h3>
					</div>

					<?php if($this->session->flashdata("mesaj")){ ?>
					 		<div class="list-group-item list-group-item-danger">
                      				<p><?=$this->session->flashdata("mesaj")?></p>
                      		</div>
                      		<br><br>
                  			<?php } ?>


					<form class="content-form form-horizontal" method="post" action="<?=base_url()?>home/kayit_ol">
		              <div class="box-body">
		              	<div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Ad Soyad</label>

		                  <div class="col-sm-8">
		                    <input type="adsoyad" name="adsoyad" required class="form-control" id="adsoyad" placeholder="Ad Soyad">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

		                  <div class="col-sm-8">
		                    <input type="email" name="email" required class="form-control" id="inputEmail" placeholder="Email">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputPassword3" class="col-sm-2 control-label">Şifre</label>

		                  <div class="col-sm-8">
		                    <input type="password" name="sifre" required class="form-control" id="inputPassword" placeholder="Şifre">
		                  </div>
		                </div>
		              </div>
		              <!-- /.box-body -->
		              	<div class="contact-form-row box-footer col-md-offset-4">
		            			<input type="submit" value="Kayıt Ol">
		        		</div>

		              <!-- /.box-footer -->
		            </form>
				</div>
			</div>
		</div></div>

<?php
      $this->load->view('_footer');
?>



