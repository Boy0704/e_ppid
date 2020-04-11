
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php //echo anchor(site_url('permohonan_informasi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('permohonan_informasi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('permohonan_informasi'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama</th>
		<th>Pekerjaan</th>
		<th>No Telp</th>
		<th>Email</th>
		<!-- <th>Informasi Dibutuhkan</th>
		<th>Tujuan</th>
		<th>Cara1</th>
		<th>Cara2</th>
		<th>Salinan Informasi</th> -->
		<th>Action</th>
            </tr><?php
            foreach ($permohonan_informasi_data as $permohonan_informasi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $permohonan_informasi->nama ?></td>
			<td><?php echo $permohonan_informasi->pekerjaan ?></td>
			<td><?php echo $permohonan_informasi->no_telp ?></td>
			<td><?php echo $permohonan_informasi->email ?></td>
			<!-- <td><?php echo $permohonan_informasi->informasi_dibutuhkan ?></td>
			<td><?php echo $permohonan_informasi->tujuan ?></td>
			<td><?php echo $permohonan_informasi->cara1 ?></td>
			<td><?php echo $permohonan_informasi->cara2 ?></td>
			<td><?php echo $permohonan_informasi->salinan_informasi ?></td> -->
			<td style="text-align:center" width="200px">
				<?php 
                echo $retVal = ($permohonan_informasi->dilihat == '0') ? anchor(site_url('permohonan_informasi/read/'.$permohonan_informasi->id),'<span class="label label-warning">Belum dilihat</span>') : anchor(site_url('permohonan_informasi/read/'.$permohonan_informasi->id),'<span class="label label-success">Detail</span>') ; 
                echo ' | '; 
				echo anchor(site_url('permohonan_informasi/update/'.$permohonan_informasi->id),'<span class="label label-info">Ubah</span>'); 
				echo ' | '; 
				echo anchor(site_url('permohonan_informasi/delete/'.$permohonan_informasi->id),'<span class="label label-danger">Hapus</span>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
    