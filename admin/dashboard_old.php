<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
			         $row = mysql_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Selamat Datang!</strong> <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
                
                           <?php 
								$stocks = mysql_query("select * from stdevice
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
								$stocks = mysql_num_rows($stocks);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $stocks; ?>"><?php echo $stocks; ?></div>
                                    <div class="chart-bottom-heading"><strong>Semua Persediaan Barang</strong>

                                    </div>
                                </div>
								
								<?php 
								$new = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_status = 'Baru' ORDER BY stdevice.id DESC")or die(mysql_error());
								$new = mysql_num_rows($new);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $new; ?>"><?php echo $new; ?></div>
                                    <div class="chart-bottom-heading"><strong> Barang Baru</strong>

                                    </div>
                                </div>
								
								<?php 
								$damage = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_status = 'terpakai' OR dev_status = 'Terpakai' ORDER BY stdevice.id DESC")or die(mysql_error());
								$damage = mysql_num_rows($damage);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $damage; ?>"><?php echo $damage; ?></div>
                                    <div class="chart-bottom-heading"><strong> Barang terpakai</strong>

                                    </div>
                                </div>
								
								<?php 
								$device_location = mysql_query("select * from location_details")or die(mysql_error());
								$device_location = mysql_num_rows($device_location);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $device_location; ?>"><?php echo $device_location; ?></div>
                                    <div class="chart-bottom-heading"><strong> Menetapkan Barang</strong>

                                    </div>
                                </div>
								
								<?php 
								$keyboard = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Dianix' OR dev_name = 'Dianix' OR dev_name = 'DIANIX'
			   OR dev_name = 'dianx' OR dev_name = 'dnx' OR dev_name = 'dnx' OR dev_name = 'dianx'OR dev_name = 'dianx' OR dev_name = '(dianix)'
			   OR dev_name = '(dianix)'")or die(mysql_error());
								$keyboard = mysql_num_rows($keyboard);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $keyboard; ?>"><?php echo $keyboard; ?></div>
                                    <div class="chart-bottom-heading"><strong>Dianix</strong>

                                    </div>
                                </div>
								
								<?php 
								$Monitor = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								where dev_name = 'Dyeing' OR dev_name = 'Dyeing'
               OR dev_name = 'dye' OR dev_name = 'dyng' OR dev_name = 'dye' OR dev_name = 'dyeing' OR dev_name = 'Dyeing'
			   OR dev_name = 'dyng' OR dev_name = 'Dyeing' ")or die(mysql_error());
								$Monitor = mysql_num_rows($Monitor);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $Monitor; ?>"><?php echo $Monitor; ?></div>
                                    <div class="chart-bottom-heading"><strong>Dyeing</strong>

                                    </div>
                                </div>
								
								<?php 
								$power_supply = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								 where dev_name = 'Scouring' OR dev_name = 'scouring'
			   OR dev_name = 'scring' OR dev_name = 'scouring' OR dev_name = 'scr' OR dev_name = 'scoring'
			   OR dev_name = 'scouring' OR dev_name = 'scouring' OR dev_name = 'scouring' OR dev_name = 'scr'
			   OR dev_name = 'scouring' OR dev_name = 'scouring' OR dev_name = 'SCOURING' OR dev_name = 'SCOURING'
			   OR dev_name = 'BUKU KWITANSI' ")or die(mysql_error());
								$power_supply = mysql_num_rows($power_supply);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $power_supply;?>"><?php echo $power_supply;?></div>
                                    <div class="chart-bottom-heading"><strong>Scouring</strong>

                                    </div>
                                </div>
								
								<?php 
								$vga = mysql_query("select * from stdevice 
								LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
								 where dev_name = 'Finishing' OR dev_name = 'Finishing'
			   OR dev_name = 'Finis' OR dev_name = 'FINIS' OR dev_name = 'FINISHING' OR dev_name = 'finish'
			   OR dev_name = 'finising' OR dev_name = 'FINISHING' OR dev_name = 'finish' OR dev_name = 'finish'
			   OR dev_name = 'fns' OR dev_name = 'fns' OR dev_name = 'Finishing' OR dev_name = 'finish'
			   OR dev_name = 'finishing' OR dev_name = 'finishing' OR dev_name = 'Finishing'OR dev_name = 'Finishing'")or die(mysql_error());
								$vga = mysql_num_rows($vga);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $vga; ?>"><?php echo $vga; ?></div>
                                    <div class="chart-bottom-heading"><strong>Finishing</strong>

                                    </div>
                                </div>
								
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>