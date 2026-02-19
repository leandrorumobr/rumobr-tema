<script setup lang="ts">
import { computed, h } from 'vue';
import { Info,  CircleAlert, CircleCheck, CircleX } from 'lucide-vue-next';
import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert';

type Props = {
    variant: 'info' | 'warning' | 'success' | 'destructive';
    title: string;
    description?: string;
};

const props = defineProps<Props>();

const iconConfig = computed(() => {
    const configs = {
        info: {
            icon: Info,
            borderColor: 'border-blue-600',
            bgColor: 'bg-blue-100',
            iconColor: 'text-blue-600',
        },
        warning: {
            icon: CircleAlert,
            borderColor: 'border-orange-600',
            bgColor: 'bg-orange-100',
            iconColor: 'text-orange-600',
        },
        success: {
            icon:
            CircleCheck,
            borderColor: 'border-green-600',
            bgColor: 'bg-green-100',
            iconColor: 'text-green-600',
        },
        destructive: {
            icon: CircleX,
            borderColor: 'border-red-600',
            bgColor: 'bg-red-100',
            iconColor: 'text-red-600',
        },
    };
    return configs[props.variant];
});

const IconComponent = computed(() => iconConfig.value.icon);
</script>

<template>
    <Alert :variant="variant">
        <component :is="IconComponent" :class="['w-6 h-6', iconConfig.iconColor]" />
        <div class="flex-1 flex flex-col gap-1">
            <AlertTitle>{{ title }}</AlertTitle>
            <AlertDescription v-if="description">
                {{ description }}
            </AlertDescription>
            <AlertDescription v-else-if="$slots.description">
                <slot name="description" />
            </AlertDescription>
            <AlertDescription v-else-if="$slots.default">
                <slot />
            </AlertDescription>
        </div>
    </Alert>
</template>
