<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Part 2 : Membuat table dengan Bootstrap</title>
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
  <br>
  </center>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
      <thead class="card-header bg-primary text-white">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Nomor Hp</th>
          <th>Aksi</th>    
        </tr>
      </thead>
      <?php
      $no=1;
      foreach($data as $r) {
        ?>
      <tbody>
        <tr>
         <td align="center"><?php echo $no ?></td>
          <td align="center"><?php echo $r['nim'] ?></td>
          <td align="center"><?php echo $r['nama_mhs'] ?></td>
          <td align="center"><?php echo $r['kelamin'] ?></td>
          <td align="center"><?php echo $r['alamat'] ?></td>
          <td align="center"><?php echo $r['no_hp'] ?></td>
          <td align="center"><a href="<?=base_url().'index.php/mahasiswa_controler/update/'.$r['nim']?>">Ubah</a> || <a href="<?=base_url().'index.php/mahasiswa_controler/delete/'.$r['nim']?>">Hapus</a></td>
        </tr>
        <?php
        $no++; 
      }
      ?>
      </tbody>
    </table>
    <br>
    <CENTER>
      <tr align="center">
        <td width="50%"><a href="<?=base_url().'index.php/mahasiswa_controler/insert'?>" class="btn btn-primary btn-md">Tambah Data</a></td>
        <td width="50%"><a href="<?=base_url().'index.php/mahasiswa_controler/log'?>" class="btn btn-primary btn-md">Log</a></td>
      </tr>
      </CENTER>
    <br>
    <br>
  </div>
</body>
</html> 