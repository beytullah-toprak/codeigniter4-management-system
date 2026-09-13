<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use CodeIgniter\I18n\Time;

class UserEntity extends Entity
{   
    protected $id;
    protected $group_id;
    protected $first_name;
    protected $surname;
    protected $email;
    protected $password;
    protected $verify_key;
    protected $verify_code;
    protected $bio;
    protected $status;
    
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function getID()
    {
       // return $this->attributes['id'];
    }

    public function getGroupID()
    {
        return $this->attributes['group_id'];
    }

    public function getFirstName()
    {
        return $this->attributes['first_name'];
    }

    public function getSurname()
    {
        return $this->attributes['surname'];
    }

    public function getFullName()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['surname'];
    }

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function getVerifyKey()
    {
        return $this->attributes['verify_key'];
    }

    public function getVerifyCode()
    {
        return $this->attributes['verify_code'];
    }

    public function getBio()
    {
        return $this->attributes['bio'];
    }

    public function getStatus()
    {
        return $this->attributes['status'];
    }

    public function getCreatedAt($humanize = false)
    {
        if ($humanize) {
            return Time::parse($this->attributes['created_at'])->humanize();
        }
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt($humanize = false)
    {
        if ($humanize) {
            return Time::parse($this->attributes['updated_at'])->humanize();
        }
        return $this->attributes['updated_at'];
    }

    public function getDeletedAt($humanize = false)
    {
        if ($humanize) {
            return Time::parse($this->attributes['deleted_at'])->humanize();
        }
        return $this->attributes['deleted_at'];
    }

    public function setGroupID($group_id)
    {
        $this->attributes['group_id'] = $group_id ?? NULL;
    }

    public function setFirstName(string $first_name)
    {
        $this->attributes['first_name'] = $first_name;
    } 

    public function setSurname(string $surname)
    {
        $this->attributes['surname'] = $surname;
    }

    public function setEmail(string $email)
    {
        $this->attributes['email'] = $email;
    }

    public function setPassword(string $password)
    {
        $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setVerifyKey()
    {
        helper('text');
        $this->attributes['verify_key'] = random_string('alpha', 6);
    }

    public function setVerifyCode()
    {
        helper('text');
        $this->attributes['verify_code'] = random_int(100000, 999999);
    }

    public function setBio(string $bio)
    {
        $this->attributes['bio'] = $bio;
    }

    public function setStatus(string $status = USER_PENDING)
    {
        $this->attributes['status'] = $status;
    }

    public function setCreatedAt()
    {
        $this->attributes['created_at'] = date('Y-m-d H:i:s');
    }

    public function setUpdatedAt()
    {
        $this->attributes['updated_at'] = date('Y-m-d H:i:s');
    }

    public function setDeletedAt()
    {
        $this->attributes['deleted_at'] = date('Y-m-d H:i:s');
    }





}
