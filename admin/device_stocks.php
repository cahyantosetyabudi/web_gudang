<?php include('header.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>

				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_Device.php" class="btn btn-info"  id="add" data-placement="right" title="Klik Untuk Tambah Barang" ><i class="icon-plus-sign icon-large"></i> Tambah Barang</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php
	             $count_item=mysql_query("select * from stdevice
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id");
	             $count = mysql_num_rows($count_item);
                 ?>
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Persediaan Barang</div>
                          <div class="muted pull-right">
								Jumlah Semua Barang: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>

                 <h4 id="sc">Daftar Persediaan Barang
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>


<div class="container-fluid">
 <div class="row-fluid">
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="device_stocks.php">Semua</a>
				</li>

			  <?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Dianix' OR dev_name = 'dianix' OR dev_name = 'DIANIX'
			   OR dev_name = 'DNX' OR dev_name = 'DNIX' OR dev_name = 'dts' OR dev_name = 'Dnx'OR dev_name = 'dnx' OR dev_name = '(dianix)'
			   OR dev_name = '(dianix)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
					<a href="Keyboard.php">Dianix&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

			   <?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Dyeing' OR dev_name = 'dyeing'
               OR dev_name = 'dye' OR dev_name = 'dyng' OR dev_name = 'dye' OR dev_name = 'dyeing' OR dev_name = 'Dyeing'
			   OR dev_name = 'dye' OR dev_name = 'Dyeing'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="monitor.php">Dyeing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a></a>
				</li>

			 <?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Scouring' OR dev_name = 'Scouring'
			   OR dev_name = 'scr' OR dev_name = 'scr' OR dev_name = 'scrng' OR dev_name = 'scu'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_supply.php">Scouring&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

				<?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Finishing' OR dev_name = 'Finishing'
			   OR dev_name = 'finish' OR dev_name = 'FINIS' OR dev_name = 'FINISHING' OR dev_name = 'finis'
			   OR dev_name = 'finish' OR dev_name = 'FINIS' OR dev_name = 'fns' OR dev_name = 'finish'
			   OR dev_name = 'fnis' OR dev_name = 'fin' OR dev_name = 'finish' OR dev_name = 'finish'
			   OR dev_name = 'finish' OR dev_name = 'Finishing' OR dev_name = 'fins'OR dev_name = 'Finishing'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="vga.php">Finishing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

				</ul>
	</div>
</div>
</div>

<div class="container-fluid">
  <div class="row-fluid">
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_all_stock.php" class="btn btn-info" id="print" data-placement="left" title="Klik untuk Print"><i class="icon-print icon-large"></i> Cetak</a>
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>
         </div>
      </div>
    </div>
</div>

<div class="block-content collapse in">
  <div class="span12">
  	<form action="" method="post" id="filter-form">
  		<SELECT name="bulan">
  			<option value="01"> Januari</option>
  			<option value="02"> Februari</option>
  			<option value="03"> Maret </option>
  			<option value="04"> April</option>
  			<option value="05"> Mei</option>
  			<option value="06"> juni</option>
  			<option value="07"> juli</option>
  			<option value="08"> Agustus</option>
  			<option value="09"> September</option>
  			<option value="10"> Oktober</option>
  			<option value="11"> November</option>
  			<option value="12"> Desember</option>
  		</SELECT>

  		<select name="tahun">
  			<?php
  			$mulai = date('Y') - 50 ;
  			for($i =$mulai;$i<$mulai + 100; $i++){
  				$sel = $i == date('Y') ? ' selected="selected"' : '';
  				echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
  			}
  			?>
  		</select>
      <input class="btn btn-success" type="submit" name="btn-filter" id="btn-filter" value="Filter">
    </form>
  </div>
  <div id="table-barang">
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
      <thead>
          <tr>
            <th class="empty"></th>
            <th>TANGGAL </th>
            <th>Tipe Barang</th>
            <TH>NO FAKTUR</TH>
            <th>Deskripsi Barang</th>
            <th>Kode Barang</th>
            <th>Supplier BARANG</th>
            <th>Model Barang</th>
            <TH>QTY BARANG</TH>
            <th>Status Barang</th>
            <th>Edit Barang</th>
            <th class="empty"></th>
          </tr>
      </thead>
      <tbody id="table-body">
        <?php
          $sql = mysql_query("select * from stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id");
          while($row = mysql_fetch_array($sql)){
          $id = $row['id'];
          $dev_id = $row['dev_id'];
        ?>
        <tr>
          <td>
            <?php
              $id = $row['id'];
              $dev_id = $row['dev_id'];
              $device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
              $dev=mysql_fetch_assoc($device_query2);
              if ($row['dev_status']=='Baru') {
                  echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
              } else if ($row['dev_status']=='terpakai') {
                  echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
              } else if($row['dev_status']=='Diperbaiki') {
                  echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
              } else {
                  echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
              };
            ?>
          </td>
          <td><?php echo $row['dev_tanggal']; ?></td>
          <td><?php echo $row['dev_name']; ?></td>
          <td><?php echo $row['dev_faktur']; ?></td>
          <td><?php echo $row['dev_desc']; ?></td>
          <td><?php echo $row['dev_serial']; ?></td>
          <td><?php echo $row['dev_brand']; ?></td>
          <td><?php echo $row['dev_model']; ?></td>
          <td><?php echo $row['dev_qty']; ?></td>
          <td>
            <?php
              $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
              $dev=mysql_fetch_assoc($device_query1);
              if($row['dev_status']=='Baru') {
                echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
              } else if($row['dev_status']=='terpakai') {
                echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
              } else if($row['dev_status']=='Diperbaiki') {
                echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
              } else {
                echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
              };
            ?>
          </td>
          <?php include('toolttip_edit_delete.php'); ?>
          <td class="empty" width="80"><a rel="tooltip"  title="Edit Barang" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit</i></a></td>
          <td></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>

</div>
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btn-filter').click(function(e) {
      e.preventDefault();
      $.ajax({
        method: "post",
        url: "filter_barang.php",
        data: $('#filter-form').serialize(),
        success: function(response) {
          $('#example').html(response);
        }
      });
    });
  });
</script>
 </body>
</html>
