<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Link } from '@inertiajs/vue3';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="relative min-h-svh flex flex-col items-center justify-center p-6 md:p-10 bg-coca-dark overflow-hidden selection:bg-coca-primary selection:text-coca-dark">
        <!-- Background decorative image -->
        <div class="absolute inset-0 z-0 opacity-10 scale-110 pointer-events-none">
            <img 
                src="/cocatop_welcome_bg_1776975952559.png" 
                class="w-full h-full object-cover filter blur-[3px]" 
                alt="Background"
            />
            <div class="absolute inset-0 bg-gradient-to-br from-coca-dark via-coca-deep/90 to-coca-dark"></div>
        </div>

        <div class="relative z-10 w-full max-w-md">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col items-center gap-6">
                    <Link :href="route('home')" class="group flex flex-col items-center gap-2">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <AppLogoIcon class="size-10 text-coca-primary" />
                        </div>
                    </Link>
                    <div class="space-y-2 text-center">
                        <h1 class="text-3xl font-black text-white tracking-tight uppercase">COCA<span class="text-coca-primary">TOP</span></h1>
                        <p class="text-center text-sm text-coca-muted font-medium px-4">{{ description }}</p>
                    </div>
                </div>
                
                <div class="card p-8 bg-white/[0.02] border border-white/5 backdrop-blur-2xl rounded-[32px] shadow-2xl">
                    <slot />
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="absolute bottom-8 z-10 text-white/20 text-[10px] font-black uppercase tracking-[0.3em]">
            &copy; 2024 Cocatop System &bull; Premium Auth
        </footer>

        <!-- Decorative particles -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-coca-primary/10 blur-[120px] rounded-full mix-blend-screen pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-coca-light/5 blur-[150px] rounded-full mix-blend-screen pointer-events-none"></div>
    </div>
</template>

<style scoped>
.card {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
}
</style>
