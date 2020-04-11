<?php 
$this->db->where('id', $id);
$this->db->update('aduan_pelanggaran', array('dilihat'=>'1'));
 ?>
        <table class="table">
	    <tr><td>Nama Lengkap</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Identitas</td><td>
	    	<a href="image/file/<?php echo $upload_identitas; ?>" target="_blank">
	    		<img src="image/file/<?php echo $upload_identitas; ?>" style="width: 200px; ">
	    	</a>
	    </td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr>
        	<td colspan="2"><br><b>Peristiwa yang dilaporkan</b></td>
        </tr>
	    <tr><td>Peristiwa</td><td><?php echo $peristiwa; ?></td></tr>
	    <tr><td>Tempat Kejadian</td><td><?php echo $tempat_kejadian; ?></td></tr>
	    <tr><td>Hari dan Tanggal kejadian</td><td><?php echo hari_id($tgl_kejadian).', '.$tgl_kejadian; ?></td></tr>
	    <tr><td>Waktu kejadian</td><td><?php echo $waktu_kejadian; ?></td></tr>
	    <tr><td>Terlapor</td><td><?php echo $terlapor; ?></td></tr>
	    <tr><td>Alamat Terlapor</td><td><?php echo $alamat_terlapor; ?></td></tr>
	    <tr><td>No Telp/HP Terlapor</td><td><?php echo $no_telp_terlapor; ?></td></tr>

	    <tr>
        	<td colspan="2"><br><b>Saksi - Saksi</b></td>
        </tr>
	    <tr><td>Nama Saksi</td><td><?php echo $nama_saksi; ?></td></tr>
	    <tr><td>Alamat Saksi</td><td><?php echo $alamat_saksi; ?></td></tr>
	    <tr><td>No Telp Saksi</td><td><?php echo $no_telp_saksi; ?></td></tr>
	    <tr><td>Upload Bukti1</td><td>
	    	<a href="image/file/<?php echo $upload_bukti1; ?>" target="_blank">
	    		<img src="image/file/<?php echo $upload_bukti1; ?>" style="width: 200px; ">
	    	</a>
	    </td></tr>
	    <tr><td>Upload Bukti2</td><td>
	    	<a href="image/file/<?php echo $upload_bukti2; ?>" target="_blank">
	    		<img src="image/file/<?php echo $upload_bukti2; ?>" style="width: 200px; ">
	    	</a>
		</td></tr>
	    <tr><td>Uraian Singkat Dugaan Pelanggaran</td><td><?php echo $uraian_singkat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('aduan_pelanggaran') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        