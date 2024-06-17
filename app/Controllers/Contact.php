<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    protected $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index()
    {
        return view('contact_list', [
            'contacts' => $this->contactModel->findAll()
        ]);
    }

    public function create()
    {
        return view('contact_form');
    }

    public function store()
    {
        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message')
        ];

        $this->contactModel->insert($data);

        return redirect()->to('/contact');
    }

    public function edit($id)
    {
        $contact = $this->contactModel->find($id);

        return view('contact_edit_form', [
            'contact' => $contact
        ]);
    }

    public function update()
    {
        $id = $this->request->getPost('id');

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message')
        ];

        $this->contactModel->update($id, $data);

        return redirect()->to('/contact');
    }

    public function delete($id)
    {
        $this->contactModel->delete($id);

        return redirect()->to('/contact');
    }
}
