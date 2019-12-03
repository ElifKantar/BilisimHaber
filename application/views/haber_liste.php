<?php
      $this->load->view('_header');
      $this->load->view('uye_sidebar');
      //Controller gereksiz kalabalıktan kurtuldu.
?>
    
    <div class="content-form col-md-8"><br><br><br>
      <h3>Haberlerim</h3>
      <a href="<?=base_url()?>uye_haber/ekle" class="btn btn-success">
                      <i class="fa fa-plus-square"></i>&nbsp;&nbsp;Haber Ekle</a>
                      <br>
                      <br>
              
      <?php if($this->session->flashdata("mesaj")){ ?>
            <div class="list-group-item list-group-item-danger">
                          <p><?=$this->session->flashdata("mesaj")?></p>
                        </div>

                          <br>
            <?php } ?>


             <div class="box">
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">No</th>
                          <th>Kategori</th>
                          <th>Başlık</th>
                          <th>Açıklama</th>
                          <th>Resim</th>
                          <th>Durum</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                        </tr>

                        <?php
                          $hno=0;
                          foreach($veriler as $rs)
                          {
                            $hno++;
                      ?>


                        <tr>
                          <td><?=$hno?></td>
                          <td><?=$rs->katadi?></td>
                          <td><?=$rs->adi?></td>
                          <td><?=$rs->aciklama?></td>
                          <td>
                          <?php if($rs->resim) 
                          { ?>
                            <a href="<?=base_url()?>uye_haber/resim_yukle/<?=$rs->Id?>"> 
                              <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="25"></a>
                              
                          <?php } else { ?>
                          <a href="<?=base_url()?>uye_haber/resim_yukle/<?=$rs->Id?>" class="btn btn-warning btn-xs"> Resim Yükle </a>
                          <?php } ?>
                          </td>

                          <td><?=$rs->durum?></td>

                          <td><a href="<?=base_url()?>uye_haber/duzenle/<?=$rs->Id?>" class="btn btn-info btn-xs">
                              <i class="fa fa-pencil"></i> Düzenle </a>
                          </td>
                          <td><a href="<?=base_url()?>uye_haber/sil/<?=$rs->Id?>" class="btn btn-danger btn-xs" 
                                 onclick="return confirm ('Silmek istediğinden emin misin?')">
                              <i class="fa fa-trash-o"></i> Sil </a>
                          </td>
                        </tr>

                     <?php } ?>
            
                      </tbody>
                   </table>
                    </div>
                    
                  </div>




    </div>
    <div class="clearfix"></div>
  </div>
</div>


<?php
      $this->load->view('_footer');
?>
