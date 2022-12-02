<?= $this->extend('layout/pageLayoutTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Selamat Datang di Website Monitoring IoT</h1>
            <h2>IoT</h2>
            <p>IoT merupakan Internet untuk Segala merupakan sebuah konsep yang bertujuan untuk memperluas manfaat dari konektivitas internet yang tersambung secara terus-menerus. Adapun kemampuan seperti berbagi data, remote control, dan sebagainya, termasuk juga pada benda di dunia nyata</p>

            <h2>Tentang Website</h2>
            <p>Merupakan website yang dikembangkan untuk membantu system administrator dalam memonitor dan mengontrol perangkat IoT yang digunakan di Kantor.</p>

            <h2>Alamat Kantor</h2>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
            <?php endforeach ?>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>  

    