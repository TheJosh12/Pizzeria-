<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

// Define the props for receiving the orders array
const props = defineProps({
  ordens: Array
});

// Function to format date (optional)
const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'short', day: 'numeric' };
  return new Date(dateString).toLocaleDateString(undefined, options);
};
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Lista de Ordenes
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
          <div class="overflow-x-auto">
            <table class="table-auto w-full text-left">
              <!-- Table Header -->
              <thead>
                <tr>
                  <th class="px-4 py-2">ID</th>
                  <th class="px-4 py-2">Cliente</th>
                  <th class="px-4 py-2">Pizza</th>
                  <th class="px-4 py-2">Cantidad</th>
                  <th class="px-4 py-2">Total</th>
                  <th class="px-4 py-2">Estado</th>
                  <th class="px-4 py-2">Fecha</th>
                  <th class="px-4 py-2">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <!-- Loop through orders -->
                <tr v-for="item in ordens" :key="item.id" class="bg-base-200">
                  <td class="px-4 py-2">{{ item.id }}</td>
                  <td class="px-4 py-2">{{ item.cliente_name }}</td>
                  <td class="px-4 py-2">{{ item.pizza_name }}</td>
                  <td class="px-4 py-2">{{ item.cantidad }}</td>
                  <td class="px-4 py-2">{{ item.total }}</td>
                  <td class="px-4 py-2">{{ item.estado }}</td>
                  <td class="px-4 py-2">{{ formatDate(item.fecha) }}</td>
                  <td class="px-4 py-2">
                    <!-- Dynamic links for Edit and Delete -->
                    <a :href="`/ordenes/${item.id}/edit`" class="btn btn-warning">Editar</a>
                    <button class="btn btn-error" @click="deleteOrder(item.id)">Eliminar</button>
                    <button class="btn btn-active" @click="deleteOrder(item.id)">Tiket</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <center>
              <a href="/ordenes/create" class="btn btn-active btn-accent">Agregar nuevo Pedido</a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

