<script setup>
import { Head} from '@inertiajs/vue3';
import UserList from '@/Components/User/UserList.vue';
import UserLayout from '@/Layouts/UserLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import { provide } from 'vue';


const props = defineProps({
    users: Object,
});
provide('users', props.users)

</script>


<template>
    <Head title="Welcome" />

    <UserLayout>
        <div class="flex items-center justify-between">
            <h3 class="text-2xl">Users</h3>
            <NavLink href="/user/create"> Create New User</NavLink>
        </div>
        <UserList/>
    </UserLayout>
</template>



