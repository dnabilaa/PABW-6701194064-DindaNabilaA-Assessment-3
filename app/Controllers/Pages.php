<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | CreatePaket'
        ];


        return view('pages/home', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Home | CreatePaket'
        ];

        return view('pages/create', $data);
    }
    public function listpaket()
    {
        $data = [
            'title' => 'Home | ListPaket'
        ];
        return view('pages/listpaket', $data);
    }
    public function update()
    {
        $data = [
            'title' => 'Home | Update'
        ];
        return view('pages/update', $data);
    }
    public function foto()
    {
        $data = [
            'title' => 'Home | Update'
        ];
        return view('pages/foto', $data);
    }
}