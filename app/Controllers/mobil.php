<?php

namespace App\Controllers;

use App\Models\MobilModel;

class mobil extends BaseController
{
    protected $MobilModel;
    public function __construct()
    {
        $this->MobilModel = new MobilModel();
    }

    public function index()
    {
        $mobil = $this->MobilModel->findAll();
        $data = [
            'title' => 'Daftar Dataset',
            'mobil' => $mobil
        ];




        return view('mobil/index', $data);
    }

    public function detail()
    {
        $mobil = $this->MobilModel->findAll();
        dd($mobil);
    }
}