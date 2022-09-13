<script setup>
import { RouterView } from "vue-router";
import MainLayout from "./layouts/MainLayout.vue";
import Navbar from "./components/navbar/Navbar.vue";
</script>

<template>
    <Navbar></Navbar>
    <MainLayout>
        <RouterView />
    </MainLayout>
</template>
