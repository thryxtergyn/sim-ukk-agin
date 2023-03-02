<?php 
include '../layouts/header.php';
?>
<div class="container">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <div class="row">
        <div class="col-md-12" mt-3>
            <div class="card">
        <div class="card-header">
           DATA TANGGAPAN
        </div>
            <div class="card-body">
<table class="table table-stripped">
 <thead>
    <tr>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>NIK</th>
        <th>JUDUL</th>
        <th>TANGGAPAN</th>
        <th>STATUS</th>
        <th>AKSI</th>
    </tr>
 </thead>
 <tbody>
    <tr>
        <td>1</td>
        <td>1/12/2022</td>
        <td>321839739...</td>
        <td>Jalan Rusak</td>
        <td>Sedang diperbaiki petugas</td>
        <td>Selesai</td>
        <td>
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