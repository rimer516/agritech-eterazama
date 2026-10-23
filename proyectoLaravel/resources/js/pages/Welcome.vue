<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Cocatop - Gestión Agrícola" />
    
    <div class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden bg-coca-dark selection:bg-coca-primary selection:text-white">
        <!-- Background decorative image -->
        <div class="absolute inset-0 z-0 opacity-20 scale-110 pointer-events-none">
            <img 
                src="/cocatop_welcome_bg_1776975952559.png" 
                class="w-full h-full object-cover filter blur-[2px] contrast-125" 
                alt="Coca Leaves Background"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-coca-dark via-transparent to-coca-dark/80"></div>
        </div>

        <!-- Main Content -->
        <main class="relative z-10 w-full max-w-4xl px-6 text-center animate-in fade-in zoom-in duration-1000">
            <!-- Logo / Icon -->
            <div class="mb-8 flex justify-center">
                <div class="w-24 h-24 bg-white/10 backdrop-blur-xl rounded-3xl p-5 border border-white/20 shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-500">
                    <svg viewBox="0 0 24 24" fill="none" class="w-full h-full text-coca-light drop-shadow-glow">
                        <path d="M12 2L4.5 9.5C3.5 10.5 3 11.5 3 13C3 16 5.5 18.5 8.5 18.5C10 18.5 11 18 12 17C13 18 14 18.5 15.5 18.5C18.5 18.5 21 16 21 13C21 11.5 20.5 10.5 19.5 9.5L12 2Z" fill="currentColor" fill-opacity="0.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17V22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>

            <!-- Title & Slogan -->
            <h1 class="text-6xl md:text-8xl font-black text-white tracking-tighter mb-4 drop-shadow-2xl">
                COCA<span class="text-coca-light">TOP</span>
            </h1>
            <p class="text-xl md:text-2xl text-coca-light/80 font-medium mb-12 max-w-2xl mx-auto leading-relaxed">
                Modernización y control integral para la gestión de producción de hoja de coca. <br/>
                <span class="text-white/60 text-lg">Eficiencia, transparencia y trazabilidad en el campo.</span>
            </p>

            <!-- Actions -->
            <!-- <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <template v-if="$page.props.auth.user">
                    <Link
                        :href="route('dashboard')"
                        class="group relative inline-flex items-center justify-center px-10 py-4 font-black text-coca-dark transition-all duration-300 bg-coca-light rounded-2xl hover:bg-white hover:scale-105 active:scale-95 shadow-[0_0_40px_rgba(190,242,100,0.3)]"
                    >
                        Ingresar al Sistema
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </Link>
                </template>
                <template v-else>
                    <Link
                        :href="route('login')"
                        class="group relative inline-flex items-center justify-center px-10 py-4 font-black text-coca-dark transition-all duration-300 bg-coca-light rounded-2xl hover:bg-white hover:scale-105 active:scale-95 shadow-[0_0_40px_rgba(190,242,100,0.3)]"
                    >
                        Iniciar Sesión
                    </Link>
                    <Link
                        v-if="route().has('register')"
                        :href="route('register')"
                        class="inline-flex items-center justify-center px-10 py-4 font-black text-white transition-all duration-300 bg-white/5 backdrop-blur-md border-2 border-white/10 rounded-2xl hover:bg-white/10 hover:border-coca-light active:scale-95"
                    >
                        Registrarse
                    </Link>
                </template>
            </div> -->
        </main>

        <!-- Footer -->
        <footer class="absolute bottom-8 z-10 text-white/40 text-sm font-medium tracking-widest uppercase">
            &copy; 2024 Cocatop System &bull; Potenciando el agro
        </footer>

        <!-- Decorative particles -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-coca-primary/20 blur-[120px] rounded-full mix-blend-screen"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-coca-light/10 blur-[150px] rounded-full mix-blend-screen"></div>
    </div>
</template>

<!-- <style scoped>
@keyframes glow {
    0%, 100% { filter: drop-shadow(0 0 10px rgba(190, 242, 100, 0.4)); }
    50% { filter: drop-shadow(0 0 20px rgba(190, 242, 100, 0.7)); }
}
.drop-shadow-glow {
    animation: glow 3s ease-in-out infinite;
}
</style> -->
