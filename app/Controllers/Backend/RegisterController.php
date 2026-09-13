<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Validation\Auth\RegisterValidation;
use App\Models\UserModel;
use App\Entities\UserEntity;

class RegisterController extends BaseController
{
    protected $userEntity;
    protected $userModel;

    public function __construct()
    {
        $this->userEntity = new UserEntity();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        if ($this->request->getMethod() === 'POST') {
            $validation = new RegisterValidation();

            if (! $this->validate($validation->rules())) {
                return redirect()->to(route_to('admin_register'))->withInput()->with('errors', $this->validator->getErrors());
            }

            $data = [
                'first_name' => $this->request->getPost('first_name'),
                'surname'    => $this->request->getPost('surname'),
                'email'      => $this->request->getPost('email'),
                'password'   => $this->request->getPost('password'),
                'password_confirm' => $this->request->getPost('password_confirm'),
            ];

            $this->userEntity->setFirstName($data['first_name']);
            $this->userEntity->setSurname($data['surname']);
            $this->userEntity->setEmail($data['email']);
            $this->userEntity->setPassword($data['password']);
            $this->userEntity->setEmail($data['email']);
            $this->userEntity->setStatus();
            $this->userEntity->setVerifyKey();
            $this->userEntity->setVerifyCode();

            $insert = $this->userModel->insert($this->userEntity);

            if ($this->userModel->errors()) {
                return redirect()->to(route_to('admin_register'))->withInput()->with('errors', $this->userModel->errors());
            }

            //TODO: Send email verification

            return redirect()->to(route_to('admin_register'))->with('success', lang('Register.controller.register_success'))->withInput();

            
        }

        return view('admin/pages/auth/register');
    }
}
