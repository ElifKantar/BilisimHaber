<?php
      $this->load->view('admin/_sidebar');
      $this->load->view('admin/_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Haber Resim Galerisi Ekleme</h3>
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
                    <h2>Eklenecek Resmi Seçiniz...</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    *Yüklenecek resim dosyası türler (gif-jpg-png) max boyutlar: 1024x1024, boyut: 1000KB
                    <br/>
                    <br/>

                    <?php if($this->session->flashdata("mesaj")){ ?>

                    <div class="list-group-item list-group-item-info">
                      <p><?=$this->session->flashdata("mesaj")?></p></div>

                    <?php } ?>

                    <br/>
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" 
                          action="<?=base_url()?>/admin/haber/galeri_kaydet/<?=$id?>">

                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" required type="file" name="resim" placeholder="Göz at" onchange="this.form.submit()">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <button type="submit" class="btn btn-success">Resmi Yükle</button>
                        </div>
                      </div>
                    </form>
                    <br/>
                    <br/>
                    <?php foreach ($veriler as $rs)  
                    {  ?>
                    <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100">
                    <a href="<?=base_url()?>admin/haber/galeri_sil/<?=$id?>/<?=$rs->Id?>" onclick="return confirm ('Silmek istediğinden emin misin?')"><b>Sil</b></a>
                    <?php }  ?>
                    <br/>
                    <br/>
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