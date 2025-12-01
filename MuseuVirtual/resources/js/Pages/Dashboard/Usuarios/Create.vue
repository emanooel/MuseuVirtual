<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm, Head } from '@inertiajs/vue3';

const props = defineProps({
    usuario: Object,
    papeis: Array,
});

function submitForm() {
    form.put(route('usuarios.store'));
}
</script>

<template>
    <Head title="Cadastar Usuário" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form @submit.prevent="submitForm">

                            <div class="mb-4">
                                <label for="name" class="block mt-1 w-full">Nome do usuário</label>
                                <input type="text"
                                       id="name"
                                       class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                       focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                       rounded-md shadow-sm"/>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block mt-1 w-full">E-mail</label>
                                <input type="email"
                                       id="email"
                                       class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                       focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                       rounded-md shadow-sm"/>
                            </div>

                            <div class="mb-4">
                                <label for="senha" class="block mt-1 w-full">Senha</label>
                                <input type="password"
                                      placeholder="Insira a senha."
                                      id="senha"
                                      class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                      focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                      rounded-md shadow-sm"/>
                            </div>

                            <div class="mb-4">
                                <label for="confirmarSenha" class="block mt-1 w-full">Confirme a senha</label>
                                <input type="password"
                                      placeholder="Confirme a senha."
                                      id="confimarSenha"
                                      class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                      focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                      rounded-md shadow-sm"/>
                            </div>

                            <div class="mt-4 grid grid-cols-4 gap-4">
                                <div v-for="papel in props.papeis" :key="papel.id" class="flex items-center gap-2">
                                    <input 
                                        type="checkbox"
                                        class="rounded"
                                        :value="papel.name"
                                    />
                                    <label>{{ papel.name }}</label>
                                </div>
                            </div>

                            <br>

                            <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Salvar
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
