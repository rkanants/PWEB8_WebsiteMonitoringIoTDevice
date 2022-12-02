<?= $this->extend('layout/pageLayoutTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Device</h1>
            <img src="/img/pweb8_image - barang_motionDetector-arksv.jpg" alt="Gambar motion detector merek Arksv" class="deviceImage">
            <p>Nama Device  : Motion Detector </p>
            <p>Merek        : ARKSV</p>
            <p>Jumlah       : 32 </p>
            <td><a href="/device/indexDeviceList" class="btn btn-success">Kembali</a></td>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>  

