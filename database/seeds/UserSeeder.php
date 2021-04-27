<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

            'nom' => 'Administrateur',
            'prenom' => 'Admin',
            'date_naiss' => '2020/11/5',
            'photo' => 'paveduc',
            'ville' => 'admin',
            'pays' => 'admin',
            'ecole' => 'Admin',
            'genre' => 'Admin',
            'tel' => 'Admin',
            'classe' => 'Admin',
            'is_admin' => '1',
            'email' => 'paveduc@gmail.com',
            'password' => Hash::make('paveduc'),
        ]);
    }
}
