<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $users = new UserModel();
        $data['user'] = $users->findAll();
        return view('welcome_message', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $users = new UserModel();
        $users->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'nomer_hp' => $this->request->getPost('nomer_hp'),

        ]);
        session()->setFlashdata('success', 'Data berhasil ditambahkan!');
        return redirect()->to(base_url('/'));
    }
}
