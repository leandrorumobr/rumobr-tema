<script setup lang="ts">
import { computed } from 'vue';
import AlertGeral from '@/components/AlertGeral.vue';

type Props = {
    errors: string[];
    title?: string;
};

const props = withDefaults(defineProps<Props>(), {
    title: 'Something went wrong.',
});

const uniqueErrors = computed(() => Array.from(new Set(props.errors)));
</script>

<template>
    <AlertGeral variant="destructive" :title="title">
        <ul class="list-inside list-disc text-sm">
            <li v-for="(error, index) in uniqueErrors" :key="index">
                {{ error }}
            </li>
        </ul>
    </AlertGeral>
</template>
