<script setup lang="ts">
import { ref } from 'vue';
import { AlertTriangle } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import Modal from '@/components/Modal.vue';

const modalOpen = ref(false);
</script>

<template>
    <div class="flex flex-col gap-4 bg-white rounded-lg p-6 min-w-60 border-gray-100 border shadow-xl">
        <h1 class="text-3xl font-bold">Modal</h1>
        <div class="border-2 border-dashed border-blue-400 p-2 rounded-lg flex flex-col gap-3">
            <Button @click="modalOpen = true">
                Abrir Modal
            </Button>
        </div>

        <!-- Modal no padrão da imagem -->
        <Modal
            v-model:open="modalOpen"
            title="Atenção!"
        >
            <template #icon>
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-primary">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 20H22L12 2Z" stroke="white" stroke-width="2" fill="none"/>
                        <path d="M12 8V12M12 16H12.01" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </div>
            </template>
            <div class="flex flex-col gap-2 text-center py-2">
                <p class="text-gray-700">
                    Ao excluir este registro, a ação será permanente.
                </p>
                <p class="text-gray-700">
                    Deseja continuar?
                </p>
            </div>
            <template #footer>
                <Button variant="outline" @click="modalOpen = false">
                    Cancelar
                </Button>
                <Button @click="modalOpen = false">
                    Confirmar
                </Button>
            </template>
        </Modal>
    </div>
</template>
