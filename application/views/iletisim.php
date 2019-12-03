<?php
      $this->load->view('_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="main-content">		
				<div class="contact-section">
					<div class="contact-section-head">
						<h3>Iletisim</h3>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.5095715147336!2d32.65331321532111!3d41.210664579280746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk+%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1515275734944" frameborder="0" style="border:0"></iframe>
					</div>
					<div class="contact-form-bottom">
						<div class="content-form col-md-4">
							<h3>ADRES</h3>
							<address><?=$veri[0]->iletisim?></address>
						</div>
						<div class="content-form col-md-8">
					 		<h3>BIZE YAZIN</h3>
					 		
					 		<?php if($this->session->flashdata("mesaj")){ ?>
					 		<div class="list-group-item list-group-item-success">
                      				<strong>İşlem : </strong><?=$this->session->flashdata("mesaj")?><br>
                      				<strong>Email : </strong><?=$this->session->flashdata("email_sent")?>
                      		</div>
                  			<?php } ?>

                  			<script>

							function validateForm() 
							{
								var x = document.forms["myForm"]["adsoyad"].value;
								    if (x == "") 
								    {
								        alert("Ad Soyad alanı dolu olmalı");
								        return false;
								    }
							}
								
							</script>

								<form method="post" name="myForm" action="<?=base_url()?>home/mesaj_kaydet" onsubmit="return validateForm()">
										<input type="text" name="adsoyad"  placeholder="Ad Soyad" required/>
										<input type="text" name="email" placeholder="E-mail" id="inputEmail" required/>
										<input type="text" name="tel" placeholder="Telefon" required/>
										<input type="text" name="konu" placeholder="Mesaj Konusu" required/>
										<textarea name="mesaj" placeholder="Mesajınız" cols=50 required></textarea>
										<input type="submit" value="GÖNDER"/>
				   				</form>
						</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>


<?php
      $this->load->view('_footer');
?>
