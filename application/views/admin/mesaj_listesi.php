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
                <h3>Mesaj Listesi&nbsp;&nbsp;&nbsp;<font color="#D81B60" size="3"><?=$this->session->flashdata("mesaj")?></font></h3>

              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Adı Soyadı</th>
                          <th>E-Mail</th>
                          <th>Telefon</th>
                          <th>Mesaj Konusu</th>
                          <th>Mesaj</th>
                          <th>Tarih</th>
                          <th>IP</th>
                          <th>Durum</th>
                          <th>Notunuz</th>
                          <th>Detay</th>
                          <th>Sil</th>
                          
                        </tr>
                      </thead>

                      <?php
                          foreach($veriler as $rs)
                          {
                      ?>

                      <tbody>
                        <tr>
                          <td> <?=$rs->adsoyad?> </td>
                          <td> <?=$rs->email?>   </td>
                          <td> <?=$rs->tel?>     </td>
                          <td> <?=$rs->konu?>   </td>
                          <td> <?=$rs->mesaj?>   </td>
                          <td> <?=$rs->tarih?>   </td>
                          <td> <?=$rs->IP?>   </td>
                          <td> <?=$rs->durum?>   </td>
                          <td> <?=$rs->adminnotu?>   </td>

                          <td><a href="<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?>" class="btn btn-info btn-xs">
                              <i class="fa fa-pencil"></i> Detay </a>
                          </td>
                          <td><a href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>" class="btn btn-danger btn-xs" 
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