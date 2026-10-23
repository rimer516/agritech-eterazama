<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { Users, MapPin, CircleUser, Sprout, Wallet, Clock, Calendar, ChevronRight } from 'lucide-vue-next';
import { ref, onMounted, onUnmounted } from 'vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

defineProps<{
    stats: {
        sindicatos: number;
        catos: number;
        cosechadores: number;
        total_libras: number;
        total_pagos: number;
    }
}>();

const currentTime = ref('');
const currentDate = ref('');

const updateTime = () => {
    const now = new Date();
    const timeStr = now.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' });
    currentTime.value = timeStr.replace(':', ' : ');
    currentDate.value = now.toLocaleDateString('es-ES', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
};

let timer: any;
onMounted(() => {
    updateTime();
    timer = setInterval(updateTime, 60000);
});
onUnmounted(() => clearInterval(timer));
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 p-4 md:gap-8 md:p-8">
            
            <!-- ── Header Dashboard ── -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl md:text-4xl font-black text-white tracking-tight">Panel Principal</h1>
                    <p class="text-coca-muted text-sm mt-1">Resumen general del sistema Cocatop</p>
                </div>
                <div class="flex items-center gap-6 text-right">
                    <div class="hidden lg:block">
                        <div class="flex items-center gap-3 text-coca-primary font-black text-5xl tracking-tighter">
                            <Clock class="size-8" />
                            <span>{{ currentTime }}</span>
                        </div>
                        <p class="text-[10px] text-coca-muted uppercase font-bold tracking-[0.3em] mt-2">{{ currentDate }}</p>
                    </div>
                </div>
            </div>

            <!-- ── Grid de Estadísticas Principales ── -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                
                <!-- Sindicatos - Blue -->
                <div class="dashboard-card group bg-blue-500/5 border-blue-500/20 hover:border-blue-500/40">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-[10px] font-black text-blue-400 uppercase tracking-widest">Sindicatos</span>
                            <h2 class="text-4xl font-black text-white mt-1">{{ stats.sindicatos }}</h2>
                        </div>
                        <div class="p-3 rounded-xl bg-blue-500/10 text-blue-400 border border-blue-500/20 group-hover:scale-110 transition-transform">
                            <Users class="size-6" />
                        </div>
                    </div>
                </div>

                <!-- Catos - Green -->
                <div class="dashboard-card group bg-emerald-500/5 border-emerald-500/20 hover:border-emerald-500/40">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-[10px] font-black text-emerald-400 uppercase tracking-widest">Catos</span>
                            <h2 class="text-4xl font-black text-white mt-1">{{ stats.catos }}</h2>
                        </div>
                        <div class="p-3 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 group-hover:scale-110 transition-transform">
                            <MapPin class="size-6" />
                        </div>
                    </div>
                </div>

                <!-- Cosechadores - Purple -->
                <div class="dashboard-card group bg-violet-500/5 border-violet-500/20 hover:border-violet-500/40">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-[10px] font-black text-violet-400 uppercase tracking-widest">Cosechadores</span>
                            <h2 class="text-4xl font-black text-white mt-1">{{ stats.cosechadores }}</h2>
                        </div>
                        <div class="p-3 rounded-xl bg-violet-500/10 text-violet-400 border border-violet-500/20 group-hover:scale-110 transition-transform">
                            <CircleUser class="size-6" />
                        </div>
                    </div>
                </div>

                <!-- Total Libras - Amber -->
                <div class="dashboard-card group bg-amber-500/5 border-amber-500/20 hover:border-amber-500/40">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-[10px] font-black text-amber-400 uppercase tracking-widest">Total Libras</span>
                            <h2 class="text-4xl font-black text-white mt-1">{{ stats.total_libras }}</h2>
                        </div>
                        <div class="p-3 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20 group-hover:scale-110 transition-transform">
                            <Sprout class="size-6" />
                        </div>
                    </div>
                </div>

                <!-- Total Pagos - Rose -->
                <div class="dashboard-card group bg-rose-500/5 border-rose-500/20 hover:border-rose-500/40">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-[10px] font-black text-rose-400 uppercase tracking-widest">Total Pagos</span>
                            <h2 class="text-3xl font-black text-white mt-1">Bs {{ stats.total_pagos }}</h2>
                        </div>
                        <div class="p-3 rounded-xl bg-rose-500/10 text-rose-400 border border-rose-500/20 group-hover:scale-110 transition-transform">
                            <Wallet class="size-6" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- ── Sección Media: Gráficos Mock up ── -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                <div class="card p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-lg font-black text-white flex items-center gap-3">
                            <Sprout class="size-6 text-coca-primary" />
                            Producción Mensual
                        </h3>
                    </div>
                    <div class="h-64 flex items-end justify-between gap-2 px-4 pb-4 border-b border-white/5">
                        <div class="w-full bg-coca-primary/20 rounded-t-lg h-2/3 relative group">
                            <div class="absolute inset-0 bg-coca-primary opacity-0 group-hover:opacity-100 transition-opacity rounded-t-lg shadow-[0_0_20px_rgba(162,255,117,0.4)]"></div>
                        </div>
                        <div class="w-full bg-white/5 rounded-t-lg h-1/2"></div>
                        <div class="w-full bg-white/5 rounded-t-lg h-1/3"></div>
                        <div class="w-full bg-white/5 rounded-t-lg h-3/4"></div>
                        <div class="w-full bg-white/5 rounded-t-lg h-2/3"></div>
                        <div class="w-full bg-white/5 rounded-t-lg h-5/6"></div>
                        <div class="w-full bg-white/5 rounded-t-lg h-1/2"></div>
                    </div>
                    <div class="flex justify-between text-[9px] font-bold text-coca-muted uppercase tracking-widest mt-4">
                        <span>Ene</span><span>Feb</span><span>Mar</span><span>Abr</span><span>May</span><span>Jun</span><span>Jul</span>
                    </div>
                </div>

                <div class="card p-8 bg-gradient-to-br from-coca-deep to-coca-dark">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-lg font-black text-white">Estado del Servidor</h3>
                        <span class="px-3 py-1 rounded-full bg-coca-primary/10 text-coca-primary text-[10px] font-black uppercase tracking-widest border border-coca-primary/20">v3.0.0-PRO</span>
                    </div>
                    <div class="space-y-8">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white/5 border border-white/10">
                            <div class="flex items-center gap-4">
                                <div class="size-3 rounded-full bg-coca-primary shadow-[0_0_10px_#a2ff75] animate-pulse"></div>
                                <span class="font-black text-white tracking-widest uppercase">Sistema Operativo</span>
                            </div>
                            <span class="text-coca-primary font-black">99.9% UP</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center">
                                <span class="block text-[10px] font-bold text-coca-muted uppercase mb-1">Base de Datos</span>
                                <span class="text-white font-black">ACTIVA</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center">
                                <span class="block text-[10px] font-bold text-coca-muted uppercase mb-1">Última Copia</span>
                                <span class="text-white font-black">HOY 04:00</span>
                            </div>
                        </div>
                        <button class="w-full py-4 rounded-2xl bg-coca-primary text-coca-deep font-black uppercase tracking-widest hover:scale-[1.02] active:scale-95 transition-all shadow-[0_10px_30px_rgba(162,255,117,0.2)]">
                            Optimizar Recursos
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </AppLayout>
</template>

<style scoped>
.dashboard-card {
    @apply p-6 rounded-[24px] border transition-all duration-300;
}
.card {
    @apply bg-coca-card border border-coca-border rounded-[24px];
}
</style>
