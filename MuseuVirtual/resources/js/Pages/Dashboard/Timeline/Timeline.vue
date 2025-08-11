<script setup>
import { onMounted } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
  minerais: {
    type: Array,
    default: () => [],
  },
});

function hideAllNiveisExcept(showIds = []) {
  const niveis = document.querySelectorAll('.nivel');
  niveis.forEach(div => {
    if (showIds.includes(div.id) || div.id === 'eons') {
      div.classList.remove('escondido');
    } else {
      div.classList.add('escondido');
    }
  });
}

onMounted(() => {
  // EON
  document.querySelectorAll('.eon').forEach(eon => {
    eon.addEventListener('click', () => {
      const eonTarget = eon.id;
      if (document.getElementById(eonTarget)) {
        hideAllNiveisExcept(['eons', eonTarget]);
        document.querySelectorAll('.nivel[id^="era-"]').forEach(div =>
          div.classList.add('escondido')
        );
        document.getElementById('achou').classList.add('escondido');
      } else {
        hideAllNiveisExcept(['eons', 'achou']);
      }
    });
  });

  // ERA
  document.querySelectorAll('.era').forEach(era => {
    era.addEventListener('click', () => {
      const periodoContainerId = 'era-' + era.id;
      document.querySelectorAll('.nivel[id^="era-"]').forEach(div =>
        div.classList.add('escondido')
      );
      if (document.getElementById(periodoContainerId)) {
        document.getElementById(periodoContainerId).classList.remove('escondido');
        document.getElementById('achou').classList.add('escondido');
      } else {
        document.getElementById('achou').classList.remove('escondido');
      }
    });
  });

  // PERÍODO
  document.querySelectorAll('.periodo').forEach(periodo => {
    periodo.addEventListener('click', () => {
      document.getElementById('achou').classList.remove('escondido');
    });
  });
});
</script>

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
        <div class="eon" id="eon-1">Hadeano</div>
        <div class="eon" id="eon-2">Arqueano</div>
        <div class="eon" id="eon-3">Proterozoico</div>
        <div class="eon" id="eon-4">Fanerozoico</div>
    </div>

    <!-- ERAS DENTRO DOS EONS -->
    <div class="nivel escondido" id="eon-1">
        <div class="era" id="era-1">Pré-Arqueano</div>
    </div>

    <div class="nivel escondido" id="eon-2">
        <div class="era" id="era-2a">Eoarqueano</div>
        <div class="era" id="era-2b">Paleoarqueano</div>
        <div class="era" id="era-2c">Mesoarqueano</div>
        <div class="era" id="era-2d">Neoarqueano</div>
    </div>

    <!-- etc... -->
    <div class="nivel escondido" id="eon-3">
      <div class="era" id="301">Paleoproterozoico</div>
      <div class="era" id="302">Mesoproterozoico</div>
      <div class="era" id="303">Neoproterozoico</div>
    </div>

    <div class="nivel escondido" id="eon-4">
      <div class="era" id="401">Paleozóico</div>
      <div class="era" id="402">Mesozóico</div>
      <div class="era" id="403">Cenozóico</div>
    </div>

    <!-- PERÍODOS -->
    <div class="nivel escondido" id="era-401">
      <div class="periodo" id="40101">Cambriano</div>
      <div class="periodo" id="40102">Ordoviciano</div>
      <div class="periodo" id="40103">Siluriano</div>
      <div class="periodo" id="40104">Devoniano</div>
      <div class="periodo" id="40105">Carbonífero</div>
      <div class="periodo" id="40106">Permiano</div>
    </div>

    <div class="nivel escondido" id="era-402">
      <div class="periodo" id="40201">Triássico</div>
      <div class="periodo" id="40202">Jurássico</div>
      <div class="periodo" id="40203">Cretáceo</div>
    </div>

    <div class="nivel escondido" id="era-403">
      <div class="periodo" id="40301">Paleógeno</div>
      <div class="periodo" id="40302">Neógeno</div>
      <div class="periodo" id="40303">Quaternário</div>
    </div>

    <!-- "Oi achou" -->
    <div class="nivel escondido" id="achou">
      <div class="final">Oi, achou!</div>
    </div>
  </div>


          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
<style>
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

    .eon, .era, .periodo {
        background-color: #603985;
        padding: 10px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .eon:hover, .era:hover, .periodo:hover {
        background-color: #8159a7;
    }

    .escondido {
    display: none;
  }
  </style>