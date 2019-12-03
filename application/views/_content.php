<div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket">
									<h3>Haberler</h3>

									<?php
										foreach($haberler as $rs)
										{
									?>

									<div class="c-sports-main">
											<div class="sc-image">
												<a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											</div>
											<div class="c-text">
												<p>HABERLER</p>
												<a class="reu"><?=$rs->tarih?></a>
												<p><b><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><?=$rs->adi?></a></b></p>
											</div>
											<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
									<br>
									<?php
								}
								?>
									</div>
								</div>



							<div class="s-grid-right">
								<div class="cricket">
									<h3>Teknoloji</h3>

									<?php
										foreach($teknoloji as $rs)
										{
									?>

									<div class="c-sports-main">
											<div class="sc-image">
												<a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"/></a>
											</div>
											<div class="c-text">
												<p>Teknoloji</p>
												<a class="reu"><?=$rs->tarih?></a>
												<p><b><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><?=$rs->adi?></a></b></p>
											</div>
											<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
									<br>
									<?php
								}
								?>
									
										
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						  <div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket">
									<h3>Sosyal Medya</h3>
									
										<?php
										foreach($sosyal as $rs)
										{
									?>

									<div class="c-sports-main">
											<div class="sc-image">
												<a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											</div>
											<div class="c-text">
												<p>Sosyal Medya</p>
												<a class="reu"><?=$rs->tarih?></a>
												<p><b><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><?=$rs->adi?></a></b></p>
											</div>
											<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
									<br>
									<?php
								}
								?>
									</div>
								</div>
							<div class="s-grid-right">
								<div class="cricket">
									<h3>Internet</h3>
									
										<?php
										foreach($internet as $rs)
										{
									?>

									<div class="c-sports-main">
											<div class="sc-image">
												<a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											</div>
											<div class="c-text">
												<p>İnternet</p>
												<a class="reu"><?=$rs->tarih?></a>
												<p><b><a href="<?=base_url()?>home/haber_detay/<?=$rs->Id?>"><?=$rs->adi?></a></b></p>
											</div>
											<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
									<br>
									<?php
								}
								?>
										
									</div>
								</div>

								<div class="clearfix"></div>
							</div>
					
						  </div>
				</div>	
				<div class="clearfix"></div>
				<br>