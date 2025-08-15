<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
import Timeline from '@/Components/Timeline.vue'

// Aqui você pode receber os dados vindos do Laravel via props
const props = defineProps({
  eons: {
    type: Array,
    default: () => []
  }
})
</script>

<template>
  <Head title="Linha do Tempo" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
        Linha do Tempo Geológica
      </h2>
    </template>

    <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <Timeline :eons="eons" />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>