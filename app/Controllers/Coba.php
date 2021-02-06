<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini controller coba method index";
    }

    public function about($nama = '')
    {
        // echo "Hallo, nama saya $this->nama.";
        echo "Hallo, nama saya $nama.";
    }

    //--------------------------------------------------------------------

}
