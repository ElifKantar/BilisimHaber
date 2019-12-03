<?php
      $this->load->view('admin/_sidebar');
      $this->load->view('admin/_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Üye Düzenleme Menüsü</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Üye Bilgilerini Güncelleyiniz...</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    


                    <form class="form-horizontal form-label-left" method="post" action="<?=base_url()?>/admin/uyeler/guncelle/<?=$veri[0]->Id?>">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adı Soyadı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="adsoyad" placeholder="Adı Soyadı" type="text" value="<?=$veri[0]->adsoyad?>">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="email" required placeholder="E-mail" type="email" value="<?=$veri[0]->email?>">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Şifre</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="sifre" required class="form-control col-md-7 col-xs-12" placeholder="Şifre" value="<?=$veri[0]->sifre?>">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="telefon"  name="tel" class="form-control col-md-7 col-xs-12" placeholder="Telefon" value="<?=$veri[0]->tel?>">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="adres" class="form-control col-md-7 col-xs-12" placeholder="Adres" value="<?=$veri[0]->adres?>">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Şehir</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="sehir">
                            <option><?=$veri[0]->sehir?></option>
                            <option>Ankara</option>
                            <option>İstanbul</option>
                            <option>Bursa</option>
                            <option>Karabük</option>
                            <option>İzmir</option>
                          </select>
                        </div>  
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Yetki</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="yetki" value="<?=$veri[0]->yetki?>">
                            <option><?=$veri[0]->yetki?></option>
                            <option>editor</option>
                            <option>uye</option>
                          </select>
                        </div>  
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Durum</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="durum">
                            <option><?=$veri[0]->durum?></option>
                            <option>aktif</option>
                            <option>pasif</option>
                          </select>
                        </div>  
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>
                    </form>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php
      $this->load->view('admin/_footer');
?>