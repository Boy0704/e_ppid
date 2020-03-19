
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php //echo anchor(site_url('keberatan_informasi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('keberatan_informasi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('keberatan_informasi'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Pendaftaran</th>
		<th>Tujuan Informasi</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Pekerjaan</th>
		<th>No Telp</th>
		<!-- <th>Nama Kuasa</th>
		<th>Alamat Kuasa</th>
		<th>No Telp Kuasa</th>
		<th>Alasan Pengajuan</th>
		<th>Kasus Posisi</th> -->
		<th>Action</th>
            </tr><?php
            foreach ($keberatan_informasi_data as $keberatan_informasi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $keberatan_informasi->no_pendaftaran ?></td>
			<td><?php echo $keberatan_informasi->tujuan_informasi ?></td>
			<td><?php echo $keberatan_informasi->nama ?></td>
			<td><?php echo $keberatan_informasi->alamat ?></td>
			<td><?php echo $keberatan_informasi->pekerjaan ?></td>
			<td><?php echo $keberatan_informasi->no_telp ?></td>
			<!-- <td><?php echo $keberatan_informasi->nama_kuasa ?></td>
			<td><?php echo $keberatan_informasi->alamat_kuasa ?></td>
			<td><?php echo $keberatan_informasi->no_telp_kuasa ?></td>
			<td><?php echo $keberatan_informasi->alasan_pengajuan ?></td>
			<td><?php echo $keberatan_informasi->kasus_posisi ?></td> -->
			<td style="text-align:center" width="200px">
				<?php 
                echo anchor(site_url('keberatan_informasi/read/'.$keberatan_informasi->id),'<span class="label label-success">Detail</span>'); 
                echo ' | '; 
				echo anchor(site_url('keberatan_informasi/update/'.$keberatan_informasi->id),'<span class="label label-info">Ubah</span>'); 
				echo ' | '; 
				echo anchor(site_url('keberatan_informasi/delete/'.$keberatan_informasi->id),'<span class="label label-danger">Hapus</span>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    