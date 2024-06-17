<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Controller;

class Order extends Controller
{
    public function index()
    {
        $orderModel = new OrderModel();
        $data['orders'] = $orderModel->findAll();
        return view('order_list', $data);
    }

    public function create()
    {
        return view('order_create');
    }

    public function store()
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
        return redirect()->to('/order');
    }

    public function edit($id)
    {
        $orderModel = new OrderModel();
        $data['order'] = $orderModel->find($id);
        return view('order_edit', $data);
    }

    public function update($id)
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
        
        $orderModel->update($id, $data);
        return redirect()->to('/order');
    }

    public function delete($id)
    {
        $orderModel = new OrderModel();
        $orderModel->delete($id);
        return redirect()->to('/order');
    }
}
