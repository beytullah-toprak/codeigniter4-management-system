<?php

namespace App\Controllers;

use App\Models\UserModel;

class HomeController extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $user = $model->find(2);

        return $this->response->setJSON([
            'user' => $user,
        ]);
    }
}
