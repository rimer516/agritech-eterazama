<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <AuthBase title="Crea tu Cuenta" description="Ingresa tus datos para registrarte en la plataforma Cocatop">
        <Head title="Registro" />

        <form @submit.prevent="submit" class="flex flex-col gap-6">
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <Label for="name" class="text-xs font-black uppercase tracking-widest text-coca-muted ml-1">Nombre Completo</Label>
                    <Input id="name" type="text" required autofocus tabindex="1" autocomplete="name" v-model="form.name" placeholder="Tu nombre" class="bg-white/5 border-white/10 text-white placeholder:text-white/20 focus-visible:ring-coca-primary/50 h-12 rounded-xl" />
                    <InputError :message="form.errors.name" />
                </div>

                <div class="grid gap-2">
                    <Label for="email" class="text-xs font-black uppercase tracking-widest text-coca-muted ml-1">Correo Electrónico</Label>
                    <Input id="email" type="email" required tabindex="2" autocomplete="email" v-model="form.email" placeholder="ejemplo@correo.com" class="bg-white/5 border-white/10 text-white placeholder:text-white/20 focus-visible:ring-coca-primary/50 h-12 rounded-xl" />
                    <InputError :message="form.errors.email" />
                </div>

                <div class="grid gap-2">
                    <Label for="password" class="text-xs font-black uppercase tracking-widest text-coca-muted ml-1">Contraseña</Label>
                    <Input
                        id="password"
                        type="password"
                        required
                        tabindex="3"
                        autocomplete="new-password"
                        v-model="form.password"
                        placeholder="••••••••"
                        class="bg-white/5 border-white/10 text-white placeholder:text-white/20 focus-visible:ring-coca-primary/50 h-12 rounded-xl"
                    />
                    <InputError :message="form.errors.password" />
                </div>

                <div class="grid gap-2">
                    <Label for="password_confirmation" class="text-xs font-black uppercase tracking-widest text-coca-muted ml-1">Confirmar Contraseña</Label>
                    <Input
                        id="password_confirmation"
                        type="password"
                        required
                        tabindex="4"
                        autocomplete="new-password"
                        v-model="form.password_confirmation"
                        placeholder="••••••••"
                        class="bg-white/5 border-white/10 text-white placeholder:text-white/20 focus-visible:ring-coca-primary/50 h-12 rounded-xl"
                    />
                    <InputError :message="form.errors.password_confirmation" />
                </div>

                <Button type="submit" class="mt-4 w-full h-14 rounded-2xl bg-coca-primary text-coca-dark font-black uppercase tracking-[0.2em] hover:bg-white hover:scale-[1.02] active:scale-95 transition-all shadow-[0_10px_30px_rgba(162,255,117,0.2)]" tabindex="5" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="h-5 w-5 animate-spin mr-2" />
                    Crear Cuenta
                </Button>
            </div>

            <div class="text-center text-xs font-bold text-coca-muted mt-2">
                ¿Ya tienes una cuenta?
                <TextLink :href="route('login')" class="text-coca-primary hover:underline ml-1" :tabindex="6">Inicia sesión</TextLink>
            </div>
        </form>
    </AuthBase>
</template>
