
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
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
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="informasi_dibutuhkan">Informasi Dibutuhkan <?php echo form_error('informasi_dibutuhkan') ?></label>
            <textarea class="form-control" rows="3" name="informasi_dibutuhkan" id="informasi_dibutuhkan" placeholder="Informasi Dibutuhkan"><?php echo $informasi_dibutuhkan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Tujuan <?php echo form_error('tujuan') ?></label>
            <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?php echo $tujuan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cara1 <?php echo form_error('cara1') ?></label>
            <input type="text" class="form-control" name="cara1" id="cara1" placeholder="Cara1" value="<?php echo $cara1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cara2 <?php echo form_error('cara2') ?></label>
            <input type="text" class="form-control" name="cara2" id="cara2" placeholder="Cara2" value="<?php echo $cara2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Salinan Informasi <?php echo form_error('salinan_informasi') ?></label>
            <input type="text" class="form-control" name="salinan_informasi" id="salinan_informasi" placeholder="Salinan Informasi" value="<?php echo $salinan_informasi; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('permohonan_informasi') ?>" class="btn btn-default">Cancel</a>
	</form>
   