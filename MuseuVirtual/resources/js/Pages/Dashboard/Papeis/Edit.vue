<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm, Head } from '@inertiajs/vue3';

const props = defineProps({
    permissoes: Array
});

const form = useForm({
    name: '',
    permissions: []
});

function submitForm() {
    form.post(route('papeis.store'));
}
</script>

<template>
  <Head title="Criar papel" />
  <AuthenticatedLayout>
    
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
          Papéiso
        </h2>
        
      </div>
    </template>

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

              <div class="mt-4 grid grid-cols-4 gap-4">
                <div v-for="permissao in props.permissoes" :key="permissao.id" class="flex items-center gap-2">
                  <input type="checkbox" class="rounded" :value="permissao.name" v-model="form.permissions"/>
                  <label>{{ permissao.name }}</label>
                </div>
              </div>

              <!-- Botão de Envio -->
              <div class="mt-6">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700"> Criar Papel </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  </AuthenticatedLayout>
</template>