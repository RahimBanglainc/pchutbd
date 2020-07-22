<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Abdur Rahim',
            'username' => 'admin',
            'email' => 'rahimbanglainc@gmail.com',
            'password' => bcrypt('85417131'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Rahim',
            'username' => 'client',
            'email' => 'rahimbd623@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
