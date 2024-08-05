<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

const form = reactive({
  name: '',
  email: '',
  phone: '',
  address: '',
});

function submit() {
  router.post('/clientes', form);
}
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Crear Clientes
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
          <form @submit.prevent="submit" class="space-y-4">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre:</label>
              <input
                id="name"
                v-model="form.name"
                type="text"
                placeholder="Ingrese su nombre"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              />
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Correo:</label>
              <input
                id="email"
                v-model="form.email"
                type="email"
                placeholder="Ingrese su correo electrónico"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              />
            </div>

            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teléfono:</label>
              <input
                id="phone"
                v-model="form.phone"
                type="tel"
                placeholder="Ingrese su número de teléfono"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              />
            </div>

            <div>
              <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dirección:</label>
              <input
                id="address"
                v-model="form.address"
                type="text"
                placeholder="Ingrese su dirección"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              />
            </div>

            <button
              type="submit"
              class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Enviar
            </button>
          </form>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
