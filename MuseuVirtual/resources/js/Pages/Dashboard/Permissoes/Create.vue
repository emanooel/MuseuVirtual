<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, router } from '@inertiajs/vue3';

const form = useForm({
    name: ''
});

function submitForm() {
    form.post(route('permissoes.store'));
}

</script>

<template>
  <Head title="Cadastrar Permissão" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
        Cadastrar Permissão
      </h2>
    </template>

<!-- Formulário de Criação -->
    <form @submit.prevent="submitForm" enctype="multipart/form-data">
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <!-- Nome -->
              <div class="mb-4">
                <label for="name" class="block font-medium">Nome</label>
                <input v-model="form.name" type="text" required class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm" />
              </div>
              <!-- Botão de Envio -->
              <div class="mt-6">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700"> Criar Permissão </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </AuthenticatedLayout>
</template>