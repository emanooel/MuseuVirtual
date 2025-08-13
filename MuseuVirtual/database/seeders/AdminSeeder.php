<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Garante que o papel 'admin' existe
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        // Lista de e-mails que devem ser admins
        $adminEmails = [
            'admin@admin.com',
            'caiomottabarcelos13@gmail.com',
            'emanoelmartinsv@gmail.com',
            'walpxt2006@gmail.com',
        ];

        foreach ($adminEmails as $email) {
            $user = User::where('email', $email)->first();
            if ($user) {
                $user->assignRole($adminRole);
                $this->command->info("Usuário {$email} recebeu o papel admin.");
            } else {
                $this->command->warn("Usuário com e-mail {$email} não encontrado.");
            }
        }
    }
}
