<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\UserEntity;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = UserEntity::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'group_id',
        'first_name',
        'surname',
        'email',
        'password',
        'verify_key',
        'verify_code',
        'bio',
        'status',
        'deleted_at'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'first_name' => 'required|string|min_length[3]|max_length[100]',
        'surname' => 'required|string|min_length[2]|max_length[100]',
        'email' => 'required|valid_email|is_unique[users.email,id,{id}]',
        'password' => 'required',
        'verify_key' => 'required|alpha',
        'verify_code' => 'required|numeric|min_length[6]',
        'bio' => 'permit_empty|string|max_length[255]',
        'status' => 'required|in_list[' . USER_ACTIVE . ',' . USER_PENDING . ',' . USER_PASSIVE . ']',
    ];
    protected $validationMessages   = [
        'first_name' => [
            'required' => 'User.model.validation.first_name.required',
            'string' => 'User.model.validation.first_name.string',
            'min_length' => 'User.model.validation.first_name.min_length',
            'max_length' => 'User.model.validation.first_name.max_length',
        ],
        'surname' => [
            'required' => 'User.model.validation.surname.required',
            'string' => 'User.model.validation.surname.string',
            'min_length' => 'User.model.validation.surname.min_length',
            'max_length' => 'User.model.validation.surname.max_length',
        ],
        'email' => [
            'required' => 'User.model.validation.email.required',
            'valid_email' => 'User.model.validation.email.valid_email',
            'is_unique' => 'User.model.validation.email.is_unique',
        ],
        'password' => [
            'required' => 'User.model.validation.password.required',
        ],
        'verify_key' => [
            'required' => 'User.model.validation.verify_key.required',
            'alpha' => 'User.model.validation.verify_key.alpha',
        ],
        'verify_code' => [
            'required' => 'User.model.validation.verify_code.required',
            'numeric' => 'User.model.validation.verify_code.numeric',
            'min_length' => 'User.model.validation.verify_code.min_length',
        ],
        'bio' => [
            'required' => 'User.model.validation.bio.required',
            'string' => 'User.model.validation.bio.string',
            'max_length' => 'User.model.validation.bio.max_length',
        ],
        'status' => [
            'required' => 'User.model.validation.status.required',
            'in_list' => 'User.model.validation.status.in_list',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
