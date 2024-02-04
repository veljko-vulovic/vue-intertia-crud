<script setup>
import UserLayout from '@/Layouts/UserLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';


// defineProps({
//     user: Object
// });
// defineProps({
//     user: Object,
// });


const props = defineProps({
    user: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    id: props.user.id,
    name: props.user.name,
    email: props.user.email,
});


</script>

<template>
    <Head title="Edit User" />

    <UserLayout>
        <div class="flex items-center">
            <h3 class="mx-auto text-xl">Edit User</h3>
        </div>

        <div class="mt-4">

            <div class="flex flex-col max-w-2xl mx-auto space-3">
                <div class="w-full max-w-xs mx-auto">
                    <form method="post" @submit.prevent="form.put(route('user.update',props.user.id))"
                        class="px-8 pt-6 pb-8 mb-4 rounded shadow-md">

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="name">
                                Name
                            </label>
                            <input v-model="form.name"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name='name' id="name" type="text" placeholder="Name">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="name">
                                Email
                            </label>
                            <input v-model="form.email"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="name" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="px-4 py-2 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-400 focus:outline-none focus:shadow-outline"
                                type="submit">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </UserLayout>
</template>


