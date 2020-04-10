
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php //echo anchor(site_url('aduan_pelanggaran/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('aduan_pelanggaran/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('aduan_pelanggaran'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama</th>
		<th>Alamat</th>
		<th>Upload Identitas</th>
		<th>No Telp</th>
		<th>Email</th>
		<!-- <th>Peristiwa</th>
		<th>Nama Saksi</th>
		<th>Alamat Saksi</th>
		<th>No Telp Saksi</th>
		<th>Upload Bukti1</th>
		<th>Upload Bukti2</th>
		<th>Uraian Singkat</th> -->
		<th>Action</th>
            </tr><?php
            foreach ($aduan_pelanggaran_data as $aduan_pelanggaran)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $aduan_pelanggaran->nama ?></td>
			<td><?php echo $aduan_pelanggaran->alamat ?></td>
			<td><?php echo $aduan_pelanggaran->upload_identitas ?></td>
			<td><?php echo $aduan_pelanggaran->no_telp ?></td>
			<td><?php echo $aduan_pelanggaran->email ?></td>
			<!-- <td><?php echo $aduan_pelanggaran->peristiwa ?></td>
			<td><?php echo $aduan_pelanggaran->nama_saksi ?></td>
			<td><?php echo $aduan_pelanggaran->alamat_saksi ?></td>
			<td><?php echo $aduan_pelanggaran->no_telp_saksi ?></td>
			<td><?php echo $aduan_pelanggaran->upload_bukti1 ?></td>
			<td><?php echo $aduan_pelanggaran->upload_bukti2 ?></td>
			<td><?php echo $aduan_pelanggaran->uraian_singkat ?></td> -->
			<td style="text-align:center" width="200px">
				<?php 
                echo anchor(site_url('aduan_pelanggaran/read/'.$aduan_pelanggaran->id),'<span class="label label-success">Lihat</span>'); 
                echo ' | '; 
				echo anchor(site_url('aduan_pelanggaran/update/'.$aduan_pelanggaran->id),'<span class="label label-info">Ubah</span>'); 
				echo ' | '; 
				echo anchor(site_url('aduan_pelanggaran/delete/'.$aduan_pelanggaran->id),'<span class="label label-danger">Hapus</span>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
    