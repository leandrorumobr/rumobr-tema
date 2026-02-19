<script setup lang="ts">
import type { HTMLAttributes, InputHTMLAttributes } from "vue"
import { useVModel } from "@vueuse/core"
import { ref, computed, useAttrs } from "vue"
import { Eye, EyeOff } from "lucide-vue-next"
import { cn } from "@/lib/utils"

const props = withDefaults(defineProps<{
  defaultValue?: string | number
  modelValue?: string | number
  class?: HTMLAttributes["class"]
  type?: InputHTMLAttributes["type"]
}>(), {
  type: "text"
})

const emits = defineEmits<{
  (e: "update:modelValue", payload: string | number): void
}>()

const attrs = useAttrs()
const inputAttrs = computed(() => {
  const result: Record<string, any> = {}
  for (const key in attrs) {
    if (key !== 'class' && key !== 'type') {
      result[key] = attrs[key]
    }
  }
  return result
})

const modelValue = useVModel(props, "modelValue", emits, {
  passive: true,
  defaultValue: props.defaultValue,
})

const showPassword = ref(false)
const isPasswordType = computed(() => props.type === "password")
const inputType = computed(() => {
  if (isPasswordType.value) {
    return showPassword.value ? "text" : "password"
  }
  return props.type
})

const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value
}
</script>

<template>
  <div v-if="isPasswordType" class="relative">
    <input
      v-bind="inputAttrs"
      v-model="modelValue"
      data-slot="input"
      :type="inputType"
      :class="cn(
        'file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 pr-10 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:bg-terciary md:text-sm',
        'focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]',
        'aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive',
        props.class,
      )"
    >
    <button
      type="button"
      @click="togglePasswordVisibility"
      class="absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 rounded-sm"
      :aria-label="showPassword ? 'Ocultar senha' : 'Mostrar senha'"
    >
      <Eye v-if="showPassword" class="h-4 w-4" />
      <EyeOff v-else class="h-4 w-4" />
    </button>
  </div>
  <input
    v-else
    v-bind="inputAttrs"
    v-model="modelValue"
    data-slot="input"
    :type="type"
    :class="cn(
      'file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:bg-terciary md:text-sm',
      'focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]',
      'aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive',
      props.class,
    )"
  >
</template>
