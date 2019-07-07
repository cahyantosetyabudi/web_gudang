<?php
  include('./lib/dbcon.php');
  dbcon();
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $sql = mysql_query("select * from stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where device_name.dev_name = 'Dyeing' AND dev_tanggal BETWEEN ".$tahun.$bulan."01 AND ".$tahun.$bulan."31 ORDER BY stdevice.id DESC");
  while($row = mysql_fetch_array($sql)){
  $id = $row['id'];
  $dev_id = $row['dev_id'];
?>
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
  <thead>
      <tr>
        <th class="empty"></th>
        <th>TANGGAL </th>
        <th>Tipe Barang</th>
        <TH>NO FAKTUR</TH>
        <th>Deskripsi Barang</th>
        <th>Kode Barang</th>
        <th>Supplier BARANG</th>
        <th>Model Barang</th>
        <TH>QTY BARANG</TH>
        <th>Status Barang</th>
        <th>Edit Barang</th>
        <th class="empty"></th>
      </tr>
  </thead>
  <tbody>
<tr>
  <td>
    <?php
        $device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
        $dev=mysql_fetch_assoc($device_query2);
        if ($row['dev_status']=='Baru') {
            echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
        } else if ($row['dev_status']=='terpakai') {
            echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
        } else if($row['dev_status']=='Diperbaiki') {
            echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
        } else {
            echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
        };
    ?>
  </td>

  <td><?php echo $row['dev_tanggal'];  ?></td>
  <td><?php echo $row['dev_name']; ?></td>
  <td><?php echo $row['dev_faktur']; ?></td>
  <td><?php echo $row['dev_desc']; ?></td>
  <td><?php echo $row['dev_serial']; ?></td>
  <td><?php echo $row['dev_brand']; ?></td>
  <td><?php echo $row['dev_model']; ?></td>
  <td><?php echo $row['dev_qty']; ?></td>
  <td><?php
        $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
        $dev=mysql_fetch_assoc($device_query1);
        if($row['dev_status']=='Baru') {
          echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
        } else if($row['dev_status']=='terpakai') {
          echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
        } else if($row['dev_status']=='Diperbaiki') {
          echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
        } else {
          echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
        };
      ?>
  </td>

  <?php include('toolttip_edit_delete.php'); ?>
  <td class="empty" width="80"><a rel="tooltip"  title="Edit Barang" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit</i></a></td>
</tr>

<?php } ?>
</tbody>
</table>
