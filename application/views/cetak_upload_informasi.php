<!DOCTYPE html>
<html>
<head>
	<title></title>
	<base href="<?php echo base_url() ?>">
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body onload="print()">

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
            </tr><?php
            $start = 0;
            $devisi_data = $this->db->get('devisi');
            foreach ($devisi_data->result() as $devisi)
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
			
		</tr>
                <?php
            }
            ?>
        </table>

</body>
</html>