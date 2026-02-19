<script setup lang="ts">
import type { ToggleGroupRootEmits, ToggleGroupRootProps } from "reka-ui"
import type { HTMLAttributes } from "vue"
import { ref, watch, onMounted, nextTick, onBeforeUnmount } from "vue"
import { ToggleGroupRoot, useForwardPropsEmits } from "reka-ui"
import { cn } from "@/lib/utils"

const props = withDefaults(defineProps<ToggleGroupRootProps & { class?: HTMLAttributes["class"] }>(), {
  type: "single"
})

const emits = defineEmits<ToggleGroupRootEmits>()

const forwarded = useForwardPropsEmits(props, emits)
const wrapperRef = ref<HTMLElement>()
const sliderRef = ref<HTMLElement>()
let observer: MutationObserver | null = null

// Ensure a value is always selected
watch(() => props.modelValue, (newValue) => {
  if (props.type === 'single' && (newValue === undefined || newValue === null)) {
    // If no value is selected, select the first option or default value
    const defaultValue = props.defaultValue
    if (defaultValue !== undefined) {
      emits('update:modelValue', defaultValue)
    }
  }
}, { immediate: true })

const updateSliderPosition = () => {
  nextTick(() => {
    if (!wrapperRef.value || !sliderRef.value) return

    const container = wrapperRef.value.querySelector('[data-slot="toggle-group"]') as HTMLElement
    if (!container) return

    const selectedItem = container.querySelector('[data-state="on"]') as HTMLElement
    if (!selectedItem) return

    const containerRect = container.getBoundingClientRect()
    const itemRect = selectedItem.getBoundingClientRect()

    const left = itemRect.left - containerRect.left
    const width = itemRect.width

    sliderRef.value.style.transform = `translateX(${left}px)`
    sliderRef.value.style.width = `${width}px`
  })
}

onMounted(() => {
  nextTick(() => {
    updateSliderPosition()

    // Watch for changes in modelValue
    watch(() => props.modelValue, () => {
      setTimeout(updateSliderPosition, 10)
    })

    // Use MutationObserver to watch for data-state changes
    if (wrapperRef.value) {
      const container = wrapperRef.value.querySelector('[data-slot="toggle-group"]')
      if (container && container instanceof Node) {
        observer = new MutationObserver(() => {
          updateSliderPosition()
        })
        observer.observe(container, {
          attributes: true,
          attributeFilter: ['data-state'],
          subtree: true
        })
      }
    }
  })
})

onBeforeUnmount(() => {
  if (observer) {
    observer.disconnect()
  }
})
</script>

<template>
  <div ref="wrapperRef" class="relative inline-flex">
    <ToggleGroupRoot
      data-slot="toggle-group"
      v-bind="forwarded"
      :class="cn('relative inline-flex items-center rounded-3xl bg-terciary p-0.5', props.class)"
    >
      <div
        ref="sliderRef"
        class="absolute top-0.5 bottom-0.5 rounded-3xl bg-primary transition-all duration-200 ease-out pointer-events-none z-0"
        style="left: 0; width: 0;"
      />
      <slot />
    </ToggleGroupRoot>
  </div>
</template>
