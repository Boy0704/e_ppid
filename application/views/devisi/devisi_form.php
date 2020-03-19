
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
            <label for="ringkasan_informasi">Ringkasan Isi Informasi <?php echo form_error('ringkasan_informasi') ?></label>
            <textarea class="form-control textarea_editor" rows="3" name="ringkasan_informasi" id="ringkasan_informasi" placeholder="Ringkasan Informasi"><?php echo $ringkasan_informasi; ?></textarea>
        </div>
        <div class="form-group">
            <label>Upload File</label><br>
            <?php 
            if ($file == '') {
                # code...
            } else {
            ?>
            <p>*) File Sebelumnya : <a href="image/file/<?php echo $file ?>" target="_blank"><?php echo $file ?></a></p>
            <?php } ?>
            
            <input type="file" name="userfile" class="form-control" required>
            <p style="color: red">*) File yang bisa diupload bertipe docx | xls | xlsx</p>
        </div>
	    <div class="form-group">
            <label for="varchar">Penjabat/Unit/Satker Yang Menguasai Informasi <?php echo form_error('penjabat_yang_menguasai_informasi') ?></label>
            <input type="text" class="form-control" name="penjabat_yang_menguasai_informasi" id="penjabat_yang_menguasai_informasi" placeholder="Penjabat Yang Menguasai Informasi" value="<?php echo $penjabat_yang_menguasai_informasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penanggung Jawab Pembuatan/Penerbitan Informasi <?php echo form_error('penanggung_jawab') ?></label>
            <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab" placeholder="Penanggung Jawab" value="<?php echo $penanggung_jawab; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Waktu dan Tempat Pembuatan Informasi <?php echo form_error('waktu_pembuatan') ?></label>
            <input type="text" class="form-control" name="waktu_pembuatan" id="waktu_pembuatan" placeholder="Waktu Pembuatan" value="<?php echo $waktu_pembuatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bentuk Informasi yang tersedia <?php echo form_error('bentuk_informasi') ?></label>
            <input type="text" class="form-control" name="bentuk_informasi" id="bentuk_informasi" placeholder="Bentuk Informasi" value="<?php echo $bentuk_informasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jangka Waktu pemyimpanan/retensi Arsip<?php echo form_error('jangka_waktu') ?></label>
            <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" placeholder="Jangka Waktu" value="<?php echo $jangka_waktu; ?>" />
        </div>
        
	    <div class="form-group">
            <label for="varchar">Kategori Informasi <?php echo form_error('kategori_informasi') ?></label>
            <!-- <input type="text" class="form-control" name="kategori_informasi" id="kategori_informasi" placeholder="Kategori Informasi" value="<?php echo $kategori_informasi; ?>" /> -->
            <select class="form-control" name="kategori_informasi">
                <option value="">--Pilih Kategori--</option>
                <option value="Informasi Berkala">Informasi Berkala</option>
                <option value="Informasi Serta Merta">Informasi Serta Merta</option>
                <option value="Informasi Setiap Saat">Informasi Setiap Saat</option>
            </select>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('devisi') ?>" class="btn btn-default">Cancel</a>
	</form>
   