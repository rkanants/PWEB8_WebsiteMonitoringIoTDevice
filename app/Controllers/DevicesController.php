<?php

namespace App\Controllers;

use \App\Models\DeviceModel;

class DevicesController extends BaseController
{   
    public function index()
    {   
        $data = [
            'title' => 'Daftar Device'
        ];

        #$deviceModel = new DeviceModel();
        #$listDevice = $deviceModel->findAll();

        return view('device/indexDeviceList', $data);

    }

    public function barang1()
    {   
        $data = [
            'title' => 'Detail Produk | CCTV BOSCH'
        ];

        return view('pages/barang1', $data);

    }

    public function barang2()
    {   
        $data = [
            'title' => 'Detail Produk | Google Home Voice Assistant'
        ];

        return view('pages/barang2', $data);

    }

    public function barang3()
    {   
        $data = [
            'title' => 'Detail Produk | ARKSV Motion Detector '
        ];

        return view('pages/barang3', $data);

    }

    // public function detail

    // public f
}
