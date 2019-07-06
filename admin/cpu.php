<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_Device.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" ><i class="icon-plus-sign icon-large"></i> Tambah Barang</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				  where dev_name = 'Amplop' OR dev_name = 'amplop' OR dev_name = 'amplop'
			   OR dev_name = 'amplp' OR dev_name = 'ampl' OR dev_name = 'amplp'   OR dev_name = 'amplop' OR dev_name = 'amplop' OR dev_name = 'amplop'
			   OR dev_name = 'amplo' OR dev_name = 'amlp' OR dev_name = 'amplop' OR dev_name = 'amplop' OR dev_name = 'AMPLOP'
			   OR dev_name = 'AMPL' OR dev_name = 'Amplop'
			   ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>	
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Amplop Kabinet Cokelat</div>
							 <div class="muted pull-right">
								Jumlah Daftar Amplop Kabinet Cokelat: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Daftar Amplop Kabinet Cokelat :
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
					<a href="device_stocks.php">Semua</a>
				</li>
					
			  <?php	
	            $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Dianix' OR dev_name = 'dianix' OR dev_name = 'DIANIX'
			   OR dev_name = 'dianx' OR dev_name = 'dnx' OR dev_name = 'dnx' OR dev_name = 'dianx'OR dev_name = 'dianx' OR dev_name = '(dianix)'
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
			   where dev_name = 'dyeing' OR dev_name = 'dyeing'
               OR dev_name = 'dyeing' OR dev_name = 'dyeing' OR dev_name = 'dyng' OR dev_name = 'dyeing' OR dev_name = '(dyeing)'
			   OR dev_name = 'Dyeing' OR dev_name = 'dyng' OR dev_name = 'dynng' OR dev_name = 'Dyeing' 
			   OR dev_name = 'dyeing' OR dev_name = 'dyng' OR dev_name = 'dyg' OR dev_name = 'dyeing'    
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="monitor.php">Dyeing&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Scouring' OR dev_name = 'scring'
			   OR dev_name = 'scr' OR dev_name = 'scouring' OR dev_name = 'scring' OR dev_name = 'scr'
			   OR dev_name = 'scr' OR dev_name = 'scoring' OR dev_name = 'scouring' OR dev_name = 'sc'
			   OR dev_name = 'sr' OR dev_name = 'scouring' OR dev_name = 'Scouring' OR dev_name = 'SCOURING'
			   OR dev_name = 'SCOURING'
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
			   OR dev_name = 'Fin' OR dev_name = 'FINISHING' OR dev_name = 'FINIS' OR dev_name = 'Fns'
			   OR dev_name = 'finsh' OR dev_name = 'FINISHING' OR dev_name = 'fini' OR dev_name = 'fnsh'
			   OR dev_name = 'fnis' OR dev_name = 'fni' OR dev_name = 'finishi' OR dev_name = 'fns'
			   OR dev_name = 'fnis' OR dev_name = 'finishing' OR dev_name = 'finis'OR dev_name = 'fins'
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
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		  where dev_name = 'Amplop' OR dev_name = 'amplop' OR dev_name = 'amplop'
			   OR dev_name = 'amplp' OR dev_name = 'ampl' OR dev_name = 'amplp'   OR dev_name = 'amplop' OR dev_name = 'amplop' OR dev_name = 'amplop'
			   OR dev_name = 'amplo' OR dev_name = 'amlp' OR dev_name = 'amplop' OR dev_name = 'amplop' OR dev_name = 'AMPLOP'
			   OR dev_name = 'AMPL' OR dev_name = 'Amplop'
			   ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_id = $row['dev_id'];
		?>
										
		<tr>
		<td><?php
			   $device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query2);
		       if($row['dev_status']=='Baru')
		       {
			   echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='rusak')
			   {
			   echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Diperbaiki')
			   {
			   echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Baru')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='rusak')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Diperbaiki')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
												
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Device" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit </i> </a></td>
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
	
</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>