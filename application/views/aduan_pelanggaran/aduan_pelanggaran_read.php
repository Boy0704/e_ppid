<?php 
$this->db->where('id', $id);
$this->db->update('aduan_pelanggaran', array('dilihat'=>'1'));
 ?>
        <table class="table">
	    <tr><td>Nama Lengkap</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Upload Identitas</td><td>
	    	<a href="image/file/<?php echo $upload_identitas; ?>" target="_blank">
	    		<img src="image/file/<?php echo $upload_identitas; ?>" style="width: 200px; ">
	    	</a>
	    </td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Peristiwa</td><td><?php echo $peristiwa; ?></td></tr>
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
        