<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="tr-TR" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$sayfa?><?=$veri[0]->adi?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?=$veri[0]->description?>" />
<meta name="keywords" content="<?=$veri[0]->keywords?>" />

<!-- Custom Theme files -->
<link href="<?=base_url()?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="<?=base_url()?>">
							<h6>Tek</h6>
							<h1>Bilişim <span>Haber</span></h1>
						</a>
					</div>
				</div>

				<div class="social-icons">
					<li><a href="https://www.facebook.com/elif.kantar.98"><i class="twitter"></i></a></li>
					<li><a href="https://twitter.com/elifciim"><i class="facebook"></i></a></li>
					
					
				</div>

				<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						<ul>
							<li><a href="<?=base_url()?>">Anasayfa</a></li> |   
							<li><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li> |  
							<li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>  |   
							
							<?php
								if($this->session->userdata("uye_session") ){
							?>
								<li>
								<a id="modal_trigger" href="<?=base_url()?>uye/hesabim" class="btn1"><?=$this->session->uye_session["adsoyad"]?></a></li>  |   
								<li><a href="<?=base_url()?>uye/cikis">Çıkış</a></li>

							<?php  }
							else
							{	?>

							<li><a id="modal_trigger" href="#modal" class="btn1">Login</a>

								<div id="modal" class="popupContainer" style="display:none;">
									<header class="popupHeader">
										<span class="header_title">Login</span>
										<span class="modal_close"><i class="fa fa-times"></i></span>
									</header>

									<section class="popupBody">
										<!-- Social Login -->
										<div class="social_login">

											<div class="action_btns">
												<div class="one_half"><a href="#" id="login_form" class="btn">Giriş Yap</a></div>
												<div class="one_half last"><a href="#" id="register_form" class="btn">Kayıt Ol</a></div>
											</div>
										</div>


										<!-- Username & Password Login form -->
										<div class="user_login">
											<form method="post" action="<?=base_url()?>home/login">
												<label>E-mail</label>
												<input type="email" name="email" id="inputEmail" />
												<br />
												<label>Şifre</label>
												<input type="password" name="sifre" id="inputSifre" />
												<br />


												<div class="checkbox">
						                            <input id="remember" type="checkbox" />
						                            <label for="remember">Şifremi Hatırla</label>
					                            </div>

												<div class="action_btns">
													<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Geri</a></div>
													<div class="one_half last"><button type="submit" class="btn btn_red"><font color="#CF0000"><b>Giriş Yap</b></font></button></div>
												</div>
											</form>

												<a href="<?=base_url()?>uye/sifremi_unuttum" class="forgot_password">Şifreni mi Unuttun?</a>
										</div>

											<!-- Register Form -->
										<div class="user_register">
											<form method="post" action="<?=base_url()?>home/kayit_ol">
												<label>Ad Soyad</label>
												<input type="text" name="adsoyad" required/>
												<br />

												<label>E-mail</label>
												<input type="email" name="email" id="inputEmail" required/>
												<br />

												<label>Şifre</label>
												<input type="password" name="sifre" id="inputSifre" required/>
												<br />

												<div class="action_btns">
													<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Geri</a></div>
													<div class="one_half last"><button type="submit" class="btn btn_red"><font color="#CF0000"><b>Kayıt Ol</b></font></button></div>
												</div>
											</form>
										</div>
									</section>
								</div>

								<script type="text/javascript">
									$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

									$(function(){
										// Calling Login Form
										$("#login_form").click(function(){
											$(".social_login").hide();
											$(".user_login").show();
											return false;
										});

										// Calling Register Form
										$("#register_form").click(function(){
											$(".social_login").hide();
											$(".user_register").show();
											$(".header_title").text('Register');
											return false;
										});

										// Going back to Social Forms
										$(".back_btn").click(function(){
											$(".user_login").hide();
											$(".user_register").hide();
											$(".social_login").show();
											$(".header_title").text('Login');
											return false;
										});

									})
								</script>
							</li>

						<?php

						}

						?>


						</ul>
					</div>
					

					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>


			<span class="menu"></span>
			<div class="menu-strip">
				<ul>
					<?php foreach ($kategoriler as $rs) {?>
					<li><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>/<?=$rs->adi?>"><?=$rs->adi?></a></li>
					<?php } ?>
					
				</ul>
			</div>

			<!-- script for menu -->
			<script>
				$( "span.menu" ).click(function() {
					$( ".menu-strip" ).slideToggle( "slow", function() {
					 // Animation complete.
					  });
				});
			</script>
			<!-- script for menu -->