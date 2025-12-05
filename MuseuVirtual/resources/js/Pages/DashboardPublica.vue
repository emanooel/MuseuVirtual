<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

    <Head title="Dashboard" />
        <template #header>
            <h1>Acesso Negado</h1>
            <h3>Comunicar com um admnistrador para lhe dar função de adm.</h3>
            <p>Se você era pra ter acesso, é só rodar: </p>
            <p>./vendor/bin/sail artisan migrate:fresh --seed</p>
        </template>