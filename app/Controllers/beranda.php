<?php

namespace App\Controllers;

class beranda extends BaseController
{
    public function index ()
    {
        echo view('part/header');
        echo view('part/topbar');
        echo view('part/navbar');
        echo view('beranda');
        echo view('part/footer');
    }
}

?>