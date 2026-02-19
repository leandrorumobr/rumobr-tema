<script setup lang="ts">
import AlertGeral from '@/components/AlertGeral.vue';
</script>

<template>
    <div class="flex flex-col gap-4 bg-white rounded-lg p-6 min-w-60 border-gray-100 border shadow-xl">
        <h1 class="text-3xl font-bold">Alertas</h1>
        <div class="border-2 border-dashed border-blue-400 p-2 rounded-lg flex flex-col gap-3">
            <AlertGeral
                variant="info"
                title="Informação"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            />

            <AlertGeral
                variant="warning"
                title="Alerta"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            />

            <AlertGeral
                variant="success"
                title="Sucesso"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            />

            <AlertGeral
                variant="destructive"
                title="Erro"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            />
        </div>
    </div>
</template>
