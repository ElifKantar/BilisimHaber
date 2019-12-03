<?php
      $this->load->view('admin/_sidebar');
      $this->load->view('admin/_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>


<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Site Ayarları</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#tab_content1" role="genel-tab" data-toggle="tab" aria-expanded="false">Genel</a>
                        </li>
                        <li role="presentation">
                          <a href="#tab_content2" role="email-tab" data-toggle="tab" aria-expanded="false">Email</a>
                        </li>
                        <li role="presentation">
                          <a href="#tab_content3" role="sosyal-tab" data-toggle="tab" aria-expanded="true">Sosyal</a>
                        </li>
                        <li role="presentation">
                          <a href="#tab_content4" role="hak-tab" data-toggle="tab" aria-expanded="true">Hakkımızda</a>
                        </li>
                        <li role="presentation">
                          <a href="#tab_content5" role="iletisim-tab" data-toggle="tab" aria-expanded="true">İletişim</a>
                        </li>
                      </ul>

                      <form method="post" action="<?=base_url()?>/admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>" 
                                  class="form-horizontal form-label-left">


                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="genel-tab">
                          
                          <div class="x_title">
                            <h2>Genel Ayarlar</h2>
                            <div class="clearfix"></div>
                          </div>

                          <div class="x_content">
                            <br>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Adı</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="adi" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->adi?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="description" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->description?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="keywords" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->keywords?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="adres" class="date-picker form-control col-md-7 col-xs-12" value="<?=$veri[0]->adres?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="tel" class="date-picker form-control col-md-7 col-xs-12" value="<?=$veri[0]->tel?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Şehir</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="sehir" class="date-picker form-control col-md-7 col-xs-12" value="<?=$veri[0]->sehir?>">
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-success">Güncelle</button>
                                </div>
                              </div>
                            
                          </div>
                      </div>


                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="email-tab">

                        <div class="x_title">
                            <h2>E-mail Ayarları</h2>
                            <div class="clearfix"></div>
                          </div>

                          <div class="x_content">
                            <br>
                            
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Smtp Server</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="smtpserver" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->smtpserver?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Smtp E-mail</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="smtpemail" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->smtpemail?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Smtp Port</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="smtpport" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->smtpport?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sifre</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="password" class="date-picker form-control col-md-7 col-xs-12" value="<?=$veri[0]->password?>">
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-success">Güncelle</button>
                                </div>
                              </div>
                          </div>


                          
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="sosyal-tab">
                         
                         <div class="x_title">
                            <h2>Sosyal Medya Ayarları</h2>
                            <div class="clearfix"></div>
                          </div>

                          <div class="x_content">
                            <br>
                            
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="facebook" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->facebook?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">İnstagram</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="instagram" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->instagram?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="twitter" class="form-control col-md-7 col-xs-12" value="<?=$veri[0]->twitter?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pinterest</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  type="text" name="pinterest" class="date-picker form-control col-md-7 col-xs-12" value="<?=$veri[0]->pinterest?>">
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-success">Güncelle</button>
                                </div>
                              </div>
                          </div>

                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="hak-tab">

                        <div class="x_title">
                            <h2>Hakkımızda Ayarları</h2>
                            <div class="clearfix"></div>
                          </div>

                          <div class="x_content">
                            <br>
 
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea name="hakkimizda" rows="10" cols="100"><?=$veri[0]->hakkimizda?></textarea>
                                  <script>
                                  CKEDITOR.replace('hakkimizda');
                                  </script>
                                </div>
                              </div>

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-success">Güncelle</button>
                                </div>
                              </div>
                          </div>
                          
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="iletisim-tab">
                         
                          <div class="x_title">
                            <h2>İletişim Ayarları</h2>
                            <div class="clearfix"></div>
                          </div>

                          <div class="x_content">
                            <br>
 
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea name="iletisim" rows="10" cols="100"><?=$veri[0]->iletisim?></textarea>
                                  <script>
                                  CKEDITOR.replace('iletisim');
                                  </script>
                                </div>
                              </div>

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-success">Güncelle</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                         
                      </div>
                    </div>
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
