<?php
      $this->load->view('admin/_sidebar');
      $this->load->view('admin/_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Haber Düzenleme Menüsü</h3>
              </div>
            </div>

              
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Haberi Güncelleyiniz...</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    


                    <form class="form-horizontal form-label-left" method="post" action="<?=base_url()?>/admin/haber/guncelle/<?=$veri[0]->Id?>">

                      <div class="item form-group">
                        <label class="control-label col-md-3">Başlık</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="adi" placeholder="Başlık" type="text" value="<?=$veri[0]->adi?>">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Kategorisi</label>
                        <div class="col-md-7">
                          <select class="form-control" name="kategori">
                            <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>

                            <?php foreach ($veriler as $rs) {  ?>

                                <option value="<?=$rs->Id?>"><?=$rs->adi?></option>

                            <?php  }  ?>

                          </select>
                        </div>  
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">İçerik</label>
                        <div class="col-md-7">
                          <textarea name="icerik" rows=10 cols=100><?=$veri[0]->icerik?></textarea>
                          <script>
                            CKEDITOR.replace('editor');
                          </script>  
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Haberin Açıklaması</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="aciklama" placeholder="Açıklama" type="text" value="<?=$veri[0]->aciklama?>">
                        </div>
                      </div>

                      <br/>

                      
                       <div class="item form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="description" placeholder="Description" type="text" value="<?=$veri[0]->description?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Keywords</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="keywords" placeholder="Keywords" type="text" value="<?=$veri[0]->keywords?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3">Grubu</label>
                        <div class="col-md-7">
                          <select class="form-control" name="grubu">
                            <option><?=$veri[0]->grubu?></option>
                            <option>guncel</option>
                            <option>genel</option>
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

<!-- CK Editor -->
<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('icerik')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>