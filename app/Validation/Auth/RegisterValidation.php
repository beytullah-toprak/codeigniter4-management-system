<?php

namespace App\Validation\Auth;

class RegisterValidation
{
    public static function rules(): array
    {
        return [
            'first_name' => [
                'rules' => 'required|min_length[2]|max_length[255]',
                'errors' => [
                    'required' => lang('Register.validation.first_name_required'),
                    'min_length' => lang('Register.validation.first_name_min_length'),
                    'max_length' => lang('Register.validation.first_name_max_length'),
                ],
            ],

            'surname' => [
                'rules' => 'required|min_length[2]|max_length[255]',
                'errors' => [
                    'required' => lang('Register.validation.surname_required'),
                    'min_length' => lang('Register.validation.surname_min_length'),
                    'max_length' => lang('Register.validation.surname_max_length'),
                ],
            ],

            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => lang('Register.validation.email_required'),
                    'valid_email' => lang('Register.validation.email_valid_email'),
                    'is_unique' => lang('Register.validation.email_is_unique'),
                ],
            ],

            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => lang('Register.validation.password_required'),
                    'min_length' => lang('Register.validation.password_min_length'),
                ],
            ],

            'password_confirm' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => lang('Register.validation.password_confirm_required'),
                    'matches' => lang('Register.validation.password_confirm_matches'),
                ],
            ],
        ];
    }
}
