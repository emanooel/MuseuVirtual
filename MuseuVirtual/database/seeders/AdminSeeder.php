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

        $user = User::where('email', 'marlonvicentinisilva@gmail.com')->first();
        if ($user) {
            $user->assignRole('admin');
        }
    }
}