<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function home()
    {   
        $data = [
            'title' => 'Home',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Simprug Raya 22',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Sudirman 254',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/home', $data);

    }

    public function device()
    {   
        $data = [
            'title' => 'Device'
        ];

        return view('pages/device', $data);

    }

    public function barang()
    {
        $data = [
            'title' => 'Barang'
        ];

        return view('pages/barang', $data);

    }
}
