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
				  where dev_status = 'rusak' and dev_name = 'Central Processing unit (CPU)' OR dev_status = 'rusak' and dev_name = 'central processing unit'
			   OR dev_status = 'rusak' and dev_name = 'amplop' OR dev_status = 'rusak' and dev_name = 'amplp' OR dev_status = 'rusak' and dev_name = 'ampl' OR dev_status = 'rusak' and dev_name = 'amplo'
			   OR dev_status = 'rusak' and dev_name = 'Amplop' OR dev_status = 'rusak' and dev_name = 'AMPLOP' OR dev_status = 'rusak' and dev_name = 'Amplp'
			   OR dev_status = 'rusak' and dev_name = 'AmPlOp' OR dev_status = 'rusak' and dev_name = 'plop' OR dev_status = 'rusak' and dev_name = 'amp'
			   OR dev_status = 'rusak' and dev_name = 'aml' OR dev_status = 'rusak' and dev_name = 'AMPLOP' OR dev_status = 'rusak' and dev_name = 'aml' 
			   OR dev_status = 'rusak' and dev_name = 'plop'
			   ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Daftar Kerusakan Amplop</div>
                          <div class="muted pull-right">
								Jumlah Barang: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Daftar Kerusakan Amplop
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
			   where dev_name = 'Dianix' and dev_status = 'rusak' OR dev_name = 'Dianix'  and dev_status = 'rusak'
			   OR dev_name = 'DIANIX'  and dev_status = 'rusak' OR dev_name = 'dianx'  and dev_status = 'rusak' OR dev_name = 'dianx'  and dev_status = 'rusak'
			   OR dev_name = 'dinx'  and dev_status = 'rusak'  OR dev_name = 'Dianix'  and dev_status = 'rusak' OR dev_name = 'dnx' and dev_status = 'rusak'
			   OR dev_name = 'dnx'  and dev_status = 'rusak' OR dev_name = 'dnx'  and dev_status = 'rusak'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>									
				<li class="">
					<a href="damage_keyboard.php">Dianix&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			      dev_status = 'rusak'    and dev_name = 'Bolpoin'       OR dev_status = 'rusak'  and dev_name = 'blpn'       OR dev_status = 'rusak' and dev_name = 'bolpn'
			   OR dev_status = 'rusak'    and dev_name = 'BOLPOIN'        OR dev_status = 'rusak'  and dev_name = 'bolpoin'         OR dev_status = 'rusak' and dev_name = 'blpoin' 
			   OR dev_status = 'rusak'    and dev_name = 'Bolpoin'
			   OR dev_status = 'rusak'    and dev_name = 'bolpoin'    OR dev_status = 'rusak'  and dev_name = 'blpn'  OR dev_status = 'rusak' and dev_name = 'blpoin' 
			   OR dev_status = 'rusak'    and dev_name = 'Bolpn'   OR dev_status = 'rusak'  and dev_name = 'bolpn'  OR dev_status = 'rusak' and dev_name = 'blpoin'  
			   OR dev_status = 'rusak'    and dev_name = 'blpn'    OR dev_status = 'rusak'  and dev_name = 'BLPN' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_mouse.php">Bolpoin/Pensil&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
				 <?php	
	          $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'rusak' and dev_name = 'Dyeing' OR dev_status = 'rusak' and dev_name = 'dye'
			   OR dev_status = 'rusak' and dev_name = 'Dyng' OR dev_status = 'rusak' and dev_name = 'DYEING' OR dev_status = 'rusak' and dev_name = 'Dyng'
			   OR dev_status = 'rusak' and dev_name = 'dyei' OR dev_status = 'rusak' and dev_name = 'dyng' OR dev_status = 'rusak' and dev_name = 'Dyng'
			   OR dev_status = 'rusak' and dev_name = 'Dyeing'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_monitor.php">Dyeing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'rusak' and dev_name = 'Central Processing unit (CPU)' OR dev_status = 'rusak' and dev_name = 'central processing unit'
			   OR dev_status = 'rusak' and dev_name = 'amplop' OR dev_status = 'rusak' and dev_name = 'amplp' OR dev_status = 'rusak' and dev_name = 'ampl' OR dev_status = 'rusak' and dev_name = 'amplo'
			   OR dev_status = 'rusak' and dev_name = 'Amplop' OR dev_status = 'rusak' and dev_name = 'AMPLOP' OR dev_status = 'rusak' and dev_name = 'Amplp'
			   OR dev_status = 'rusak' and dev_name = 'AmPlOp' OR dev_status = 'rusak' and dev_name = 'plop' OR dev_status = 'rusak' and dev_name = 'amp'
			   OR dev_status = 'rusak' and dev_name = 'aml' OR dev_status = 'rusak' and dev_name = 'AMPLOP' OR dev_status = 'rusak' and dev_name = 'aml' 
			   OR dev_status = 'rusak' and dev_name = 'plop'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_cpu.php">Amplop Kabinet Cokelat&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
			 <?php	
	            $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'rusak' and dev_name = 'Scouring' OR dev_status = 'rusak' and dev_name = 'scr' 
			   OR dev_status = 'rusak' and dev_name = 'Scouring' OR dev_status = 'rusak' and dev_name = 'scrng' OR dev_status = 'rusak' and dev_name = 'scourng'
			   OR dev_status = 'rusak' and dev_name = 'SCOURING'  OR dev_status = 'rusak' and dev_name = 'SCOURING' OR dev_status = 'rusak' and dev_name = 'SCOURING'
			   OR dev_status = 'rusak' and dev_name = 'scring' OR dev_status = 'rusak' and dev_name = 'scr' OR dev_status = 'rusak' and dev_name = 'scouring'
			   OR dev_status = 'rusak' and dev_name = 'scouring' OR dev_status = 'rusak' and dev_name = 'scring'  OR dev_status = 'rusak' and dev_name = 'scouring'
			   OR dev_status = 'rusak' and dev_name = 'scouring'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_supply.php">Scouring&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'rusak' and dev_name = 'Finishing' OR dev_status = 'rusak' and dev_name = 'FINISHING' OR dev_status = 'rusak' and dev_name = 'finis'
			   OR dev_status = 'rusak' and dev_name = 'finis' OR dev_status = 'rusak' and dev_name = 'FINIS' OR dev_status = 'rusak' and dev_name = 'FNS'
			   OR dev_status = 'rusak' and dev_name = 'fnsh' OR dev_status = 'rusak' and dev_name = 'fnshng' OR dev_status = 'rusak' and dev_name = 'fins' OR dev_status = 'rusak' and dev_name = 'fnshing'
			   OR dev_status = 'rusak' and dev_name = 'fins' OR dev_status = 'rusak' and dev_name = 'fnsh' OR dev_status = 'rusak' and dev_name = 'finis'
			   OR dev_status = 'rusak' and dev_name = 'finishing' OR dev_status = 'rusak' and dev_name = 'fns'OR dev_status = 'rusak' and dev_name = 'fns'
			   ORDER BY stdevice.id DESC");
	           $count= mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_vga.php">Finishing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'rusak' and dev_name = 'gunting' OR dev_status = 'rusak' and dev_name = 'GUNTING' OR dev_status = 'rusak' and dev_name = 'gntng'
			   OR dev_status = 'rusak' and dev_name = 'gun' OR dev_status = 'rusak' and dev_name = 'ting' OR dev_status = 'rusak' and dev_name = 'guntng' OR dev_status = 'rusak' and dev_name = 'GuNtInG'
			   OR dev_status = 'rusak' and dev_name = 'gting' OR dev_status = 'rusak' and dev_name = 'gnting' OR dev_status = 'rusak' and dev_name = 'Gunting' OR dev_status = 'rusak' and dev_name = 'gutng'
			   OR dev_status = 'rusak' and dev_name = 'GunTing' OR dev_status = 'rusak' and dev_name = 'gUnTiNg'OR dev_status = 'rusak' and dev_name = 'gtng'OR dev_status = 'rusak' and dev_name = 'guntng'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_cords.php">Gunting&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			   dev_status = 'rusak'    and dev_name = 'HEKTER'                          OR dev_status = 'rusak'     and dev_name = 'Hekter' 
			OR dev_status = 'rusak'    and dev_name = 'hktr'  OR dev_status = 'rusak'     and dev_name = 'hektr' 
		    OR dev_status = 'rusak'    and dev_name = 'hkter'  OR dev_status = 'rusak'     and dev_name = 'HeKtEr' 
			OR dev_status = 'rusak'    and dev_name = 'hekter'                         OR dev_status = 'rusak'     and dev_name = 'hktrr' 
			OR dev_status = 'rusak'    and dev_name = 'hektr'         OR dev_status = 'rusak'     and dev_name = 'hkterr' 
			OR dev_status = 'rusak'    and dev_name = 'automatic Voltage Reactor'    OR dev_status = 'rusak'     and dev_name = 'hhektr' 
			OR dev_status = 'rusak'    and dev_name = 'hkteer'      OR dev_status = 'rusak'     and dev_name = 'hktrr'
			OR dev_status = 'rusak'    and dev_name = 'Hkttr'      OR dev_status = 'rusak'     and dev_name = 'Hektee'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_avr.php">Hekter/Isi &nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				
				</ul>
	</div>
