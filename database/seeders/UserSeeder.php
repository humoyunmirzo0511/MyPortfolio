<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Humoyunmirzo',
                'email' => 'humoyunmirzoyoqubjonov@gmail.com',
                'password' => bcrypt('Yoqubjonov993941105'),
                'is_admin' => '1',
            ],
            [
                'name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => null,
            ]
        ]);
    }
}
