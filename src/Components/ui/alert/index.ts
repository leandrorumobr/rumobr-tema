import type { VariantProps } from "class-variance-authority"
import { cva } from "class-variance-authority"

export { default as Alert } from "./Alert.vue"
export { default as AlertDescription } from "./AlertDescription.vue"
export { default as AlertTitle } from "./AlertTitle.vue"

export const alertVariants = cva(
  "relative w-full rounded-lg shadow-sm px-4 py-3 text-sm flex items-start gap-3",
  {
    variants: {
      variant: {
        default: "bg-card text-card-foreground border-l-4 border-l-gray-400",
        info: "bg-[#CCE8F4] text-gray-900 border-l-4 border-l-[#1F6AA3]",
        warning: "bg-[#FFECD8] text-gray-900 border-l-4 border-l-[#FF8200]",
        success: "bg-[#E7F4E7] text-gray-900 border-l-4 border-l-[#0C7D07]",
        destructive: "bg-[#FBE8E9] text-gray-900 border-l-4 border-l-[#DA1415]",
      },
    },
    defaultVariants: {
      variant: "default",
    },
  },
)

export type AlertVariants = VariantProps<typeof alertVariants>
