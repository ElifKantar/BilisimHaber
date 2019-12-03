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
                <h3>Yorum Listesi</h3>
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
                          <th>Sıra No</th>
                          <th>Yorum Sahibi</th>
                          <th>Haber Id</th>
                          <th>Yorum</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                          
                        </tr>
                      </thead>

                      <?php
                          $sno=0;
                          foreach($veriler as $rs)
                          {
                            $sno++;
                      ?>

                      <tbody>
                        <tr>
                          <th scope="row"> <?=$sno?> </th>
                          <td> <?=$rs->adsoyad?> </td>
                          <td> <?=$rs->haber_id?> </td>
                          <td> <?=$rs->yorum?> </td>
                          <td><a href="<?=base_url()?>admin/yorum/duzenle/<?=$rs->Id?>" class="btn btn-info btn-xs">
                              <i class="fa fa-pencil"></i> Düzenle </a>
                          </td>
                          <td><a href="<?=base_url()?>admin/yorum/sil/<?=$rs->Id?>" class="btn btn-danger btn-xs" 
                                 onclick="return confirm ('Silmek istediğinden emin misin?')">
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