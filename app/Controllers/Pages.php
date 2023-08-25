<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $asu = [
            'title' => 'Home '
        ];

        return view('pages/home', $asu);
    }

    public function about()
    {
        $data = array(
            'title' => 'Abaout'
        );
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact US',
            'alamat' => [
                'tipe' => 'rumah',
                'alamat' => 'Jl. Bumikita Jakarta',
                'kota' => ' Sulawesi'
            ],
            'kontak' => [
                'tipe' => 'kantor',
                'alamat' => 'Jl. Kontolamu ',
                'kota' => 'Jakarta'
            ]
        ];
        return view('pages/contact', $data);
    }
}
