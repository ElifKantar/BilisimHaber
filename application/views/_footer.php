
<div class="footer text-center">
				<div class="bottom-menu">
					<ul>

					<?php foreach ($kategoriler as $rs) {?>
					<li><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>"><?=$rs->adi?></a></li> |  
					<?php } ?>
			
					</ul>
				</div>
				<div class="copyright text-center">
					<p>Tek Bilişim Haber | Designed by  Elif Kantar</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>