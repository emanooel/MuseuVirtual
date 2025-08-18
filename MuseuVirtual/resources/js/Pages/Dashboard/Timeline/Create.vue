<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { ref, reactive, onMounted } from 'vue';
import axios from 'axios';

const form = reactive({
    eon: '',
    era: '',
    periodo: '',
    idRocha: '',
    idMineral: ''
});

const props = defineProps({
  rochas: Array,
  minerais: Array,
});

function submitForm() {
    const payload = new FormData();

    // eons não são enviados
    payload.append('era', form.era);
    payload.append('periodo', form.periodo);

    if (form.idRocha) {
        payload.append('idRocha', form.idRocha);
    } else if (form.idMineral) {
        payload.append('idMineral', form.idMineral);
    }

    router.put(route('Timeline.update', id), payload);
}


</script>

<template>
    <Head title="Associar" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
                Associar Formação Geológica
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="eon" class="block font-medium">Éon</label>
                                <select id="eon" v-model="form.eon" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha um éon...</option>
                                    <option value="1">Hadeano</option>
                                    <option value="2">Arqueano</option>
                                    <option value="3">Proterozoico</option>
                                    <option value="4">Fanerozoico</option>
                                </select>
                            </div>

                            <!-- Hadeano -->
                            <div class="mb-4" v-if="form.eon == '1'">
                                <label for="era" class="block font-medium">Era</label>
                                <select id="era" v-model="form.era" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha uma era...</option>
                                    <option value="">Pré-Arqueano</option>
                                </select>
                            </div>

                            <!-- Arqueano -->
                            <div class="mb-4" v-if="form.eon === '2'">
                                <label for="era" class="block font-medium">Era</label>
                                <select id="era" v-model="form.era" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha uma era...</option>
                                    <option value="1">Eoarqueano</option>
                                    <option value="2">Paleoarqueano</option>
                                    <option value="3">Mesoarqueano</option>
                                    <option value="4">Neoarqueano</option>
                                </select>
                            </div>

                            <!-- Proterozoico -->
                            <div class="mb-4" v-if="form.eon === '3'">
                                <label for="era" class="block font-medium">Era</label>
                                <select id="era" v-model="form.era" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha uma era...</option>
                                    <option value="5">Paleoproterozoico</option>
                                    <option value="6">Mesoproterozoico</option>
                                    <option value="7">Neoproterozoico</option>
                                </select>
                            </div>

                            <!-- Fanerozoico -->
                            <div class="mb-4" v-if="form.eon === '4'">
                                <label for="era" class="block font-medium">Era</label>
                                <select id="era" v-model="form.era" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha uma era...</option>
                                    <option value="8">Paleozóico</option>
                                    <option value="9">Mesozóico</option>
                                    <option value="10">Cenozóico</option>
                                </select>
                            </div>

                            <!-- Paleozóico -->
                            <div v-if="form.eon == '4'">
                            <div class="mb-4" v-if="form.era == '8'">
                                <label for="periodo" class="block font-medium">Período</label>
                                <select id="periodo" v-model="form.periodo" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha um período...</option>
                                    <option value="1">Cambriano</option>
                                    <option value="2">Ordoviciano</option>
                                    <option value="3">Siluriano</option>
                                    <option value="4">Devoniano</option>
                                    <option value="5">Carbonífero</option>
                                    <option value="6">Permiano</option>
                                </select>
                            </div>

                            <!-- Mesozóico -->
                            <div class="mb-4" v-if="form.era == '9'">
                                <label for="periodo" class="block font-medium">Período</label>
                                <select id="periodo" v-model="form.periodo" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha um período...</option>
                                    <option value="7">Triássico</option>
                                    <option value="8">Jurássico</option>
                                    <option value="9">Cretáceo</option>

                                </select>
                            </div>

                            <!-- Cenozóico -->
                            <div class="mb-4" v-if="form.era == '10'">
                                <label for="periodo" class="block font-medium">Período</label>
                                <select id="periodo" v-model="form.periodo" required
                                    class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                    <option value="" disabled>Escolha uma período...</option>
                                    <option value="10">Paleógeno</option>
                                    <option value="11">Neógeno</option>
                                    <option value="12">Quaternário</option>
                                </select>
                            </div>
                            </div>

                            <!-- Rocha ou mineral -->
                            <div>
                            <label for="idMineral" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mineral</label>
                            <select
                                v-model="form.idMineral" @change="form.idRocha = ''"
                                class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                <option value="">Escolha um mineral...</option>
                                <option v-for="mineral in props.minerais" :key="mineral.id" :value="mineral.id">{{ mineral.nome }}</option>
                            </select>
                            </div>

                            <div>
                            <label for="idRocha" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rocha</label>
                            <select
                                v-model="form.idRocha" @change="form.idMineral = ''"
                                class="block mt-1 w-full border-gray-300 dark:bg-gray-700 dark:text-white rounded-md shadow-sm">
                                <option value="">Escolha uma rocha...</option>
                                <option v-for="rocha in props.rochas" :key="rocha.id" :value="rocha.id">{{ rocha.nome }}</option>
                            </select>
                            </div>

                            <div class="mt-6">
                                <button type="submit"
                                    class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                                    Associar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
