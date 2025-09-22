<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps({
    mineral: Object,
});

const mineral = ref({ ...props.mineral });
const associarRochas = ref(mineral.value.rochas?.length > 0);
const rochas = ref([]);

onMounted(() => {
    axios.get('/api/rochas').then(res => {
        rochas.value = res.data;
    });
});

function submitForm() {
    const payload = { ...mineral.value };

    if (!associarRochas.value) {
        payload.rochas = [];
    }

    router.put(route('minerais.update', mineral.value.id), payload);
}
</script>

<template>
  <AuthenticatedLayout>
    <Head :title="`Editar Mineral ${mineral.nome}`" />

    <form @submit.prevent="submitForm" class="space-y-4">
      <div>
        <label for="nome" class="block font-medium">Nome</label>
        <input type="text" v-model="mineral.nome" id="nome"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
      </div>

      <div>
        <label for="descricao" class="block font-medium">Descrição</label>
        <textarea v-model="mineral.descricao" id="descricao"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
      </div>

      <!-- Switch associação -->
      <div>
        <label class="block font-medium">Associar Rochas?</label>
        <div id="switch">
          <p>Não</p>
          <label class="switch">
            <input type="checkbox" v-model="associarRochas" />
            <span class="slider round"></span>
          </label>
          <p>Sim</p>
        </div>
      </div>

      <!-- Select Rochas -->
      <div v-if="associarRochas">
        <label for="rochas" class="block font-medium">Selecione as Rochas</label>
        <select v-model="mineral.rochas" multiple
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
          <option v-for="rocha in rochas" :key="rocha.id" :value="rocha.id">
            {{ rocha.nome }}
          </option>
        </select>
      </div>

      <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
        Atualizar
      </button>
    </form>
  </AuthenticatedLayout>
</template>
