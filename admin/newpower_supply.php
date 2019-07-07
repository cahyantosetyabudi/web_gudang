<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>

				<div class="span9" id="content">
                     <div class="row-fluid">

					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php
	             $count_item=mysql_query("select * from stdevice
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
	           and dev_status = 'Baru' and dev_name = 'Scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'SCOURING'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scoring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scrng'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scoring'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scourng'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scr'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scouring'
			   ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>

				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Daftar Barang Masuk Scouring</div>
							 <div class="muted pull-right">
								Jumlah Buku Kwitansi Baru: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>

				<h4 id="sc">Jumlah Barang Masuk Scouring
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
				<li class="">
					<a href="newdevice.php">Semua</a>
				</li>

			  <?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				  where NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
	             and dev_status = 'Baru' and dev_name = 'Dianix'
				OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'DIANIX'
		        OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'dianix'
		        OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'dianx'
		        OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'dianx'
		        OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'dnx'
		        OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = '(dianix)'
		        OR NOT EXISTS
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = '(dianx)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
					<a href="newKeyboard.php">Dianix&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

			 <?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
	             and dev_status = 'Baru' and dev_name = 'Dyeing'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'DYEING'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'dyeing'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'dyng'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'dyng'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'dyeing'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'Dyeing'
		         OR NOT EXISTS
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'dye'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmonitor.php">Dyeing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

			  <?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
	           and dev_status = 'Baru' and dev_name = 'Scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'SCOURING'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scoring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scrng'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scoring'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scourng'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scr'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scouring'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_supply.php">Scouring&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

				<?php
	           $count_item=mysql_query("select * from stdevice
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
	           and dev_status = 'Baru' and dev_name = 'Finishing'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'FINISHING'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'finishing'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'finish'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'fnish'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'finis'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'fnishing'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'finis'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'finishing'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'finishing'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'fnishing'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'fns'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'fnsh'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newvga.php">Finishing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

				</ul>
	</div>
</div>
</div>

<div class="block-content collapse in">
<div class="span12">
<form id="send" method="post">
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Nama Lokasi</label>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error());
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
	</div>

	  <div class="control-group">
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Send"><i class="icon-share">Menetapkan Lokasi</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>

	  </div>
 </div>
</div>

<div class="container-fluid">
  <div class="row-fluid">
     <div class="empty">
	     <div class="pull-right">
		   <a href="printbkukwi.php" class="btn btn-info" id="print" data-placement="left" title="Klik untuk Print"><i class="icon-print icon-large"></i> Cetak</a>
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
</form>


<div class="control-group">
  <form action="" method="post" id="filter-form">
    <SELECT name="bulan">
      <option value="01"> Januari</option>
      <option value="02"> Februari</option>
      <option value="03"> Maret </option>
      <option value="04"> April</option>
      <option value="05"> Mei</option>
      <option value="06"> Juni</option>
      <option value="07"> Juli</option>
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

  	<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
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
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>

		<?php
	    $device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
	           and dev_status = 'Baru' and dev_name = 'Scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'SCOURING'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scoring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scrng'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scouring'
		      OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'scoring'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scourng'
		       OR NOT EXISTS
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scr'
		       OR NOT EXISTS
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'scouring'
			   ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>

		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_tanggal'];  ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_faktur']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php echo $row['dev_qty']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>
		</tr>

	<?php } ?>

</tbody>
</table>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btn-filter').click(function(e) {
      e.preventDefault();
      $.ajax({
        method: "post",
        url: "filter_barang_scouring.php",
        data: $('#filter-form').serialize(),
        success: function(response) {
          $('#example').html(response);
        }
      });
    });
  });
</script>

<script>
		jQuery(document).ready(function(){
		jQuery("#send").submit(function(e){
			e.preventDefault();{
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){

			$.jGrowl("Device Successfully Assign", { header: 'Device Assign' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);

			}

		 });

	   }
	});
});
</script>

</div>
</div>

</div>
</div>
</div>


<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>
