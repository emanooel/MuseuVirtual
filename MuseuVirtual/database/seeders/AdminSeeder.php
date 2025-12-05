<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Limpar cache de permissões
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /**
         * 1. Criar permissões
         */
        $permissoes = [
            'ver usuarios',
            'crud usuarios',
            'ver permissoes',
            'crud permissoes',
            'ver papeis',
            'crud papeis',
            'ver minerais',
            'crud minerais',
            'ver rochas',
            'crud rochas',
            'ver jazidas',
            'crud jazidas',
            'ver timeline',
            'crud timeline',
        ];

        foreach ($permissoes as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        /**
         * 2. Criar role admin
         */
        $adminRole = Role::firstOrCreate(['name' => 'admin']); // padronize para "admin"

        // Atribui TODAS as permissões ao admin
        $adminRole->syncPermissions($permissoes);

        /**
         * 3. Criar usuários admin
         */
        $usuarios = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin@pass2025'),
            ],
            [
                'name' => 'Caio Motta Barcelos',
                'email' => 'caiomottabarcelos13@gmail.com',
                'password' => bcrypt('MuseuCaio@2025'), 
            ],
            [
                'name' => 'Emanoel Martins Vieira',
                'email' => 'emanoelmartinsv@gmail.com',
                'password' => bcrypt('emanoel@pass2025'),
            ],
            [
                'name' => 'Rodrigo',
                'email' => 'rodrigo@gmail.com',
                'password' => bcrypt('mvrodrigu@pass2025'),
            ],
            [
                'name' => 'Lívia Pezzin Scaramussa',
                'email' => 'pezzinscaramussalivia@gmail.com',
                'password' => bcrypt('pezzin@liviaMuseu'),
            ],
            [
                'name' => 'Rafael',
                'email' => 'rafael@gmail.com',
                'password' => bcrypt('museu@2025'),
            ],
            [
                'name' => 'Juliano',
                'email' => 'juliano@gmail.com',
                'password' => bcrypt('museu@2025'),
            ],
            [
                'name' => 'Gabriel Melo',
                'email' => 'gabrag0987a@gmail.com',
                'password' => bcrypt('2025Gabra@Museu'),
            ],
            [
                'name' => 'Livia Vieira',
                'email' => 'liviavieira@gmail.com',
                'password' => bcrypt('2025Museu@Cachos'),
            ],
            [
                'name' => 'Wallace',
                'email' => 'wallace@gmail.com',
                'password' => bcrypt('Wallace2025@Museu'),
            ],
            [
                'name' => 'Marlon',
                'email' => 'marlon@gmail.com',
                'password' => bcrypt('VirtualMarlon@2025'),
            ]
        ];

        foreach ($usuarios as $dados) {
            $user = User::firstOrCreate(
                ['email' => $dados['email']],
                $dados
            );

            // garante que sempre tenha o role admin
            if (!$user->hasRole('admin')) {
                $user->assignRole('admin');
            }
        }
    }
}
