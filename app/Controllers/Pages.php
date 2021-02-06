<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        // return view('pages/home');
        $data = [
            'title' => 'Home | Web Programming Unpas',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        // echo view('layout/header', $data);
        return view('pages/home', $data); // echo view('pages/home', $data);
        // echo view('layout/footer');
    }

    public function about()
    {
        // return view('pages/about');
        $data = [
            'title' => 'About Me'
        ];
        // echo view('layout/header', $data);
        return view('pages/about', $data); //echo view('pages/about', $data);
        // echo view('layout/footer');
    }

    public function contact()
    {
        // return view('pages/contact');
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln. Seroja',
                    'kota' => 'Denpasar'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jln. Merdeka',
                    'kota' => 'Denpasar'
                ]
            ]
        ];
        // echo view('layout/header', $data);
        return view('pages/contact', $data); //echo view('pages/contact', $data);
        // echo view('layout/footer');
    }
    //--------------------------------------------------------------------

}
