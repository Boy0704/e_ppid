
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Upload Identitas <?php echo form_error('upload_identitas') ?></label>
            <input type="text" class="form-control" name="upload_identitas" id="upload_identitas" placeholder="Upload Identitas" value="<?php echo $upload_identitas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="peristiwa">Peristiwa <?php echo form_error('peristiwa') ?></label>
            <textarea class="form-control" rows="3" name="peristiwa" id="peristiwa" placeholder="Peristiwa"><?php echo $peristiwa; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Saksi <?php echo form_error('nama_saksi') ?></label>
            <input type="text" class="form-control" name="nama_saksi" id="nama_saksi" placeholder="Nama Saksi" value="<?php echo $nama_saksi; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat_saksi">Alamat Saksi <?php echo form_error('alamat_saksi') ?></label>
            <textarea class="form-control" rows="3" name="alamat_saksi" id="alamat_saksi" placeholder="Alamat Saksi"><?php echo $alamat_saksi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp Saksi <?php echo form_error('no_telp_saksi') ?></label>
            <input type="text" class="form-control" name="no_telp_saksi" id="no_telp_saksi" placeholder="No Telp Saksi" value="<?php echo $no_telp_saksi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Upload Bukti1 <?php echo form_error('upload_bukti1') ?></label>
            <input type="text" class="form-control" name="upload_bukti1" id="upload_bukti1" placeholder="Upload Bukti1" value="<?php echo $upload_bukti1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Upload Bukti2 <?php echo form_error('upload_bukti2') ?></label>
            <input type="text" class="form-control" name="upload_bukti2" id="upload_bukti2" placeholder="Upload Bukti2" value="<?php echo $upload_bukti2; ?>" />
        </div>
	    <div class="form-group">
            <label for="uraian_singkat">Uraian Singkat <?php echo form_error('uraian_singkat') ?></label>
            <textarea class="form-control" rows="3" name="uraian_singkat" id="uraian_singkat" placeholder="Uraian Singkat"><?php echo $uraian_singkat; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('aduan_pelanggaran') ?>" class="btn btn-default">Cancel</a>
	</form>
   