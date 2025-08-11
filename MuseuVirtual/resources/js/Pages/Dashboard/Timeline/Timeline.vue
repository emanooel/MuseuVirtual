<template>
  <Head title="Lista de Minerais" />
  <AuthenticatedLayout>
    
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
          Timeline
        </h2>
         <a :href="route('timeline.create')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Associar
          </a>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden2 shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">


  <div class="maior">
    <!-- EONS -->
    <div class="nivel" id="eons">
      <div
        v-for="eon in eons"
        :key="eon.id"
        class="eon"
        @click="selectEon(eon.id)"
      >
        {{ eon.nome }}
      </div>
    </div>

    <!-- ERAS -->
    <div
      v-if="activeEon"
      class="nivel"
    >
      <div
        v-for="era in erasFiltradas"
        :key="era.id"
        class="era"
        @click="selectEra(era.id)"
      >
        {{ era.nome }}
      </div>
    </div>

    <!-- PERÍODOS -->
    <div
      v-if="activeEra"
      class="nivel"
    >
      <div
        v-for="periodo in periodosFiltrados"
        :key="periodo.id"
        class="periodo"
      >
        {{ periodo.nome }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    eons: Array // [{ id, nome, eras: [{ id, nome, periodos: [{id, nome}] }] }]
  },
  data() {
    return {
      activeEon: null,
      activeEra: null
    };
  },
  computed: {
    erasFiltradas() {
      if (!this.activeEon) return [];
      const eon = this.eons.find(e => e.id === this.activeEon);
      return eon ? eon.eras : [];
    },
    periodosFiltrados() {
      if (!this.activeEra) return [];
      for (const eon of this.eons) {
        const era = eon.eras.find(er => er.id === this.activeEra);
        if (era) return era.periodos;
      }
      return [];
    }
  },
  methods: {
    selectEon(eonId) {
      this.activeEon = eonId;
      this.activeEra = null;
    },
    selectEra(eraId) {
      this.activeEra = eraId;
    }
  }
};
</script>

<style scoped>
.timeline {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

/* Todas as divs de nível */
.nivel {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  background-color: #41334d;
  padding: 15px;
  border-radius: 10px;
  width: 100%;
}

/* Botões */
.eon, .era, .periodo {
  background-color: #603985;
  color: white;
  padding: 10px 15px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.eon:hover, .era:hover, .periodo:hover {
  background-color: #8159a7;
}
</style>
