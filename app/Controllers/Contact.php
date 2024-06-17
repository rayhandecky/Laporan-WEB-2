<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OrderModel;

class Contact extends Controller
{
    public function index()
    {
        return view('contact_form');
    }

    public function submit()
    {
        $orderModel = new OrderModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'vehicle' => $this->request->getPost('vehicle'),
            'service' => $this->request->getPost('service'),
            'message' => $this->request->getPost('message'),
        ];

        $orderModel->insert($data);

        return view('contact_result', $data);
    }
}
