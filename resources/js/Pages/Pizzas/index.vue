<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps(
  {
    pizzas: Array,
  }
);
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Lista de Pizzas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="container mx-auto px-4 py-6">
  <!-- Contenedor principal para las tarjetas -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Tarjeta de Pizza -->
    <div class="card bg-base-200 shadow-lg rounded-lg overflow-hidden" v-for="(item, index) in pizzas" :key="index">
      <img :src="item.image" alt="Pizza Image" class="w-full h-48 object-cover">
      <div class="p-4">
        <h2 class="text-xl font-bold mb-2">{{ item.name }}</h2>
        <p class="text-lg text-gray-700 mb-2">Precio: ${{ item.price }}</p>
        <p class="text-sm text-gray-600 mb-4">{{ item.description }}</p>
        <div class="flex justify-between">
          <a :href="`/pizzas/${item.id}/edit`" class="btn btn-warning">Editar</a>
          <button class="btn btn-error">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-6 text-center">
    <a href="/pizzas/create" class="btn btn-active btn-accent">Agregar nueva Pizza</a>
  </div>
</div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
