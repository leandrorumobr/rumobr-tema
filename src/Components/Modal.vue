<script setup lang="ts">
import { computed } from 'vue';
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
} from '@/components/ui/dialog';

type Props = {
    open?: boolean;
    title?: string;
    description?: string;
    showCloseButton?: boolean;
};

const props = withDefaults(defineProps<Props>(), {
    open: false,
    showCloseButton: true,
});

const emits = defineEmits<{
    'update:open': [value: boolean];
}>();

const isOpen = computed({
    get: () => props.open,
    set: (value: boolean) => emits('update:open', value),
});
</script>

<template>
    <Dialog v-model:open="isOpen">
        <DialogContent :show-close-button="showCloseButton" class="text-center">
            <DialogHeader v-if="title || $slots.title" class="text-left">
                <DialogTitle v-if="title || $slots.title">
                    <slot name="title">{{ title }}</slot>
                </DialogTitle>
            </DialogHeader>
            <div v-if="$slots.icon" class="flex justify-center py-2">
                <slot name="icon" />
            </div>
            <div v-if="description || $slots.description || $slots.default" class="py-2">
                <DialogDescription v-if="description || $slots.description" class="text-center">
                    <slot name="description">{{ description }}</slot>
                </DialogDescription>
                <div v-if="$slots.default" class="text-center">
                    <slot />
                </div>
            </div>
            <DialogFooter v-if="$slots.footer" class="sm:justify-center">
                <slot name="footer" />
            </DialogFooter>
        </DialogContent>
    </Dialog>
</template>
