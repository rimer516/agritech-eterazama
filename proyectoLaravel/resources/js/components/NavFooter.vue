<script setup lang="ts">
import { SidebarGroup, SidebarGroupContent, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';

interface Props {
    items: NavItem[];
    class?: string;
}

defineProps<Props>();
</script>

<template>
    <SidebarGroup :class="`group-data-[collapsible=icon]:p-0 ${$props.class || ''}`">
        <SidebarGroupContent>
            <SidebarMenu class="gap-1">
                <SidebarMenuItem v-for="item in items" :key="item.title">
                    <SidebarMenuButton as-child class="group/footer-item transition-all duration-300">
                        <a :href="item.href" target="_blank" rel="noopener noreferrer" class="px-3">
                            <component :is="item.icon" class="text-coca-muted group-hover/footer-item:text-coca-primary transition-colors duration-300" />
                            <span class="font-medium group-hover/footer-item:translate-x-1 transition-transform duration-300">{{ item.title }}</span>
                        </a>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarGroupContent>
    </SidebarGroup>
</template>
