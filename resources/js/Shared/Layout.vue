<script setup>
import { reactive } from "vue";
import { usePage, Head } from '@inertiajs/inertia-vue3'
import Nav from "./Nav.vue";

const user = reactive({
    username: usePage().props.value.auth.user.username,
});

</script>

<template>
    <Head title="My App Title"></Head>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">My App</h1>
                <p class="text-sm ml-4 mt-1">
                    Welcome Back, {{ user.username }}
                </p>
            </div>
            <Nav></Nav>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-6xl mx-auto"><slot></slot></div>
    </section>
</template>
