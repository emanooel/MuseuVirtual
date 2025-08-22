<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'admin@admin.com')->first();
        if ($user) {
            $user->assignRole('admin');
        }

        $user = User::where('email', 'caiomottabarcelos13@gmail.com')->first();
        if ($user) {
            $user->assignRole('admin');
        }

        $user = User::where('email', 'emanoelmartinsv@gmail.com')->first(); //Coloca o aqui teu email e rode o seeder com ./vendor/bin/sail artisan db:seed --class=AdminSeeder
        if ($user) {
            $user->assignRole('admin');
        }
<<<<<<< HEAD

        $user = User::where('email', 'pezzinscaramussalivia@gmail.com')->first(); //Coloca o aqui teu email e rode o seeder com ./vendor/bin/sail artisan db:seed --class=AdminSeeder
=======
        $user = User::where('email', 'gabrag0987a@gmail.com')->first(); //Coloca o aqui teu email e rode o seeder com ./vendor/bin/sail artisan db:seed --class=AdminSeeder
>>>>>>> 74bad2780f2bd2c2f69d6a0dca025bc1abdc6004
        if ($user) {
            $user->assignRole('admin');
        }
    }
}