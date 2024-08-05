<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
  clients: Array,
});

// Configura useForm con el método `delete`
const form = useForm();

function confirmDelete(clientId) {
  if (confirm('¿Estás seguro de que quieres eliminar este cliente?')) {
    form.delete(`/clientes/${clientId}`, {
      onSuccess: () => window.location.reload(), // Recargar la página para actualizar la lista
      onError: (errors) => console.error('Error al eliminar el cliente:', errors),
    });
  }
}
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Lista de clientes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="overflow-x-auto p-6">
                        <!-- Estilizando la tabla -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Teléfono
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Dirección
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <!-- Filas de la tabla -->
                                <tr v-for="(item, index) in clients" :key="index" class="hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ index + 1  }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ item.name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ item.email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ item.phone }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ item.address }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex space-x-2">
                                        <a :href="`/clientes/${item.id}/edit`" class="btn btn-warning">Editar</a>
                                        <button @click="confirmDelete(item.id)" class="btn btn-error">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Botón para agregar nuevo cliente -->
                        <div class="mt-6 text-center">
                            <a href="/clientes/create" class="btn btn-active btn-accent">Agregar nuevo Cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
/* Aquí puedes añadir estilos adicionales si es necesario */
.btn {
  display: inline-block;
  padding: 0.5rem 1rem;
  border-radius: 0.375rem;
  font-size: 0.875rem;
  font-weight: 600;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
}
.btn-warning {
  background-color: #f59e0b; /* Amarillo de Tailwind CSS */
  color: white;
}
.btn-error {
  background-color: #ef4444; /* Rojo de Tailwind CSS */
  color: white;
}
.btn-active {
  background-color: #3b82f6; /* Azul de Tailwind CSS */
  color: white;
}
.btn-accent {
  background-color: #10b981; /* Verde de Tailwind CSS */
  color: white;
}
</style>
