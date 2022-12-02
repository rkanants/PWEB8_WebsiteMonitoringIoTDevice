<?= $this->extend('layout/pageLayoutTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Device</h1>
            <img src="/img/pweb8_image - barang_HomeVoiceController-Google.jpeg" alt="Gambar kamera Home Voice Controller merek Google" class="deviceImage">
            <p>Nama Device  : Home Voice Controller </p>
            <p>Merek        : Google</p>
            <p>Jumlah       : 43 </p>
            <td><a href="/device/indexDeviceList" class="btn btn-success">Kembali</a></td>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>  

