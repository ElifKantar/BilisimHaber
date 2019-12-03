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
                <h3>Haber Ekleme</h3>
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
                    <h2>Haberi Giriniz...</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                     <form class="form-horizontal form-label-left" method="post" action="<?=base_url()?>/admin/haber/ekle_kaydet">

                      <div class="item form-group">
                        <label class="control-label col-md-3">Başlık</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="adi" placeholder="Başlık" type="text">
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Kategorisi</label>
                        <div class="col-md-7">
                          <select class="form-control" name="kategori">

                            <?php foreach ($kategoriler as $rs) {  ?>

                                <option value="<?=$rs->Id?>"><?=$rs->adi?></option>

                            <?php  }  ?>

                          </select>
                        </div>  
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">İçerik</label>
                        <div class="col-md-7">
                          <textarea name="icerik" rows=10 cols=100> </textarea>
                          <script>
                            CKEDITOR.replace('editor');
                          </script>
                        </div>
                      </div>

                      <br/>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Haberin Açıklaması</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="aciklama" placeholder="Açıklama" type="text">
                        </div>
                      </div>

                      <br/>


                      <div class="item form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="description" placeholder="Description" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3">Keywords</label>
                        <div class="col-md-7">
                          <input class="form-control col-md-7 col-xs-12" name="keywords" placeholder="Keywords" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3">Grubu</label>
                        <div class="col-md-7">
                          <select class="form-control" name="grubu">
                            <option>guncel</option>
                            <option>genel</option>
                          </select>
                        </div>  
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Vazgeç</button>
                          <button type="submit" class="btn btn-success">Kaydet</button>
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