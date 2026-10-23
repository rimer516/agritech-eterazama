<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { useInitials } from '@/composables/useInitials';
import type { User } from '@/types';
import { computed } from 'vue';

interface Props {
    user: User;
    showEmail?: boolean;
}

const props = withDefaults(defineProps<Props>(), {
    showEmail: false,
});

const { getInitials } = useInitials();

// Compute whether we should show the avatar image
const showAvatar = computed(() => props.user.avatar && props.user.avatar !== '');
</script>

<template>
    <Avatar class="h-9 w-9 overflow-hidden rounded-xl border border-coca-primary/30 shadow-[0_0_10px_rgba(126,217,87,0.2)]">
        <AvatarImage v-if="showAvatar" :src="user.avatar!" :alt="user.name" />
        <AvatarFallback class="rounded-xl bg-coca-primary text-coca-deep font-black text-xs">
            {{ getInitials(user.name) }}
        </AvatarFallback>
    </Avatar>

    <div class="ml-2 grid flex-1 text-left text-sm leading-tight">
        <span class="truncate font-black text-white tracking-tight">{{ user.name }}</span>
        <span class="truncate text-[10px] font-bold text-coca-primary/70 uppercase tracking-wider">{{ user.email }}</span>
    </div>
</template>
