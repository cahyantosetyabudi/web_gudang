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
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Gunting</div>
							  <div class="muted pull-right">
								Jumlah Gunting: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Daftar Gunting
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
			   where dev_name = 'Kertas' OR dev_name = 'kertas' OR dev_name = 'KERTAS'
			   OR dev_name = 'krts' OR dev_name = 'krts' OR dev_name = 'kts' OR dev_name = 'kerts'OR dev_name = 'krtas' OR dev_name = '(kertas)'
			   OR dev_name = '(kertas)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="Keyboard.php">Kertas&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			   <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Tipe-x' OR dev_name = 'tipe-x'
               OR dev_name = 'tpx' OR dev_name = 'tipx' OR dev_name = 'tpx' OR dev_name = 'tipe-x' OR dev_name = 'Tipe-x'
			   OR dev_name = 'tpex' OR dev_name = 'Tipe-x'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="monitor.php">Tipe-x&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Buku kwitansi' OR dev_name = 'bkkwtns'
			   OR dev_name = 'bk kwtnsi' OR dev_name = 'buku kwitansi' OR dev_name = 'bk kwtnsi' OR dev_name = 'bku kwitnsi'
			   OR dev_name = 'buku' OR dev_name = 'kwitansi' OR dev_name = 'kwtnsi' OR dev_name = 'bk'
			   OR dev_name = 'bkkw' OR dev_name = 'buku kwitnsi' OR dev_name = 'BUKU' OR dev_name = 'KWITANSI'
			   OR dev_name = 'BUKU KWITANSI'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_supply.php">Buku Kwitansi&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Buku Tulis' OR dev_name = 'Buku Tulis'
			   OR dev_name = 'Buku' OR dev_name = 'TULIS' OR dev_name = 'BUKU TULIS' OR dev_name = 'bktls'
			   OR dev_name = 'bktulis' OR dev_name = 'BKTLS' OR dev_name = 'buku' OR dev_name = 'tulis'
			   OR dev_name = 'tlis' OR dev_name = 'bku' OR dev_name = 'bukutulis' OR dev_name = 'buktul'
			   OR dev_name = 'bkutulis' OR dev_name = 'bukutulis' OR dev_name = 'buku tulis'OR dev_name = 'BUku Tulis'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="vga.php">Buku Tulis&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'gunting' OR dev_name = 'gunting'
			   OR dev_name = 'gntng' OR dev_name = 'gnting' OR dev_name = 'gunting' OR dev_name = 'gntng'
			   OR dev_name = 'GUNTING' OR dev_name = 'Gunting' OR dev_name = 'GUNTING' OR dev_name = 'gnt'
			   OR dev_name = 'gun' OR dev_name = 'ting' OR dev_name = 'gunt' OR dev_name = 'gunti'
			   OR dev_name = 'guntng'  OR dev_name = 'gun-ting'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_cords.php">Gunting&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
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
			        <th>Merek Barang</th>
					<th>Model Barang</th>
					<th>Status Barang </th>		
                <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		 where dev_name = 'gunting' OR dev_name = 'gunting'
			   OR dev_name = 'gntng' OR dev_name = 'gnting' OR dev_name = 'gunting' OR dev_name = 'gntng'
			   OR dev_name = 'GUNTING' OR dev_name = 'Gunting' OR dev_name = 'GUNTING' OR dev_name = 'gnt'
			   OR dev_name = 'gun' OR dev_name = 'ting' OR dev_name = 'gunt' OR dev_name = 'gunti'
			   OR dev_name = 'guntng'  OR dev_name = 'gun-ting'
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
		       else if($row['dev_status']=='Terpakai')
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
		       else if($row['dev_status']=='Terpakai')
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
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Device" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit</i> </a></td>
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