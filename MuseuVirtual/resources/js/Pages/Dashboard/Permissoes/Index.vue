<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import swal from 'sweetalert'

const props = defineProps({
    permissoes: Array
});

function submitDelete(id) {
    swal({
    title: "Excluir?",
    text: "Tem certeza que deseja excluir esta permissão?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((apagar) => {
    if (apagar) {
      const a = router.delete(route('permissoes.destroy', id), {onSuccess: () => router.reload()});
      //console.log(a)
    }
  });
}
</script>

<template>
  <Head title="Permissões" />

  <AuthenticatedLayout>
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
          Permissões
        </h2>
        <a :href="route('permissoes.create')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Cadastrar Permissão
        </a>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <!-- Tabela -->
            <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-700">
              <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                  <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                  <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nome</th>
                  <th class="w-1/6 px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Ações</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                <tr v-for="permissao in permissoes" :key="permissao.id">
                  <td class="px-6 py-4 text-center">{{ permissao.id }}</td>
                  <td class="px-6 py-4 text-center">{{ permissao.name }}</td>
                  <td class="px-6 py-4 text-center">
                      <a :href="route('permissoes.edit', permissao.id)" class="inline-flex items-center px-2 py-1 text-sm text-blue-600 dark:text-blue-400 hover:underline">Editar</a>
                      <button class="inline-flex items-center px-2 py-1 text-sm text-red-600 dark:text-red-400 hover:underline" @click="submitDelete(permissao.id)">Excluir</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Caso não tenha permissões -->
            <div v-if="permissoes.length === 0" class="text-center text-gray-500 mt-6">
              Nenhuma permissão cadastrada.
            </div>

          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>