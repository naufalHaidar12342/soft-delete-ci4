<?php

namespace App\Controllers;

use App\Models\MakananModel;
use App\Models\MinumanModel;
use App\Models\PaketMakananModel;

class Home extends BaseController
{
    protected $daftarMinuman;
    protected $daftarMakanan;
    protected $daftarPaketMenu;
    public function __construct()
    {
        $this->daftarMinuman = new MinumanModel();
    }
    public function index()
    {
        $data = [
            'page_title' => 'Warung MaBar | Makan Bareng, yuk!',
            'show_minuman' => $this->daftarMinuman->findAll(),
        ];
        return view('index', $data);
    }

    public function tambahData()
    {
        return view('add_data');
    }

    public function editData($slugURL)
    {

        $data = [
            'page_title' => 'Edit Menu',
            'minuman' => $this->daftarMinuman->getWhere([
                'slugs' => $slugURL
            ])->getResultArray(),
        ];
        return view('edit', $data);
    }
}
