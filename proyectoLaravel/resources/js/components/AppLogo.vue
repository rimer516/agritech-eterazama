<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';

interface Props {
    class?: string;
}

defineProps<Props>();
</script>

<template>
    <div class="flex aspect-square size-8 items-center justify-center rounded-lg bg-coca-primary text-coca-dark shadow-[0_0_15px_rgba(162,255,117,0.5)]">
        <AppLogoIcon class="size-5 fill-current" />
    </div>
    <div class="ml-2 grid flex-1 text-left text-sm leading-tight">
        <span class="truncate font-black text-white tracking-wider uppercase">COCA<span class="text-coca-primary">TOP</span></span>
        <span class="truncate text-[10px] font-bold text-coca-muted uppercase tracking-[0.2em]">Management</span>
    </div>
</template>
