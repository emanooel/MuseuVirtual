<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

    <Head title="Dashboard" />
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                <center>Dashboard Pública</center>
            </h2>

            <p>Oi!! Adicione o email da sua conta em database/seeders/AdminSeeder.php e rode o seeder para virar adm! Por padrão, você pode cadastrar uma conta com o e-mail admin@admin.com que vai funcionar.</p>
            <p>Para entrar na dashboard depois de virar adm é só substituir dashboardPublica por dashboard na url(http://localhost/dashboard).</p>
            <br>
            <pre>
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

            $user = User::where('email', 'seuemailaqui@seuprovedor.com')->first(); //Coloca o aqui teu email e rode o seeder com ./vendor/bin/sail artisan db:seed --class=AdminSeeder
            if ($user) {
                $user->assignRole('admin');
            }
        }
    }
            </pre>
            <p><em>ps: Ainda precisa adicionar uma forma de sair da conta sem ter acesso ao dashboard.</em></p>
        </template>