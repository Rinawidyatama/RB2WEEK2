<?php

namespace App\Controllers;

class detail extends BaseController 
{
    public function index()
    {
        echo view('part/header');
        echo view('part/topbar');
        echo view('part/navbar');
        echo view('detail');
        echo view('part/footer');
    }
}

?>