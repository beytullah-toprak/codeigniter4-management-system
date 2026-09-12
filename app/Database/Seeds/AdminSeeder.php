<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        helper('text');

        $data = [
            'group_id' => 1,
            'first_name' => 'Beytullah',
            'surname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => password_hash('123', PASSWORD_DEFAULT),
            'verify_key' => random_string('alpha', 64),
            'verify_code' => random_int(100000, 999999),
            'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nisi et quas nobis amet facilis odit magni autem aspernatur, esse corrupti totam doloribus in perferendis sed voluptas a dignissimos maiores.',
            'status' => USER_ACTIVE,
        ];

        $this->db->table('users')->insert($data);

    }
}
