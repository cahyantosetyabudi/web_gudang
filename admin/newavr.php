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
	           and dev_status = 'Baru' and dev_name = 'Hekter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HEKTER'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hekter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hkter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hektr'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hktr'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hkt'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hekt'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hkter'
				 ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	   
					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Daftar Hekter/Isi Baru</div>
							  <div class="muted pull-right">
								Jumlah Hekter/Isi Baru: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Daftar Hekter/Isi Baru :
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
	             and dev_status = 'Baru' and dev_name = 'Kertas'
		
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'KERTAS'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'kertas'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'kerts'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'krtas'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'krts'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = '(kertas)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = '(krts)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="newKeyboard.php">Kertas&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			    where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	          and dev_status = 'Baru' and dev_name = 'Bolpoin'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'BOLPOIN'		       
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bolpoin'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bolpn'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'blpoin'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'blpn'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = '(bolpoin)'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'blpoin'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmouse.php">Bolpoin/Pensil&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Baru' and dev_name = 'Tipe-x'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'TIPE-X'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'tipe-x'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'tipx'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'tpex'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'tipex'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'Tipe-X'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'tpx'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmonitor.php">Tipe-X&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Baru' and dev_name = 'Amplop'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'AMPLOP'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'amplop'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'amplp'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Baru' and dev_name = 'amplop'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'amlp'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'amplo'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'AmPlOp'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newcpu.php">Amplop Kabinet Cokelat &nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Baru' and dev_name = 'Buku Kwitansi'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'BUKU KWITANSI'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'buku kwitansi'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bkukwitnsi'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bukkwin'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bkkwitansi'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bkkwtnsi'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'buku'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'kwitansi'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'bku'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'kwtnsi'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_supply.php">Buku Kwitansi&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Baru' and dev_name = 'Buku Tulis'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'BUKU TULIS'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'buku tulis'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'bkutlis'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'bkutls'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'buktul'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'buklis'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'buku'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'tulis'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'buktls'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'bkutuls'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'tlis'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Baru' and dev_name = 'tuls'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newvga.php">Buku Tulis&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Baru' and dev_name = 'Gunting'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'GUNTING'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'gunting'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'Gnting'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'Guntng'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'gntng'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'gnting'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Baru' and dev_name = 'guntng'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_cords.php">Gunting&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Baru' and dev_name = 'Hekter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HEKTER'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hekter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hkter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'Hktr'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hektr'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HKTR'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HKTER'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HEKTR'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="newavr.php">Hekter/Isi&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
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
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Send"><i class="icon-share"> Menetapkan Lokasi</i></button>
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
		   <a href="printhekter.php" class="btn btn-info" id="print" data-placement="left" title="Klik untuk Print"><i class="icon-print icon-large"></i> Cetak</a> 		      
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
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	  where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Baru' and dev_name = 'Hekter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HEKTER'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hekter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hkter'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'Hktr'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'hektr'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HKTR'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HKTER'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Baru' and dev_name = 'HEKTR'
			   ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>															
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
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