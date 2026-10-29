<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <AuthBase title="Acceso al Sistema" description="Ingresa tus credenciales para gestionar la producción de coca">
        <Head title="Iniciar Sesión" />

        <div v-if="status" class="mb-6 text-center text-sm font-black text-coca-primary uppercase tracking-widest bg-coca-primary/10 py-3 rounded-xl border border-coca-primary/20">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="flex flex-col gap-8">
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <Label for="email" class="text-xs font-black uppercase tracking-widest text-coca-muted ml-1">Correo Electrónico</Label>
                    <Input
                        id="email"
                        type="email"
                        required
                        autofocus
                        tabindex="1"
                        autocomplete="email"
                        v-model="form.email"
                        placeholder="ejemplo@correo.com"
                        class="bg-white/5 border-white/10 text-white placeholder:text-white/20 focus-visible:ring-coca-primary/50 h-12 rounded-xl"
                    />
                    <InputError :message="form.errors.email" />
                </div>

                <div class="grid gap-2">
                    <div class="flex items-center justify-between ml-1">
                        <Label for="password" class="text-xs font-black uppercase tracking-widest text-coca-muted">Contraseña</Label>
                        <TextLink v-if="canResetPassword" :href="route('password.request')" class="text-[10px] font-black uppercase tracking-widest text-coca-primary/60 hover:text-coca-primary" :tabindex="5">
                            ¿Olvidaste tu contraseña?
                        </TextLink>
                    </div>
                    <Input
                        id="password"
                        type="password"
                        required
                        tabindex="2"
                        autocomplete="current-password"
                        v-model="form.password"
                        placeholder="••••••••"
                        class="bg-white/5 border-white/10 text-white placeholder:text-white/20 focus-visible:ring-coca-primary/50 h-12 rounded-xl"
                    />
                    <InputError :message="form.errors.password" />
                </div>

                <div class="flex items-center ml-1" tabindex="3">
                    <Label for="remember" class="flex items-center space-x-3 cursor-pointer group">
                        <Checkbox id="remember" v-model:checked="form.remember" tabindex="4" class="border-white/20 data-[state=checked]:bg-coca-primary data-[state=checked]:text-coca-dark" />
                        <span class="text-xs font-bold text-coca-muted group-hover:text-white transition-colors">Recordar sesión</span>
                    </Label>
                </div>

                <Button type="submit" class="mt-4 w-full h-14 rounded-2xl bg-coca-primary text-coca-dark font-black uppercase tracking-[0.2em] hover:bg-white hover:scale-[1.02] active:scale-95 transition-all shadow-[0_10px_30px_rgba(162,255,117,0.2)]" tabindex="4" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="h-5 w-5 animate-spin mr-2" />
                    Iniciar Sesión
                </Button>
            </div>

            <div class="text-center text-xs font-bold text-coca-muted mt-2">
                ¿No tienes una cuenta?
                <TextLink :href="route('register')" :tabindex="5" class="text-coca-primary hover:underline ml-1">Regístrate aquí</TextLink>
            </div>
        </form>
    </AuthBase>
</template>
