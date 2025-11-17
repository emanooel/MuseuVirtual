<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import swal from 'sweetalert'

const props = defineProps({
    usuarios: Array
});

function submitDelete(id) {
    swal({
    title: "Excluir?",
    text: "Tem certeza que deseja excluir este usuário?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((apagar) => {
    if (apagar) {
      router.delete(route('usuarios.destroy', id));
      location.reload();
    }
  });
}

</script>

<template>
  <Head title="Usuários" />
  <AuthenticatedLayout>
    
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
          Usuários
        </h2>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">

            <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                    <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                    <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nome</th>
                    <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                    <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Papel</th>
                    <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr v-for="u in usuarios" :key="u.id">
                    <td class="px-6 py-4 text-center">{{ u.id }}</td>
                    <td class="px-6 py-4 text-center">{{ u.name }}</td>
                    <td class="px-6 py-4 text-center">{{ u.email }}</td>
                    <td class="px-6 py-4 text-center">
                        <span v-if="u.roles.length === 0">Nenhum</span>
                        <span v-else>{{ u.roles.map(r => r.name).join(', ') }}</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <form :action="route('usuarios.destroy', u.id)" method="POST" @submit.prevent="submitDelete(u.id)">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit"
                            class="inline-flex items-center px-2 py-1 text-sm text-red-600 dark:text-red-400 hover:underline">Excluir</button>
                          </form>
                    </td>
                    </tr>
                </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>