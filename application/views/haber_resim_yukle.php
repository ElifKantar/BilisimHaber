<?php
      $this->load->view('_header');
      $this->load->view('uye_sidebar');
      //Controller gereksiz kalabalıktan kurtuldu.
?>


    
    <div class="content-form col-md-6"><br><br><br>
      <h3>Haber Resim Ekleme</h3>
              
      <?php if($this->session->flashdata("mesaj")){ ?>
            <div class="list-group-item list-group-item-danger">
                          <p><?=$this->session->flashdata("mesaj")?></p>
                        </div>

                          <br>
            <?php } ?>

            <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" 
                          action="<?=base_url()?>uye_haber/resim_kaydet/<?=$id?>">

                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" required type="file" name="resim" placeholder="Göz at">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="contact-form-row box-footer col-md-offset-3">
                          <input type="submit" value="Resim Ekle">
                      </div>

                    </form>




    </div>
    <div class="clearfix"></div>


<?php
      $this->load->view('_footer');
?>

