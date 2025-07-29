<?php

namespace App\Controllers;

use App\Models\KontakModel;
use CodeIgniter\Controller;

class Page extends BaseController
{
    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view('contact');
    }

    public function kirim()
    {
        $kontakModel = new KontakModel();

        // Simpan ke database
        $kontakModel->insert([
            'nama'       => $this->request->getPost('nama'),
            'email'      => $this->request->getPost('email'),
            'telepon'    => $this->request->getPost('telepon'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Kirim email
        $email = \Config\Services::email();
        $email->setTo('amanbadi0404@gmail.com'); // Ganti dengan emailmu
        $email->setFrom('no-reply@yourdomain.com', 'Website Kontak');
        $email->setSubject('Pesan dari Form Kontak');
        $email->setMessage(
            "Nama: " . $this->request->getPost('nama') . "\n" .
            "Email: " . $this->request->getPost('email') . "\n" .
            "Telepon: " . $this->request->getPost('telepon') . "\n" .
            "Pesan:\n" . $this->request->getPost('deskripsi')
        );

        if (!$email->send()) {
            // Jika email gagal, log atau tampilkan pesan
            log_message('error', 'Email gagal dikirim: ' . $email->printDebugger(['headers']));
        }

        return redirect()->to('contact')->with('message', 'Pesan berhasil dikirim!');
    }

    public function faqs()
    {
        return view("Faqs");
    }
}
