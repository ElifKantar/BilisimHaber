<?php
      $this->load->view('_header');
      $this->load->view('uye_sidebar');
      //Controller gereksiz kalabalıktan kurtuldu.
?>

<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>


		
		<div class="content-form col-md-8"><br><br><br>
			<h3>Haberlerim</h3>
					 		
			<?php if($this->session->flashdata("mesaj")){ ?>
					  <div class="list-group-item list-group-item-danger">
                      		<p><?=$this->session->flashdata("mesaj")?></p>
                      	</div>

                      		<br>
            <?php } ?>
			<form class="form-horizontal" method="post" action="<?=base_url()?>uye_haber/kaydet">
		        <div class="box-body">
		            <div class="form-group">
		                <label for="inputEmail3" class="col-sm-3 control-label">Haber Adı*</label>

		                <div class="col-sm-9">
		                    <input type="adi" name="adi" required="required" class="form-control" id="adi" placeholder="Haber Adı">
		                  </div>
		            </div>

		           
		            <div class="form-group">
		                <label for="inputEmail3" class="col-sm-3 control-label">Kategorisi*</label>
		                <div class="col-sm-9">
			                <select class="form-control" name="kategori">
			                <?php foreach ($kategoriler as $rs) {  ?>

		                                <option value="<?=$rs->Id?>"><?=$rs->adi?></option>

		                            <?php  }  ?>
			                </select>
		                </div>
		            </div>


		            <div class="item form-group">
                        <label class="control-label col-sm-3">İçerik*</label>
                        <div class="col-sm-9">
                          <textarea name="icerik" required="required" rows=10 cols=100> </textarea>
                          <script>
                            CKEDITOR.replace('editor');
                          </script>
                        </div>
                      </div>

		            <div class="form-group">
		                <label for="inputEmail3" class="col-sm-3 control-label">Açıklama*</label>

		                <div class="col-sm-9">
		                    <input type="aciklama" name="aciklama" required="required" class="form-control" id="aciklama" placeholder="Açıklama">
		                  </div>
		            </div>


			        <div class="form-group">
			                <label for="inputPassword3" class="col-sm-3 control-label">Description*</label>

			                <div class="col-sm-9">
			                    <input type="description" name="description" required="required" class="form-control" id="description" placeholder="Description">
			                </div>
			        </div>

		            <div class="form-group">
		                <label for="inputPassword3" class="col-sm-3 control-label">Keywords*</label>

		                <div class="col-sm-9">
		                    <input type="keywords" name="keywords" required="required" class="form-control" id="inputEmail" placeholder="Keywords">
		                </div>
		            </div>

		            

		            <div class="item form-group">
                        <label class="control-label col-md-3">Grubu*</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="grubu">
                            <option>guncel</option>
                            <option>genel</option>
                          </select>
                        </div>  
                      </div>
		              <!-- /.box-body -->
		        <div class="contact-form-row box-footer col-md-offset-3">
		            <input type="submit" value="Ekle">
		        </div>

			</form>



		</div>

		<div class="clearfix"></div>
	</div>
</div>
<div class="clearfix"></div>

<?php
      $this->load->view('_footer');
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
