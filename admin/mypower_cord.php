<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['stdev_id']; ?><!-----------------------------------get device location details------------------------------------>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('device_location_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="device_location.php" class="btn btn-info"  id="return" data-placement="right" title="Click to return" ><i class="icon-arrow-left icon-large"></i> Kembali</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#return').tooltip('show');
		              $('#return').tooltip('hide');
		              });
		             </script>
					  <!-----------------------------------sc logo for print------------------------------------>
						<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
						
						<?php $location_query = mysql_query("select * from stlocation	                     
	                     where stdev_id = '$get_id'")or die(mysql_error());
	                     $location_row = mysql_fetch_array($location_query);
	                    ?>
						
        <!-------------------------------block ------------------------------>
            <div id="block_bg" class="block">
                  <div class="navbar navbar-inner block-header">							
							  <div class="muted pull-left"><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; ?> </div>
							  
                <div id="" class="muted pull-right">
				<?php 
				$my_device = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'Gunting'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
				and dev_name = 'GUNTING'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'gunting'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'gnting'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'guntng'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'gntng'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'GuNtInG'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'guting'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'Gnting'   and stdev_id = '$get_id' ")or die(mysql_error());
				$count_my_device = mysql_num_rows($my_device);?>
				Daftar Gunting: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
				</div>
								
           </div>
							
<!-----------------------------------for Print display visible------------------------------------>	
<h4 id="sc">Lokasi:<?php echo $location_row['stdev_location_name']; ?> Daftar Gunting
<div align="right" id="sc">Date:
<?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?></div>
</h4>
							
 <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
   <!-----------------------------------device categorized by their location details using nav pills------------------------------------>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<?php	
	            $my_device = mysql_query("select * from location_details	                                                    
                LEFT JOIN stdevice ON location_details.id = stdevice.id 
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                 and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_device);
			    ?>
				<li class="">
				<a href= 'mydevice.php<?php echo '?stdev_id='.$get_id; ?>')">Semua&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
					
				</li>
				
			<?php	
	          $my_keyboard = mysql_query("select * from location_details    
	          LEFT JOIN stdevice ON location_details.id = stdevice.id
			  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			  where NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kertas'  and stdev_id = '$get_id'
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'KERTAS'    and stdev_id = '$get_id'
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
		      and dev_name = 'Kertas'   and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kerts'      and stdev_id = '$get_id'
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'krtas'      and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'krts'       and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'kts'      and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'keras'  and stdev_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from location_details where dev_status='Dump')
			  and dev_name = 'krt'    and stdev_id = '$get_id' ")or die(mysql_error());
			  $count = mysql_num_rows($my_keyboard);
			  ?>
              					
				<li class="active">			
				    <a href= 'myKeyboard.php<?php echo '?stdev_id='.$get_id; ?>')">Kertas&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
			  <?php	
	            $my_monitor = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'tipe-x'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Tipe-X'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
                and dev_name = 'TIPE-X'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'tpx'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'tipx'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'tpex'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Tipe-X'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'tipe-x' and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = '(Tipe-x)' and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_monitor);
               ?>
			   
				<li class="">			
				    <a href= 'mymonitor.php<?php echo '?stdev_id='.$get_id; ?>')">Tipe-X&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
               <?php	
	            $my_power_supply = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'Buku Kwitansi'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'BUKU KWITANSI'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'buku kwitansi'    and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bku kwtnsi'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bkkwtansi'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bukkwin'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'buku'    and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'kwitansi'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bukkwtnsi'   and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bkukwtnsi'      and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'kwtnsi' and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'kwitnsi'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bku' and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'buk'   and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_power_supply);
               ?>			
				<li class="">			
				    <a href= 'mypower_supply.php<?php echo '?stdev_id='.$get_id; ?>')">Buku Kwitansi&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'Buku Tulis'   and stdev_id = '$get_id' 
				 OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'BUKU TULIS'                         and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'buku tulis'                          and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'buktul'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'buklis'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'buku'   and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'tulis'        and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'buku tlis'               and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'bku tuls'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'buktls'     and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_vga);
               ?>
				<li class="">			
				    <a href= 'myvga.php<?php echo '?stdev_id='.$get_id; ?>')">Buku Tulis&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_power_cord = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'Gunting'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
				and dev_name = 'GUNTING'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'gunting'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'gnting'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'guntng'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'gntng'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'GuNtInG'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'guting'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'Gnting'   and stdev_id = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_power_cord);
               ?>				
				<li class="">			
				    <a href= 'mypower_cord.php<?php echo '?stdev_id='.$get_id; ?>')">Gunting&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				</ul>
	</div>
</div>
</div>

<div class="block-content collapse in">
<div class="span12">
	<form action="" method="post"><!-----------------------------------table form------------------------------------>
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Deskripsi Barang</th>
					<th>Kode Barang</th>
			        <th>Merek Barang</th>
					<th>Model Barang</th>
					<th>Menetapkan Tanggal </th>	
					<th>Status Barang </th> 				
                    <th>Nama Lokasi</th>
					<th class="empty">Mengelola Persediaan</th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>									
 <?php
$my_device = mysql_query("select * from location_details    
	            LEFT JOIN stdevice ON location_details.id = stdevice.id
				LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				where NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'Gunting'       and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
				and dev_name = 'GUNTING'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump') 
			    and dev_name = 'gunting'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'gnting'  and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'guntng'     and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'gntng'    and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'GuNtInG'      and stdev_id = '$get_id' 
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
				and dev_name = 'guting'     and stdev_id = '$get_id'
				OR NOT EXISTS 
                (select * from location_details where dev_status='Dump')
			    and dev_name = 'Gnting'   and stdev_id = '$get_id' ")or die(mysql_error());
while($row = mysql_fetch_array($my_device)){
$id = $row['id'];
		                                               
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
			<td><?php echo $row['date_deployment']; ?></td>
			<td><?php
			   $my_device1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($my_device1);
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
			<td><?php echo $location_row['stdev_location_name']; ?></td>
												
			<?php include('toolttip_edit_delete.php'); ?>
			<td width="185" class="empty"><a rel="tooltip"  title="Transfer Device" id="e<?php echo $id; ?>" href="transfer.php<?php echo '?id='.$id; ?>&<?php echo 'stdev_id='.$get_id; ?>" class="btn btn-warning"><i class="icon-move"></i> Transfer </a>
			<a rel="tooltip"  title="Update Status" id="t<?php echo $id; ?>" href="devlpc_update_status.php<?php echo '?id='.$id; ?>&<?php echo 'stdev_id='.$get_id; ?>" class="btn btn-success"><i class="icon-upload-alt"></i> Status</a></td>
		</tr>
											
	<?php } ?>   
</tbody>
</table>
</form>	
 <!---------------------------------------------------- /block --------------------------------------------->
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