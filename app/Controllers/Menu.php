<?php
namespace App\Controllers;
use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        $data['semua_menu'] = $model->findAll();
        $data['kopi'] = $model->where('kategori', 'kopi')->findAll();
        $data['makanan'] = $model->where('kategori', 'makanan')->findAll();

        return view('menu', $data);
    }
}
