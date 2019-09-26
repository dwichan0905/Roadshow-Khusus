<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa SMK</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <h3>SMK Negeri 1 Bawang</h3>
    <p><a href="<?= base_url(); ?>index.php/siswa/tambah">Tambah</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php 
            $no = 1;
            foreach ($siswa as $row) {
        ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['tanggal_lahir']; ?></td>
            <td><?= ($row['jenis_kelamin'] == 'L' ? "Laki - Laki" : "Perempuan"); ?></td>
            <td><?= $row['telepon']; ?></td>
            <td>
                <a href="<?= base_url() ?>index.php/siswa/ubah?nis=<?= $row['nis'] ?>">Ubah</a>
                |
                <a  href="<?= base_url() ?>index.php/siswa/hapus?nis=<?= $row['nis'] ?>" 
                    onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php 
            $no++;
        } 
        ?>
    </table>
</body>
</html>