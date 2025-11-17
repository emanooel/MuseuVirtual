<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm, Head } from '@inertiajs/vue3';

const props = defineProps({
    permissao: Object,
});

const form = useForm({
    nome: props.permissao.name
});

function submitForm() {
    form.put(route('permissoes.update', props.permissao.id));
}

</script>

<template>
    <Head title="Editar Permissão" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form @submit.prevent="submitForm">
                            <div class="mb-4">
                                <label for="nome" class="block mt-1 w-full">Nome da Permissão</label>
                                <input v-model="form.nome" type="text" id="nome" 
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                           focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                           rounded-md shadow-sm"/>
                            </div>

                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Salvar
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>