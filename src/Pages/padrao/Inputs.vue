<script setup lang="ts">
import { ref } from 'vue';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Checkbox } from '@/components/ui/checkbox';

const handleSubmit = (e: Event) => {
    e.preventDefault();
};

const cities = [
    {
      "id": 1,
      "label": "São Paulo",
    },
    {
      "id": 2,
      "label": "Rio de Janeiro",
    },
    {
      "id": 3,
      "label": "Brasília",
    },
    {
      "id": 4,
      "label": "Salvador",
    },
    {
      "id": 5,
      "label": "Fortaleza",
    },
    {
      "code": 6,
      "label": "Belo Horizonte",
    },
    {
      "code": 7,
      "label": "Manaus",
    },
    {
      "code": 8,
      "label": "Curitiba",
    },
    {
      "code": 9,
      "label": "Recife",
    },
    {
      "code": 10,
      "label": "Porto Alegre",
    }
  ]

  const selectedCities = ref<{ id: number; label: string }[]>([
    { id: 2, label: "Rio de Janeiro" },
    { id: 8, label: "Curitiba" },
    { id: 10, label: "Porto Alegre" }
  ]);

  const citiesDisabled = [
    {
      "id": 1,
      "label": "São Paulo",
    },
  ]
</script>

<template>
    <div class="flex flex-col gap-4 bg-white rounded-lg p-6 min-w-60 border-gray-100 border shadow-xl">
        <h1 class="text-3xl font-bold">Campos</h1>

        <form @submit.prevent="handleSubmit" class="border-2 border-dashed border-blue-400 p-2 rounded-lg">
            <div class="grid gap-2 mb-5">
                <Label for="city">Cidades</Label>
                <v-select name="city" id="city" :options="cities" placeholder="Selecione a cidade"></v-select>
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="city-multiple">Cidades (Múltiplo)</Label>
                <v-select name="city-multiple" id="city-multiple" v-model="selectedCities" :options="cities" multiple placeholder="Selecione a cidade"></v-select>
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="city-disabled">Cidades (Desabilitado)</Label>
                <v-select name="city-disabled" id="city-disabled" :options="citiesDisabled" disabled placeholder="Selecione a cidade"></v-select>
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="password">Senha</Label>
                <Input id="password" type="password" name="password" autocomplete="password" placeholder="Password" />
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="data">Data</Label>
                <Input id="data" type="date" name="data" placeholder="02/06/2026" />
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="money">Dinheiro</Label>
                <Input id="money" type="text" name="money" placeholder="Insira o valor" />
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="observacao">Observação</Label>
                <Input id="observacao" type="text" name="observacao" placeholder="Insira a observação" />
            </div>
            <div class="grid gap-2 mb-5">
                <Label for="observacao-disabled">Observação (Desabilitado)</Label>
                <Input id="observacao-disabled" type="text" name="observacao-disabled" required disabled
                    placeholder="Insira a observação" />
            </div>
            <div class="grid gap-2">
                <Label for="checkbox">Tipo de faturamento</Label>
                <Label for="faturamento-pontual" class="flex items-center space-x-1">
                    <Checkbox id="faturamento-pontual" name="faturamento-pontual"  />
                    <span>Faturamento pontual</span>
                </Label>
                <Label for="faturamento-recorrente" class="flex items-center space-x-1">
                    <Checkbox id="faturamento-recorrente" name="faturamento-recorrente" />
                    <span>Faturamento recorrente</span>
                </Label>
                <Label for="faturamento-exito" class="flex items-center space-x-1s">
                    <Checkbox id="faturamento-exito" name="faturamento-exito" />
                    <span>Faturamento com êxito</span>
                </Label>
            </div>
        </form>
    </div>
</template>
<style scoped>
:deep(.vs__dropdown-menu) {
  --vs-selected-bg: var(--primary);
  --vs-selected-color: var(--primary-foreground);

  --vs-search-input-color: var(--primary-foreground);

  --vs-dropdown-option--active-bg: var(--primary);
  --vs-dropdown-option--active-color: var(--primary-foreground);
}
</style>
