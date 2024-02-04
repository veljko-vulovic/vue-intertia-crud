<script setup >
import UserLayout from '@/Layouts/UserLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    user: Object,
});

</script>

<template >
    <Head title="User" />

    <UserLayout>
        <div class="mx-auto max-w-64">
            <div class="flex items-center justify-between ">
                <h3>User</h3>
                <NavLink :href="`/`" />
            </div>
            <div class="mt-4">
                <div class="flex flex-col space-3">
                    <span>Name: {{ user.name }}</span>
                    <span> E-mail: {{ user.email }}</span>
                </div>
            </div>
        </div>
    </UserLayout>
</template>

