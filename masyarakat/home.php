<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang <?php echo $_SESSION['nama']?></p>
            <div class="card">
        <div class="card-header">
            FORM PENGADUAN
        </div>
            <div class="card-body">
<form action="" method="POST">
             <div class="mb-3">
    <label class="form-label">Judul Laporan</label>
    <input type="text" class="form-control" name="judul_laporan" placeholder="Masukan Judul Laporan" required>
             </div>
             <div class="mb-3">
    <label class="form-label">Isi Laporan</label>
    <textarea class="form-control" name="isi_laporan" placeholder="Masukan Isi Laporan" required></textarea>
             </div>
             <div class="mb-3">
    <label class="form-label">Foto</label>
    <input type="file" class="form-control" name="foto" required>
             </div>

             <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
             </div>
</form>
<?php
 include '../config/koneksi.php';
 $tanggal = date("Y-m-d");
 if (isset($_POST['kirim'])) {
    $nik = $_SESSION['nik'];
    $judul_laporan = $_POST['judul_laporan'];
    $isi_laporan = $_POST['isi_laporan'];
    $status = 0;
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $lokasi = '../assets/img';
    $nama_foto = rand(0,999).'-'.$foto;

    move_uploaded_file($tmp, $lokasi, $nama_foto);
    $query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$judul_laporan','$isi_laporan','$nama_foto','$status')");
    
echo " <script>
alert('Data berhasil dikirim!');
window.location='index.php';
</script>
";

 }



?>

</div>
    </div>
        </div>
             </div>

             <div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang namamasyarakat</p>
            <div class="card">
        <div class="card-header">
            FORM PENGADUAN
        </div>
            <div class="card-body">
<table class="table table-stripped">
 <thead>
    <tr>
        <th>NO</th>
        <th>JUDUL</th>
        <th>ISI</th>
        <th>FOTO</th>
        <th>STATUS</th>
        <th>AKSI</th>
    </tr>
 </thead>
 <tbody>
    <tr>
        <td>1</td>
        <td>Jalan Rusak</td>
        <td>Laporan jalan rusak di...</td>
        <td><img src="" width="100"></td>
        <td>PROSES
            <a href="index.php?page=tanggapan">Lihat tanggapan</a>
        </td>
        <td>
            <a href="" class="btn btn-primary">EDIT</a>
            <a href="" class="btn btn-danger">HAPUS</a>
        </td>
    </tr>
 </tbody>
</table>
</div>
    </div>
        </div>
             </div> 