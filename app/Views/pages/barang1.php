<?= $this->extend('layout/pageLayoutTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Device</h1>
            <img src="/img/pweb8_image - barang_camera-bosch.png" alt="Gambar kamera cctv merek Bosch" class="deviceImage">
            <p>Nama Device  : Camera CCTV </p>
            <p>Merek        : BOSCH</p>
            <p>Jumlah       : 309 </p>
            <td><a href="/device/indexDeviceList" class="btn btn-success">Kembali</a></td>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>  

