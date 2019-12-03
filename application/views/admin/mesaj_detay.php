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
                <h3>Mesaj Detay Bilgileri</h3>
                    
              </div>
              <br>

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
                        <tr>
                          <th>Adı Soyadı</th>
                             <td><?=$veri[0]->adsoyad?></td>
                        </tr>

                        <tr>
                          <th>E-Mail</th>
                             <td><?=$veri[0]->email?></td>
                        </tr>

                        <tr>
                          <th>Telefon</th>
                             <td><?=$veri[0]->tel?></td>
                        </tr>

                        <tr>
                          <th>Mesaj Konusu</th>
                             <td><?=$veri[0]->konu?></td>
                        </tr>

                        <tr>
                          <th>Mesaj</th>
                             <td><?=$veri[0]->mesaj?></td>
                        </tr>

                        <tr>
                          <th>Tarih</th>
                             <td><?=$veri[0]->tarih?></td>

                        <tr>
                          <th>IP</th>
                             <td><?=$veri[0]->IP?></td>

                        <tr>
                          <th>Notunuz</th>
                             <td>
                              <form method="post" action="<?=base_url()?>/admin/mesajlar/guncelle/<?=$veri[0]->Id?>">
                                <textarea name="adminnotu" rows=10 cols=10><?=$veri[0]->adminnotu?></textarea>
                                <p>&nbsp;<p>
                                <input class="btn btn-danger" type="submit" value="GÜNCELLE"/>
                           </form>
                            </td>
                        </tr>

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