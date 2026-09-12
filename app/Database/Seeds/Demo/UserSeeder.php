<?php

namespace App\Database\Seeds\Demo;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        helper('text');

        $faker = \Faker\Factory::create('tr_TR');
       for ($i=0; $i < 100; $i++) { 
            $data = [
                'group_id' => null,
                'first_name' => $faker->firstName,
                'surname' => $faker->lastName,
                'email' => $faker->email,
                'password' => password_hash('123', PASSWORD_DEFAULT),
                'verify_key' => random_string('alpha', 64),
                'verify_code' => random_int(100000, 999999),
                'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nisi et quas nobis amet facilis odit magni autem aspernatur, esse corrupti totam doloribus in perferendis sed voluptas a dignissimos maiores.',
                'status' => USER_ACTIVE,
            ];

            $this->db->table('users')->insert($data);
       }

    }
}
