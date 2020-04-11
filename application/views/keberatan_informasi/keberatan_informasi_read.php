<?php 
$this->db->where('id', $id);
$this->db->update('keberatan_informasi', array('dilihat'=>'1'));
 ?>
        <table class="table">
        <tr>
        	<td colspan="2"><b>Informasi Pengajuan Keberatan</b></td>
        </tr>
	    <tr><td>No Pendaftaran</td><td><?php echo $no_pendaftaran; ?></td></tr>
	    <tr><td>Tujuan Penggunaan Informasi</td><td><?php echo $tujuan_informasi; ?></td></tr>
	    <!-- <tr>
	    	<td colspan="2"></td>
	    </tr> -->
	    <tr>
        	<td colspan="2"><br><b>Identitas Pemohon</b></td>
        </tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr>
        	<td colspan="2"><br><b>Identitas Kuasa Pemohon</b></td>
        </tr>
	    <tr><td>Nama Kuasa</td><td><?php echo $nama_kuasa; ?></td></tr>
	    <tr><td>Alamat Kuasa</td><td><?php echo $alamat_kuasa; ?></td></tr>
	    <tr><td>No Telp Kuasa</td><td><?php echo $no_telp_kuasa; ?></td></tr>
	    <tr><td>Alasan Pengajuan</td><td><?php echo $alasan_pengajuan; ?></td></tr>
	    <tr><td>Kasus Posisi</td><td><?php echo $kasus_posisi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('keberatan_informasi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        