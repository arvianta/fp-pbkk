<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(30)->create();
        User::insert([
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Rayhan Arvianta',
                'email' => 'rayhan.arvianta@gmail.com',
                'phone_number' => '081282351996',
                'role_id' => 1,
                'password' => bcrypt('rayhan123'),
                'age' => 20,
                'height' => 180,
                'weight' => 78,
                'profile_picture' => 'awdsadsawwds',
            ],
        ]);

        User::insert([
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Muh Daffa',
                'email' => 'muhdaffa2410@gmail.com',
                'phone_number' => '085156256502',
                'role_id' => 1,
                'password' => bcrypt('admin1234'),
                'age' => 21,
                'height' => 171,
                'weight' => 57,
                'profile_picture' => 'dfsdf',
            ],
        ]);
    }
}
