<?php
  include('./lib/dbcon.php');
  dbcon();
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $sql = mysql_query("select * from stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where NOT EXISTS (select * from location_details where stdevice.id = location_details.id) and dev_status='Baru' and dev_tanggal BETWEEN ".$tahun.$bulan."01 AND ".$tahun.$bulan."31 ORDER BY stdevice.id DESC");
  while($row = mysql_fetch_array($sql)){
  $id = $row['id'];
  $dev_name = $row['dev_name'];
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
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="30" class="empty">
			     <input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		  </td>
			<td><?php echo $row['dev_tanggal'];  ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_faktur']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php echo $row['dev_qty']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>
    </tr>

<?php } ?>
</tbody>
</table>
