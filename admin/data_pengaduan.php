<?php 
include '../layouts/header.php';
?>
<div class="container">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <div class="row">
        <div class="col-md-12" mt-3>
            <div class="card">
        <div class="card-header">
           DATA PENGADUAN
        </div>
            <div class="card-body">
<table class="table table-stripped">
 <thead>
    <tr>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>NAMA</th>
        <th>JUDUL</th>
        <th>LAPORAN</th>
        <th>FOTO</th>
        <th>STATUS</th>
        <th>AKSI</th>
    </tr>
 </thead>
 <tbody>
    <tr>
        <td>1</td>
        <td>1/12/2022</td>
        <td>Abdul</td>
        <td>Jalan Rusak</td>
        <td>Laporan jalan rusak di...</td>
        <td><img src=""></td>
        <td>Menunggu</td>
        <td>
            <a href="" class="btn btn-primary">VERIFIKASI</a>
            <a href="" class="btn btn-success">TANGGAPI</a>
            <a href="" class="btn btn-danger">HAPUS</a>
        </td>
    </tr>
 </tbody>
</table>
</div>
    </div>
        </div>
             </div> 
<?php
include '../layouts/footer.php';
?>