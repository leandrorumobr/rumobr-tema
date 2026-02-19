<script setup lang="ts">
import { ref } from 'vue';
import { Printer } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import { ToggleGroupRoot, ToggleGroupItem } from '@/components/ui/toggle-group';

const viewMode1 = ref('grafico');
const viewMode2 = ref('card');
</script>

<template>
    <div class="flex flex-col gap-4 bg-white rounded-lg p-6 min-w-60 border-gray-100 border shadow-xl">
        <h1 class="text-3xl font-bold">Botões</h1>
        <div class="border-2 border-dashed border-blue-400 p-2 rounded-lg flex flex-col gap-3">
            <Button>
                Buscar
            </Button>
            <Button variant="outline">
                <Printer class="size-4" />
                Exportar
            </Button>
        </div>

        <div class="border-2 border-dashed border-blue-400 p-2 rounded-lg flex flex-col gap-3">
            <ToggleGroupRoot v-model="viewMode1" type="single" :default-value="'grafico'">
                <ToggleGroupItem value="grafico">
                    Gráfico
                </ToggleGroupItem>
                <ToggleGroupItem value="card">
                    Card
                </ToggleGroupItem>
            </ToggleGroupRoot>

            <ToggleGroupRoot v-model="viewMode2" type="single" :default-value="'card'">
                <ToggleGroupItem value="grafico">
                    Gráfico
                </ToggleGroupItem>
                <ToggleGroupItem value="card">
                    Card
                </ToggleGroupItem>
            </ToggleGroupRoot>
        </div>
    </div>
</template>
