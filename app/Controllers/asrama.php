<?php

namespace App\Controllers;

use App\Models\PaketModel;

class asrama extends BaseController
{
    protected $paketModel;
    public function __construct()
    {
        $this->paketModel = new PaketModel();
    }
    public function index()
    {
        $paket = $this->paketModel->findAll();
        dd($paket);


        $data = [
            'title' => 'Daftar Paket',
            'paket' => $paket
        ];


        return view('asrama/index', $data);
    }
}