     <div class="span3" id="sidebar">
	               <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>"> 
					<?php include('count.php'); ?>
					 <?php include('count_damage.php'); ?>
					 <?php include('count_dump.php'); ?>
					 <?php include('count_remain_new_device.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class=""> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
						<li class="">						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Mengelola Persediaan Barang
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Barang Masuk</a>
                            </li>
                            <li class="">
                            <a href="dev_name.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> Tipe Barang</a>
                            </li> 
						    <li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Menetapkan&nbsp;<span class="label label-success">New</span>&nbsp;Barang
							<?php if($not_read_new == '0'){
				            }else{ ?>
					        <span class="badge badge-info"><?php echo $not_read_new; ?></span>
				            <?php } ?>
							</a>
                            </li>						
						    <li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Barang Keluar/Rusak
							<?php if($not_read1 == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read1; ?></span>
				   
						
                         <!------/.* manage location sidebar*------->	
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Mengelola Lokasi
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <li class="">
                            <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Lokasi Barang</a>
                            </li>
						    <li class="">
                            <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Tamabah Lokasi</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* manage TRIS user sidebar*------->	
						<li class="active">						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Mengelola Pengguna User
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
                            <a href="client_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Technical Staff</a>
                            </li>
						    <li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;System User</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;System log
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Activity Log</a>
                            </li>
						    <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> User Log</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* notification sidebar*------->
					    <li class="">
				           <a href="notification.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Notifikasi
				           <?php if($not_read == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read; ?></span>
				           <?php } ?>
				           </a>
			            </li>
						
                         <li class="">
                           <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Pencarian 
						   <div class="muted pull-right"><i class="caret"></i></div></a>
                           <ul id="bs4" class="collapse">
                           <li>
                           <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Barang di Lokasi</a>
                           </li>
                          
                           <li>
                           <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Semua Barang</a>
                           </li>
                           </ul>
                        </li>
                  </ul>					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>