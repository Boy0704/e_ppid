
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">No Pendaftaran <?php echo form_error('no_pendaftaran') ?></label>
            <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran" value="<?php echo $no_pendaftaran; ?>" />
        </div>
	    <div class="form-group">
            <label for="tujuan_informasi">Tujuan Informasi <?php echo form_error('tujuan_informasi') ?></label>
            <textarea class="form-control" rows="3" name="tujuan_informasi" id="tujuan_informasi" placeholder="Tujuan Informasi"><?php echo $tujuan_informasi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Kuasa <?php echo form_error('nama_kuasa') ?></label>
            <input type="text" class="form-control" name="nama_kuasa" id="nama_kuasa" placeholder="Nama Kuasa" value="<?php echo $nama_kuasa; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat_kuasa">Alamat Kuasa <?php echo form_error('alamat_kuasa') ?></label>
            <textarea class="form-control" rows="3" name="alamat_kuasa" id="alamat_kuasa" placeholder="Alamat Kuasa"><?php echo $alamat_kuasa; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp Kuasa <?php echo form_error('no_telp_kuasa') ?></label>
            <input type="text" class="form-control" name="no_telp_kuasa" id="no_telp_kuasa" placeholder="No Telp Kuasa" value="<?php echo $no_telp_kuasa; ?>" />
        </div>
	    <div class="form-group">
            <label for="alasan_pengajuan">Alasan Pengajuan <?php echo form_error('alasan_pengajuan') ?></label>
            <textarea class="form-control" rows="3" name="alasan_pengajuan" id="alasan_pengajuan" placeholder="Alasan Pengajuan"><?php echo $alasan_pengajuan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="kasus_posisi">Kasus Posisi <?php echo form_error('kasus_posisi') ?></label>
            <textarea class="form-control" rows="3" name="kasus_posisi" id="kasus_posisi" placeholder="Kasus Posisi"><?php echo $kasus_posisi; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('keberatan_informasi') ?>" class="btn btn-default">Cancel</a>
	</form>
   