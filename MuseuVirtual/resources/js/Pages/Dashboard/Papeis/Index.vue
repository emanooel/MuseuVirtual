<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import swal from 'sweetalert';

const props = defineProps({
    papeis: Array
});

function submitDelete(id) {
    swal({
        title: "Excluir?",
        text: "Tem certeza que deseja excluir este papel?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((confirmado) => {
        if (confirmado) {
            router.delete(route('papeis.destroy', id), {
                preserveScroll: true
            });
        }
    });
}
</script>

<template>
  <Head title="Papéis" />

  <AuthenticatedLayout>
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">Papéis</h2>

        <a :href="route('papeis.create')"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Cadastrar Papel
        </a>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">

            <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-700">
              <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                  <th class="px-6 py-3 text-center text-xs font-semibold uppercase">ID</th>
                  <th class="px-6 py-3 text-center text-xs font-semibold uppercase">Nome</th>
                  <th class="px-6 py-3 text-center text-xs font-semibold uppercase">Permissões</th>
                  <th class="px-6 py-3 text-center text-xs font-semibold uppercase">Ações</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                <tr v-for="papel in papeis" :key="papel.id">
                  <td class="px-6 py-4 text-center">{{ papel.id }}</td>

                  <td class="px-6 py-4 text-center">{{ papel.name }}</td>

                  <td class="px-6 py-4 text-center">
                    {{ papel.permissions.join(', ') }}
                  </td>

                  <td class="px-6 py-4 text-center">
                    <a :href="route('papeis.edit', papel.id)" class="inline-flex items-center px-2 py-1 text-sm text-blue-600 dark:text-blue-400 hover:underline">Editar</a>
                    <button @click="submitDelete(papel.id)" class="text-red-600 dark:text-red-400 hover:underline text-sm">
                      Excluir
                    </button>
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