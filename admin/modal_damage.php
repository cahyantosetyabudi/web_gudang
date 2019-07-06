	<div id="repair<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Perbaiki Barang</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success">Apakah Anda Ingin Memperbaiki Barang Ini?</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="repair.php<?php echo '?id='.$id; ?>">Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Keluar</button>
		</div>
    </div>
	
	
	<div id="Dump<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Barang Keluar / Dibuang</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success">Anda Ingin Membuang Barang Ini?</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="dump.php<?php echo '?id='.$id; ?>">Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Keluar</button>
		</div>
    </div>
	

