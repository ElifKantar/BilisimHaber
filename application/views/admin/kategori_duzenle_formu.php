<?php
      $this->load->view('admin/_sidebar');
      $this->load->view('admin/_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kategori Düzenleme Menüsü</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori Bilgilerini Güncelleyiniz...</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    


                    <form class="form-horizontal form-label-left" method="post" action="<?=base_url()?>/admin/kategoriler/guncelle/<?=$veri[0]->Id?>">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Adı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="adi" placeholder="Kategori Adı" type="text" value="<?=$veri[0]->adi?>">
                        </div>
                      </div>

                      <br>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="description" placeholder="Description" type="text" value="<?=$veri[0]->description?>">
                        </div>
                      </div>

                      <br>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="keywords" placeholder="Keywords" type="text" value="<?=$veri[0]->keywords?>">
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