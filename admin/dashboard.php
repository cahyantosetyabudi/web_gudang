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
                         Selamat Datang! <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
                                <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
                                    <div class="span12">
                                    
<div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
         $stocks = mysql_query("select * from stdevice
         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
         $stocks = mysql_num_rows($stocks);
         ?>
                <div class="row-fluid">             
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $stocks; ?></div>
                                        <div>Persediaan Barang</div><br/>
                                    </div>
                                </div>
                             </div> 
                            </div>
                            <a href="device_stocks.php">                              
                                <div class="modal-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                            
                            </a>
                        </div>
                    </div>
        <?php 
         $new = mysql_query("select * from stdevice
         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
         where dev_status='Baru'")or die(mysql_error());
         $new = mysql_num_rows($new);
         ?>         
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $new;?></div>
                                        <div>Barang Masuk</div><br/>
                                    </div>
                                </div>
                             </div> 
                            </div>
                            <a href="newdevice.php">                              
                                <div class="modal-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                            
                            </a>
                        </div>
                    </div>
                 </div>
 </div>                                             
<div id="page-wrapper">
           <div class="row-fluid">
         <?php 
         $damage = mysql_query("select * from stdevice
         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
         where dev_status='terpakai'")or die(mysql_error());
         $damage = mysql_num_rows($damage);
         ?> 
             <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-times-circle fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $damage;?></div>
                                        <div>Barang keluar/terpakai</div><br/>
                                    </div>
                                </div>
                             </div> 
                            </div>
                            <a href="damage.php">                             
                                <div class="modal-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                            
                            </a>
                        </div>
                    </div>
                     </div>                                             
<div id="page-wrapper">
           <div class="row-fluid">
         <?php 
         $damage = mysql_query("select * from stdevice
         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
         where dev_status='terpakai'")or die(mysql_error());
         $damage = mysql_num_rows($damage);
         ?> 
             <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-times-circle fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $damage;?></div>
                                        <div>Persediaan Akhir</div><br/>
                                    </div>
                                </div>
                             </div> 
                            </div>
                            <a href="damage.php">                             
                                <div class="modal-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                            
                            </a>
                        </div>
                    </div>
        
        <?php 
         $location = mysql_query("select * from stlocation")or die(mysql_error());
         $location = mysql_num_rows($location);
         ?>         
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-sitemap fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $location;?></div>
                                        <div>Lokasi</div><br/>
                                    </div>
                                </div>
                             </div> 
                            </div>
                            <a href="device_location.php">                            
                                <div class="modal-footer">
                                    <span class="pull-left">Lihat Detail
                                    </span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>                            
                            </a>
                        </div>
                    </div>                    
      </div>
 </div>

               
                
                
                             </div>
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