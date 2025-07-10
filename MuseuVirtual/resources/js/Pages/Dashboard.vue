<template>
  <AuthenticatedLayout>
    <Head title="Dashboard" />

    <div class="max-w-5xl mx-auto py-10 px-4 bg-gray-900 min-h-screen">
      <h1 class="text-2xl font-bold text-white mb-6">Bem-vindo, Gabriel</h1>

      <!-- Estatísticas -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
        <div
          v-for="item in estatisticasList"
          :key="item.label"
          class="bg-gray-800 rounded-lg shadow-sm p-4 text-center"
        >
          <h3 class="text-sm text-gray-400">{{ item.label }}</h3>
          <p class="text-2xl font-semibold text-indigo-400">{{ item.total }}</p>
        </div>
      </div>

      <!-- Alerta -->
      <div
        v-if="fotosSemLigacao > 0"
        class="bg-yellow-100 border border-yellow-400 text-yellow-800 rounded p-4 mb-6"
      >
        Você tem <strong>{{ fotosSemLigacao }}</strong> foto(s) sem ligação com rochas, minerais ou jazidas.
        <a href="/fotos" class="underline">Organize agora</a>.
      </div>

      <!-- Relatórios e ações rápidas -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
        <!-- Relatórios -->
        <div class="bg-gray-800 rounded-lg shadow p-5">
          <h2 class="text-lg font-semibold text-white mb-4">Relatórios</h2>
          <button
            class="w-full mb-2 bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded font-semibold"
            @click="gerarRelatorioPDF"
          >
            Gerar Relatório PDF
          </button>
          <button
            class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded font-semibold"
            @click="gerarRelatorioCSV"
          >
            Exportar CSV
          </button>
        </div>

        <!-- Ações Rápidas -->
        <div class="bg-gray-800 rounded-lg shadow p-5">
          <h2 class="text-lg font-semibold text-white mb-4">Ações Rápidas</h2>
          <div class="flex flex-col space-y-2">
            <a href="/fotos/create" class="bg-blue-600 hover:bg-blue-700 text-white py-2 rounded text-center font-semibold">Adicionar Foto</a>
            <a href="/rochas/create" class="bg-gray-600 hover:bg-gray-700 text-white py-2 rounded text-center font-semibold">Cadastrar Rocha</a>
            <a href="/minerais/create" class="bg-gray-600 hover:bg-gray-700 text-white py-2 rounded text-center font-semibold">Cadastrar Mineral</a>
            <a href="/jazidas/create" class="bg-gray-600 hover:bg-gray-700 text-white py-2 rounded text-center font-semibold">Cadastrar Jazida</a>
          </div>
        </div>
      </div>

      <!-- Atividades Recentes -->
      <div class="bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold text-white mb-4">Atividades Recentes</h2>
        <ul class="space-y-4">
          <li
            v-for="(atividade, index) in atividades"
            :key="index"
            class="flex items-center space-x-4"
          >
            <img :src="atividade.imagem" alt="preview" class="w-14 h-14 object-cover rounded" />
            <div class="flex-1 text-sm text-gray-200">
              <p class="font-medium">{{ atividade.texto }}</p>
              <span class="text-xs text-gray-400">{{ atividade.sub }}</span>
            </div>
            <a :href="`/${atividade.tipo}/${atividade.id}/edit`" class="text-blue-400 text-sm font-medium hover:underline">Ver</a>
          </li>
        </ul>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
import { computed } from 'vue'

const props = defineProps({
  estatisticas: Object,
  atividades: Array,
  fotosSemLigacao: Number
})

const estatisticasList = computed(() => [
  { label: 'Rochas', total: props.estatisticas?.rochas ?? 0 },
  { label: 'Minerais', total: props.estatisticas?.minerais ?? 0 },
  { label: 'Jazidas', total: props.estatisticas?.jazidas ?? 0 },
  { label: 'Fotos', total: props.estatisticas?.fotos ?? 0 }
])

const gerarRelatorioPDF = () => {
  alert('Gerando relatório em PDF...')
}

const gerarRelatorioCSV = () => {
  alert('Exportando dados em CSV...')
}
</script>
