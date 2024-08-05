<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'

// Obtener los datos del cliente desde las props
const { props } = usePage()
const cliente = props.cliente || {} // Manejo defensivo si `cliente` no está definido

// Definir el objeto del formulario, prellenado con los datos existentes
const form = reactive({
  name: cliente.name || '',
  email: cliente.email || '',
  phone: cliente.phone || '',
  address: cliente.address || '',
})

// Función para enviar el formulario
function submit() {
  router.put(`/clientes/${cliente.id}`, form)
}
</script>

<template>
  <AppLayout title="Editar Cliente">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Editar Cliente
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
          <form @submit.prevent="submit" class="space-y-6">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nombre:</label>
              <input id="name" v-model="form.name" type="text" class="input" placeholder="Introduce el nombre" />
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Correo Electrónico:</label>
              <input id="email" v-model="form.email" type="email" class="input" placeholder="Introduce el correo electrónico" />
            </div>

            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Teléfono:</label>
              <input id="phone" v-model="form.phone" type="tel" class="input" placeholder="Introduce el teléfono" />
            </div>

            <div>
              <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Dirección:</label>
              <input id="address" v-model="form.address" type="text" class="input" placeholder="Introduce la dirección" />
            </div>

            <button type="submit" class="btn btn-primary">
              Actualizar
            </button>
          </form>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<style scoped>
.input {
  border: 1px solid #e2e8f0;
  border-radius: 0.375rem;
  padding: 0.75rem;
  width: 100%;
  background-color: #f9fafb;
  color: #1f2937;
  font-size: 0.875rem;
}

.input:focus {
  border-color: #1d4ed8;
  outline: none;
  box-shadow: 0 0 0 1px rgba(29, 78, 216, 0.5);
}

.btn {
  background-color: #4caf50;
  color: white;
  padding: 0.75rem 1.5rem;
  border: none;
  border-radius: 0.375rem;
  cursor: pointer;
  font-size: 0.875rem;
}

.btn-primary {
  background-color: #1d4ed8;
}

.btn:hover {
  opacity: 0.9;
}

.btn:focus {
  outline: none;
  box-shadow: 0 0 0 1px rgba(29, 78, 216, 0.5);
}
</style>
