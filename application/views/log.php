<!DOCTYPE html>
<html>
<head>
  <title>LOG</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap.css'); ?>">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body><center>
  <br>
  <h2>CRUD sederhana Ujian Tengah Semester</h2>
  <br>
  <h1>PEMROGRAMAN WEB FRAMEWORK LANJUT</h1>
  <h4>NAMA : Muh Cahyo Saputra  NIM : 161240000499</h4>
  <h2>TABLE log PEMBARUAN NOMOR TELEPON</h2>
  <br>
  </center>
<body>
	<center>
		<div class="table-responsive">
   		<table class="table table-bordered table-striped table-hover">
			<tr class="card-header bg-primary text-white">
				<th>No</th>
				<th>NIM</th>
				<th>Nomor Hp Lama</th>
				<th>Nomor Hp Baru</th>
				<th>Tanggal Diubah</th>
			</tr>
			<?php
			$no=1;
			foreach($data as $r) {
				?>
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td><?php echo $r['nim'] ?></td>
					<td><?php echo $r['no_hp_lama'] ?></td>
					<td><?php echo $r['no_hp_baru'] ?></td>
					<td><?php echo $r['tgl_ubah'] ?></td>
				</tr>
				<?php
				$no++;
			}
			?>
		</table>
		<br>
		<a href="<?=base_url().'index.php/mahasiswa_controler/index'?>" class="btn btn-primary btn-md" >HOME</a>
	</center>
	</div>
</body>
</html>

