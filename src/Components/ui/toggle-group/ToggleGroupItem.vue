<script setup lang="ts">
import type { ToggleGroupItemProps } from "reka-ui"
import type { HTMLAttributes } from "vue"
import { ToggleGroupItem, useForwardProps } from "reka-ui"
import { cn } from "@/lib/utils"

const props = defineProps<ToggleGroupItemProps & { class?: HTMLAttributes["class"] }>()

const forwarded = useForwardProps(props)
</script>

<template>
  <ToggleGroupItem
    data-slot="toggle-group-item"
    v-bind="forwarded"
    v-slot="slotProps"
    :class="cn(
      'relative z-10 inline-flex items-center justify-center rounded-3xl px-4 py-2.5 text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50',
      'data-[state=on]:text-primary-foreground',
      'data-[state=off]:text-secondary',
      props.class
    )"
  >
    <slot v-bind="slotProps" />
  </ToggleGroupItem>
</template>
