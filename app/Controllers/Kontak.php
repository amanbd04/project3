<?php

namespace App\Controllers;

use App\Models\KontakModel;
use CodeIgniter\Controller;

class Kontak extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function kirim()
    {
        helper(['form', 'url']);
        $kontakModel = new KontakModel();

        $data = [
            'nama'      => $this->request->getPost('nama'),
            'email'     => $this->request->getPost('email'),
            'telepon'   => $this->request->getPost('telepon'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $kontakModel->insert($data);

        $email = \Config\Services::email();
        $email->setTo('amanbadi0404@gmail.com');
        $email->setSubject('Pesan dari Form Kontak');
        $email->setMessage("
            <strong>Nama:</strong> {$data['nama']}<br>
            <strong>Email:</strong> {$data['email']}<br>
            <strong>Telepon:</strong> {$data['telepon']}<br>
            <strong>Pesan:</strong><br>{$data['deskripsi']}
        ");

        if ($email->send()) {
            return redirect()->to('/contact')->with('message', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->to('/contact')->with('message', 'Gagal mengirim pesan.');
        }
    }
}
