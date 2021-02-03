<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'Atiqotul Ummah',
            'username' => 'atiq',
            'email' => 'atiq@gmail.com',
            'password'  => bcrypt('4Tiqalyasini')
    ]);
    }
}
