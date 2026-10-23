<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type SharedData, type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';

defineProps<{
    items: NavItem[];
}>();

const page = usePage<SharedData>();
</script>

<template>
    <SidebarGroup class="px-2 py-4">
        <SidebarGroupLabel class="text-coca-primary/80 font-black uppercase tracking-[0.2em] text-[10px] mb-2">MÓDULOS DEL SISTEMA</SidebarGroupLabel>
        <SidebarMenu class="gap-2">
            <SidebarMenuItem v-for="item in items" :key="item.title">
                <SidebarMenuButton as-child :is-active="item.href === page.url" class="group/menu-item h-11 transition-all duration-300">
                    <Link :href="item.href" class="relative flex items-center w-full px-3">
                        <component :is="item.icon" class="mr-3 size-5 text-coca-muted group-hover/menu-item:text-coca-primary transition-colors duration-300" />
                        <span class="flex-1 font-semibold group-hover/menu-item:translate-x-1 transition-transform duration-300">{{ item.title }}</span>
                        <div v-if="item.href === page.url" class="size-1.5 rounded-full bg-white shadow-[0_0_10px_#ffffff] ml-2"></div>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarGroup>
</template>

<style scoped>
:deep(.group\/menu-item[data-active="true"]) svg {
    color: var(--coca-primary) !important;
    filter: drop-shadow(0 0 5px rgba(162, 255, 117, 0.4));
}
</style>
