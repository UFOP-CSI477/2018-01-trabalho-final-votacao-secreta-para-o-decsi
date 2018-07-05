<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'name' => 'Caio',
            'email' => 'caioqazz@gmail.com',
            'cpf' => '000.000.000-00',
            'password' => bcrypt('123456'),
            'type' => '5'
        ]);
        User::create([
            'name' => 'Alexandre Magno de Souza',
            'email' => 'alexandre@decsi.ufop.br',
            'cpf' => '000.000.000-01',
            'password' => bcrypt('123456'),
            'type' => '0'
        ]);
        User::create([
            'name' => 'Bruno Rabello Monteiro',
            'email' => 'bruno@decsi.ufop.br',
            'cpf' => '000.000.000-02',
            'password' => bcrypt('123456'),
            'type' => '1'
        ]);
        User::create([
            'name' => 'Tatiana  Alves Costa',
            'email' => 'tatiana@decea.ufop.br',
            'cpf' => '000.000.000-03',
            'password' => bcrypt('123456'),
            'type' => '1'
        ]);
        User::create([
            'name' => 'Rafael Frederico Alexandre ',
            'email' => 'rfalexandre@decsi.ufop.br',
            'cpf' => '000.000.000-04',
            'password' => bcrypt('123456'),
            'type' => '1'
        ]);
        User::create([
            'name' => 'Samira Silva',
            'email' => 'samirapgti@gmail.com',
            'cpf' => '000.000.000-05',
            'password' => bcrypt('123456'),
            'type' => '1'
        ]);
    }

}
