<?= $this->extend('layout/pageLayoutTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Device</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Device_Name</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Device-1 -->
                    <tr>
                    <th scope="row">1</th>
                    <td><img src="/img/pweb8_image - barang_camera-bosch.png" alt="Gambar kamera cctv merek Bosch" class="deviceImage"></td>
                    <td>Camera CCTV</td>
                    <td>BOSCH</td>
                    <td>309</td>
                    <td>1</td>
                    <td><a href="/pages/barang1" class="btn btn-success">Details</a></td>
                    </tr>
                    
                    <!-- Device-2 -->
                    <tr>
                    <th scope="row">2</th>
                    <td><img src="/img/pweb8_image - barang_HomeVoiceController-Google.jpeg" alt="Gambar kamera Home Voice Controller merek Google" class="deviceImage"></td>
                    <td>Home Voice Controller</td>
                    <td>Google</td>
                    <td>43</td>
                    <td>1</td>
                    <td><a href="/pages/barang2" class="btn btn-success">Details</a></td>
                    </tr>

                    <!-- Device-3 -->
                    <tr>
                    <th scope="row">3</th>
                    <td><img src="/img/pweb8_image - barang_motionDetector-arksv.jpg" alt="Gambar motion detector merek Arksv" class="deviceImage"></td>
                    <td>Motion Detector</td>
                    <td>ARKSV</td>
                    <td>32</td>
                    <td>0</td>
                    <td><a href="/pages/barang3" class="btn btn-success">Details</a></td>
                    </tr>
                    
                </tbody>
             </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>