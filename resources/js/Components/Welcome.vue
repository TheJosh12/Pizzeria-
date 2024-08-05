<script setup>
import { ref } from 'vue';
import { Chart as ChartJS, CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend } from 'chart.js';

ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend);

const clientData = ref([
    { name: 'Cliente A', purchases: 12 },
    { name: 'Cliente B', purchases: 30 },
    { name: 'Cliente C', purchases: 25 }
]);

const pizzaData = ref([
    { name: 'Pepperoni', sales: 50 },
    { name: 'Margarita', sales: 30 },
    { name: 'Hawaiana', sales: 20 }
]);

const getClientChartData = () => ({
    labels: clientData.value.map(c => c.name),
    datasets: [{
        label: 'Compras por Cliente',
        data: clientData.value.map(c => c.purchases),
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
});

const getPizzaChartData = () => ({
    labels: pizzaData.value.map(p => p.name),
    datasets: [{
        label: 'Ventas por Pizza',
        data: pizzaData.value.map(p => p.sales),
        backgroundColor: 'rgba(255, 159, 64, 0.2)',
        borderColor: 'rgba(255, 159, 64, 1)',
        borderWidth: 1
    }]
});
</script>

<template>
    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
            Informe de Ventas
        </h1>

        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Gráfico de Clientes -->
            <div>
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cliente que más ha Comprado
                </h2>
                <canvas id="clientChart"></canvas>
            </div>

            <!-- Gráfico de Pizzas -->
            <div>
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Pizza que Más se Vende
                </h2>
                <canvas id="pizzaChart"></canvas>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted } from 'vue';
import { Chart } from 'chart.js';

export default {
    setup() {
        onMounted(() => {
            new Chart(document.getElementById('clientChart'), {
                type: 'bar',
                data: getClientChartData(),
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${tooltipItem.label}: ${tooltipItem.raw} compras`;
                                }
                            }
                        }
                    }
                }
            });

            new Chart(document.getElementById('pizzaChart'), {
                type: 'bar',
                data: getPizzaChartData(),
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${tooltipItem.label}: ${tooltipItem.raw} ventas`;
                                }
                            }
                        }
                    }
                }
            });
        });
    }
}
</script>
