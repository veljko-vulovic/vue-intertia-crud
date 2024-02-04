<script setup>
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import NavLink from '../NavLink.vue';
import EditUserButton from './EditUserButton.vue';
import { useForm } from '@inertiajs/vue3';


defineProps({
    user: Object,
});
const form = useForm({
    user: '',
});


const userDelete = (user) => {
    form.delete(route('user.destroy',user), {
        preserveScroll: true,
        onSuccess: () => console.log("User deleted"),
    });
};


</script>

<template>
    <li class="px-6 py-4">
        <div class="flex items-center justify-between">
            <NavLink :href="route('user.show', user)">
                {{ user.name }}
            </NavLink>

            <div>
                <form @submit.prevent="userDelete(user)">
                    <div class="space-x-4">
                        <EditUserButton :href="route('user.edit', user)"> Edit User </EditUserButton>
                        <DangerButton type="submit"> Delete User </DangerButton>
                    </div>
                </form>
            </div>
        </div>
    </li>
</template>

