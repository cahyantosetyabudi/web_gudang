<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('damage_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	            $count_item=mysql_query("select * from stdevice 
			 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'terpakai' and dev_name = 'Dyeing' OR dev_status = 'terpakai' and dev_name = 'dye'
			   OR dev_status = 'terpakai' and dev_name = 'Dyng' OR dev_status = 'terpakai' and dev_name = 'DYEING' OR dev_status = 'terpakai' and dev_name = 'Dyng'
			   OR dev_status = 'terpakai' and dev_name = 'dyei' OR dev_status = 'terpakai' and dev_name = 'dyng' OR dev_status = 'terpakai' and dev_name = 'Dyng'
			   OR dev_status = 'terpakai' and dev_name = 'Dyeing'
			   ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Daftar Pengeluaran Dyeing</div>
                          <div class="muted pull-right">
								Jumlah Barang: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Daftar Pengeluaran Dyeing
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
					<a href="damage.php">Semua</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Dianix' and dev_status = 'terpakai' OR dev_name = 'Dianix'  and dev_status = 'terpakai'
			   OR dev_name = 'DIANIX'  and dev_status = 'terpakai' OR dev_name = 'dianx'  and dev_status = 'terpakai' OR dev_name = 'dianx'  and dev_status = 'terpakai'
			   OR dev_name = 'dinx'  and dev_status = 'terpakai'  OR dev_name = 'Dianix'  and dev_status = 'terpakai' OR dev_name = 'dnx' and dev_status = 'terpakai'
			   OR dev_name = 'dnx'  and dev_status = 'terpakai' OR dev_name = 'dnx'  and dev_status = 'terpakai'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>												
				<li class="active">
					<a href="damage_keyboard.php">Dianix&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'terpakai' and dev_name = 'Dyeing' OR dev_status = 'terpakai' and dev_name = 'dye'
			   OR dev_status = 'terpakai' and dev_name = 'Dyng' OR dev_status = 'terpakai' and dev_name = 'DYEING' OR dev_status = 'terpakai' and dev_name = 'Dyng'
			   OR dev_status = 'terpakai' and dev_name = 'dyei' OR dev_status = 'terpakai' and dev_name = 'dyng' OR dev_status = 'terpakai' and dev_name = 'Dyng'
			   OR dev_status = 'terpakai' and dev_name = 'Dyeing'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_monitor.php">Dyeing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			    LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'terpakai' and dev_name = 'Scouring' OR dev_status = 'terpakai' and dev_name = 'scr' 
			   OR dev_status = 'terpakai' and dev_name = 'Scouring' OR dev_status = 'terpakai' and dev_name = 'scrng' OR dev_status = 'terpakai' and dev_name = 'scourng'
			   OR dev_status = 'terpakai' and dev_name = 'SCOURING'  OR dev_status = 'terpakai' and dev_name = 'SCOURING' OR dev_status = 'terpakai' and dev_name = 'SCOURING'
			   OR dev_status = 'terpakai' and dev_name = 'scring' OR dev_status = 'terpakai' and dev_name = 'scr' OR dev_status = 'terpakai' and dev_name = 'scouring'
			   OR dev_status = 'terpakai' and dev_name = 'scouring' OR dev_status = 'terpakai' and dev_name = 'scring'  OR dev_status = 'terpakai' and dev_name = 'scouring'
			   OR dev_status = 'terpakai' and dev_name = 'scouring'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_supply.php">Scouring&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	          $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'terpakai' and dev_name = 'Finishing' OR dev_status = 'terpakai' and dev_name = 'FINISHING' OR dev_status = 'terpakai' and dev_name = 'finis'
			   OR dev_status = 'terpakai' and dev_name = 'finis' OR dev_status = 'terpakai' and dev_name = 'FINIS' OR dev_status = 'terpakai' and dev_name = 'FNS'
			   OR dev_status = 'terpakai' and dev_name = 'fnsh' OR dev_status = 'terpakai' and dev_name = 'fnshng' OR dev_status = 'terpakai' and dev_name = 'fins' OR dev_status = 'terpakai' and dev_name = 'fnshing'
			   OR dev_status = 'terpakai' and dev_name = 'fins' OR dev_status = 'terpakai' and dev_name = 'fnsh' OR dev_status = 'terpakai' and dev_name = 'finis'
			   OR dev_status = 'terpakai' and dev_name = 'finishing' OR dev_status = 'terpakai' and dev_name = 'fns'OR dev_status = 'terpakai' and dev_name = 'fns'
			   ORDER BY stdevice.id DESC");
	           $count= mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_vga.php">Finishing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>

<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="laptipex.php" class="btn btn-info" id="print" data-placement="left" title="Klik untuk Print"><i class="icon-print icon-large"></i> Cetak</a> 		      
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
	<form action="" method="post">																
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
					<th>Nama Lokasi</th>
					<th>Edit Barang</th>	
					<th class="empty"></th>	
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from stdevice			
		       LEFT JOIN location_details ON stdevice.id = location_details.id		
		       LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'terpakai' and dev_name = 'Dyeing' OR dev_status = 'terpakai' and dev_name = 'dye'
			   OR dev_status = 'terpakai' and dev_name = 'Dyng' OR dev_status = 'terpakai' and dev_name = 'DYEING' OR dev_status = 'terpakai' and dev_name = 'Dyng'
			   OR dev_status = 'terpakai' and dev_name = 'dyei' OR dev_status = 'terpakai' and dev_name = 'dyng' OR dev_status = 'terpakai' and dev_name = 'Dyng'
			   OR dev_status = 'terpakai' and dev_name = 'Dyeing'
			   ORDER BY stdevice.id DESC") or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>

			<td><?php echo $row['dev_tanggal'];  ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_faktur']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php echo $row['dev_qty']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='terpakai')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			
			<?php include('modal_damage.php'); ?>
			<?php include('toolttip_edit_delete.php'); ?>
			<?php if ($dev_status == 'Diperbaiki' ){ ?>
			<td><a class="btn btn-success">Perbaiki</a></td>	
			<?php }else if ($dev_status == 'terpakai' ) { ?>
			<td><a rel="tooltip" title="Perbaiki" id="e<?php echo $id; ?>" href="#repair<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><div class="hide">Kerusakan</div>Perbaiki</a></td>
			<?php }else{ ?>
			<td></td>
			<?php } ?>											
			
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
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