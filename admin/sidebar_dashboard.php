     <div class="span3" id="sidebar">
	             <?php include('count.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active"> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
						<li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Barang Masuk</a>
                        </li>
						<li class="">
                            <a href="comlab_a.php"><i class="icon-chevron-right"></i><i class="icon-building"></i> Lokasi Barang</a>
                        </li>
						<li class="">
                            <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Tambah Lokasi</a>
                        </li>
						<li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Barang Baru</a>
                        </li>	
						<li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Barang Keluar / terpakai</a>
                        </li>
						<li class="">
                            <a href="client_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Client User</a>
                        </li>
						<li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> System User</a>
                        </li>
						<li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Aktifitas Log</a>
                        </li>
						
					   <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Pencarian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Barang Di Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Semua Barang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>