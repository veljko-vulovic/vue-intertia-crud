-- Active: 1707007424122@@127.0.0.1@3306@vue_inertia_crud
<script setup>
import UserLayout from '@/Layouts/UserLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',

});

const createUser = () => {

    form.post(route('user.store'), {
        preserveScroll: true,
        onSuccess: () => {
            console.log('Form Created Successfully')
            form.reset()
        },
        onError: () => {
            console.log(form.errors);
        },
    });
}
</script>

<template>
    <Head title="Create User" />

    <UserLayout>

        <div class="flex items-center">
            <h3 class="mx-auto text-xl">Create New User</h3>
        </div>
        <div class="mt-4">

            <div class="flex flex-col max-w-2xl mx-auto space-3">
                <div class="w-full max-w-xs mx-auto">
                    <form @submit.prevent="createUser" method="POST" class="px-8 pt-6 pb-8 mb-4 rounded shadow-md">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="name">
                                Name
                            </label>
                            <input
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name='name' v-model="form.name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="name">
                                Email
                            </label>
                            <input v-model="form.email"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="name" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-bold text-white" for="password">
                                Password
                            </label>
                            <input v-model="form.password"
                                class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="password" type="text" name='password' placeholder="******************">
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </UserLayout>
</template>


