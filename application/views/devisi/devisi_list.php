
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('devisi/create'),'Create', 'class="btn btn-primary"'); ?>
                <a href="app/cetak_upload_informasi" target="_blank" class="btn btn-info">Cetak</a>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('devisi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('devisi'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Ringkasan Informasi</th>
		<th>Penjabat Yang Menguasai Informasi</th>
		<th>Penanggung Jawab</th>
		<th>Waktu Pembuatan</th>
		<th>Bentuk Informasi</th>
		<th>Jangka Waktu</th>
		<th>Kategori Informasi</th>
		<th>Action</th>
            </tr><?php
            foreach ($devisi_data as $devisi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $devisi->ringkasan_informasi ?></td>
			<td><?php echo $devisi->penjabat_yang_menguasai_informasi ?></td>
			<td><?php echo $devisi->penanggung_jawab ?></td>
			<td><?php echo $devisi->waktu_pembuatan ?></td>
			<td><?php echo $devisi->bentuk_informasi ?></td>
			<td><?php echo $devisi->jangka_waktu ?></td>
			<td><?php echo $devisi->kategori_informasi ?></td>
			<td style="text-align:center" width="200px">
                <a href="image/file/<?php echo $devisi->file ?>" class="label label-success">Lihat File</a>
				<?php 
				echo anchor(site_url('devisi/update/'.$devisi->id),'<span class="label label-info">Ubah</span>'); 
				echo ' | '; 
				echo anchor(site_url('devisi/delete/'.$devisi->id),'<span class="label label-danger">Hapus</span>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    