</div>
</div>															
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Nama Barang</th>
					<th>Deskripsi Barang</th>
					<th>Kode Barang</th>
			        <th>Supplier</th>
					<th>Model Barang</th>
					<th>Status Barang</th>
					<th>Nama Lokasi</th>
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
			   where dev_status = 'rusak' and dev_name = 'Central Processing unit (CPU)' OR dev_status = 'rusak' and dev_name = 'central processing unit'
			   OR dev_status = 'rusak' and dev_name = 'amplop' OR dev_status = 'rusak' and dev_name = 'amplp' OR dev_status = 'rusak' and dev_name = 'ampl' OR dev_status = 'rusak' and dev_name = 'amplo'
			   OR dev_status = 'rusak' and dev_name = 'Amplop' OR dev_status = 'rusak' and dev_name = 'AMPLOP' OR dev_status = 'rusak' and dev_name = 'Amplp'
			   OR dev_status = 'rusak' and dev_name = 'AmPlOp' OR dev_status = 'rusak' and dev_name = 'plop' OR dev_status = 'rusak' and dev_name = 'amp'
			   OR dev_status = 'rusak' and dev_name = 'aml' OR dev_status = 'rusak' and dev_name = 'AMPLOP' OR dev_status = 'rusak' and dev_name = 'aml' 
			   OR dev_status = 'rusak' and dev_name = 'plop'
			   ORDER BY stdevice.id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='rusak')
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
			<td><a class="btn btn-success">Repaired</a></td>	
			<?php }else if ($dev_status == 'rusak' ) { ?>
			<td><a rel="tooltip" title="Perbaiki" id="e<?php echo $id; ?>" href="#repair<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><div class="hide">Rusak</div>Perbaiki</a></td>
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