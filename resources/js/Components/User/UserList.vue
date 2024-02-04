<script setup>
import { inject } from 'vue';
import UserItem from './UserItem.vue';

const users = inject('users')
</script>

<template>
    <div class="mt-4">
        <ul>
            <UserItem v-for="user in users" :key="user.id" :user="user" />
        </ul>
    </div>
</template>
