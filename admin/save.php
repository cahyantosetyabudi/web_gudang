<?php
										include("./lib/dbcon.php");
										dbcon();		
										$dev_tanggal=$_POST['dev_tanggal'];
										$dev_name = $_POST['dev_name'];
										$dev_faktur = $_POST['dev_faktur'];
										$dev_desc = $_POST['dev_desc'];
										$dev_serial = $_POST['dev_serial'];
										$dev_brand = $_POST['dev_brand'];
										$dev_model = $_POST['dev_model'];
										$dev_qty = $_POST['dev_qty'];
										$dev_status = $_POST['dev_status'];
										
						
										$query = mysql_query("select * from stdevice where dev_serial = '$dev_serial' ")or die(mysql_error());
										$count = mysql_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Warning Device Serial Number already Exist');
										window.location = "device_stocks.php";
										</script>
										<?php
										}else{
										mysql_query("insert into stdevice (dev_tanggal,dev_name,dev_faktur,dev_desc,dev_serial,dev_brand,dev_model,dev_qty,dev_status) values('$dev_tanggal','$dev_name','$dev_faktur','$dev_desc','$dev_serial','$dev_brand','$dev_model','$dev_qty','$dev_status')")or die(mysql_error());
																				
										?>
										<script>
										window.location = "device_stocks.php";
										</script>
										<?php
										}										
										
										?>