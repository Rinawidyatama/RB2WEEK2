<?php

namespace App\Controllers;

class checkout extends BaseController 
{
    public function index()
    {
        echo view('part/header');
        echo view('part/topbar');
        echo view('part/navbar');
        echo view('checkout');
        echo view('part/footer');
    }
}

?>