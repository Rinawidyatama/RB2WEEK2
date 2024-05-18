<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Kategori extends BaseController 
{
    public function index()
    {
        $kategori = new KategoriModel();
        $data['kat'] = $kategori->findAll();

        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('kategori', $data);
        echo view('part/footer');
    }

    public function kategori_add()
{
    $validation = \Config\Services::validation();
    $validation->setRules(['nama_kategori'=>'required']);
    $isDataValid = $validation->withRequest($this->request)->run();
    
    if($isDataValid) {
        $kat = new KategoriModel();
        $kat->insert([
            "nama_kategori" => $this->request->getPost('nama_kategori')
        ]);
        return redirect()->to('kategori');
    } else {
        $errors = $validation->getErrors();
        $data['errors'] = $errors;
        
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('kategori_add', $data);
        echo view('part_adm/footer');
    }
}
    public function kategori_edit($id)
{
    $kat = new KategoriModel();
    $data['kategori'] = $kat->find($id);

    $validation = \Config\Services::validation();
    $validation->setRules(['nama_kategori' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        $kat->update($id, [
            "nama_kategori" => $this->request->getPost('nama_kategori')
        ]);
        return redirect('kategori');
    } else {
        $data['errors'] = $validation->getErrors();
        
        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('kategori_edit', $data);
        echo view('part_adm/footer');
    }
}
    public function delete($id) {
        $kat = new KategoriModel();
        $kat->delete($id);
        return redirect('kategori');
    }
}
    ?>