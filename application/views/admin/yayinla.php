<?php
      $this->load->view('admin/_sidebar');
      $this->load->view('admin/_header');
      //Controller gereksiz kalabalıktan kurtuldu.
?>


<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Eklenen Haberler Listesi</h3>
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
                      <font color="#D81B60" size="3"><?=$this->session->flashdata("mesaj")?></font>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Haber No</th>
                          <th>Üye Adı</th>
                          <th>Kategori</th>
                          <th>Başlık</th>
                          <th>Açıklama</th>
                          <th>Resim</th>
                          <th>Durum</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                          
                        </tr>
                      </thead>

                      <?php
                          $hno=0;
                          foreach($veri as $rs)
                          {
                            $hno++;
                      ?>

                      <tbody>
                        <tr>
                          <th style="row"><?=$hno?></th>
                          <td><?=$rs->uyeadi?></td>
                          <td><?=$rs->katadi?></td>
                          <td><?=$rs->adi?></td>
                          <td><?=$rs->aciklama?></td>
                          <td>
                          <?php if($rs->resim) 
                          { ?>
                            <a href="<?=base_url()?>admin/uye_haberleri/resim_yukle/<?=$rs->Id?>"> 
                              <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="25"></a>
                              
                          <?php } else { ?>
                          <a href="<?=base_url()?>admin/uye_haberleri/resim_yukle/<?=$rs->Id?>" class="btn btn-warning btn-xs"> Resim Yükle </a>
                          <?php } ?>
                          </td>
                          <th><?=$rs->durum?></th>
                          <td><a href="<?=base_url()?>admin/uye_haberleri/duzenle/<?=$rs->Id?>" class="btn btn-info btn-xs">
                              <i class="fa fa-pencil"></i> Detay </a>
                          </td>
                          <td><a href="<?=base_url()?>admin/uye_haberleri/yayınla?>" class="btn btn-danger btn-xs" 
                                 onclick="return confirm ('Yayınlamak istediğinden emin misin?')">
                              <i class="fa fa-trash-o"></i> Sil </a>
                          </td>
                        </tr>
                      </tbody>

                      <?php } ?>

                    </table>

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