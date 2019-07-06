<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
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
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Barang</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">									
									
									<?php
									$query = mysql_query("select * from stdevice 
									LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
									where id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">			
							<div class="control-group">
											<label class="control-label" for="inputPassword">Tanggal</label>
											<div class="controls">
											<input type="date" class="span8" name="dev_tanggal" id="inputPassword" placeholder="Device tanggal" required>
											</div>
										</div>								
								
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Tipe Barang</label>
			                                <div class="controls">
				                              <select name="dev_id" class="chzn-select"  required/>
				                                 <option></option>
			                                     <?php $device_name=mysql_query("select * from device_name")or die(mysql_error()); 
			                                     while ($row=mysql_fetch_array($device_name)){ 												
												 ?>
				                                 <option value="<?php echo $row['dev_id']; ?>&nbspName&nbsp<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
				                                 <?php } ?>
				                               </select>
		                                     </div>
	                                    </div>
											
										<div class="control-group">
											<label class="control-label" for="inputPassword">No Faktur</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_faktur" id="inputPassword" placeholder="Device Faktur" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Supplier Barang</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_brand" id="inputPassword" placeholder="Device Brand" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Kode Barang</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_serial" id="inputPassword" placeholder="Device Serial Number" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Qty Barang</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_qty" id="inputPassword" placeholder="Device qty" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Model Barang</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_model" id="inputPassword" placeholder="Device Model" required>
											</div>
										
										<div id="hide">
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Status Barang</label>
											<div class="controls">
											<select name="dev_status"  required>										
													<option>Baru</option>																									
												</select>								
											</div>
										</div>
										</div>
												
										<div class="control-group">
											<label class="control-label" for="inputPassword">Deskripsi</label>
											<div class="controls">
													<textarea name="dev_desc" id="ckeditor_full"></textarea>
											</div>
										</div>
											
										<div class="control-group">
										<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" title="Klik disini untuk simpan data baru." class="btn btn-primary"><i class="icon-save"></i> Simpan </button>				
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
							</form>
										
<?php
if (isset($_POST['update'])){
$dev_id = $_POST['dev_id'];
$dev_tanggal = $_POST['dev_tanggal'];
$dev_faktur = $_POST['dev_faktur'];
$dev_desc = $_POST['dev_desc'];
$dev_serial = $_POST['dev_serial'];
$dev_brand = $_POST['dev_brand'];
$dev_model = $_POST['dev_model'];
$dev_qty = $_POST['dev_qty'];
$dev_status = $_POST['dev_status'];
										
									
mysql_query("update stdevice set dev_id = '$dev_id' ,
																		dev_tanggal='$dev_tanggal',
																		dev_faktur='$dev_faktur',
																		dev_desc = '$dev_desc',
																		dev_serial  = '$dev_serial',
																		dev_brand = '$dev_brand',
																		dev_model = '$dev_model',
																		dev_qty='$dev_qty'
																		dev_status = '$dev_status'
																		where id = '$get_id' ")or die(mysql_error());
																										
									    mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
										<script>										
										window.location = "device_stocks.php";
										$.jGrowl("Device Successfully Update", { header: 'Device update' });
										</script>
										<?php
										}
										
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();		

		jQuery("#qtype").change(function(){	
			var x = jQuery(this).val();			
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>