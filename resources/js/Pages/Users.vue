<script setup lang="ts">
import Layout from "../Shared/Layout.vue";

defineProps({
    time: String,
});
</script>

<template>
    <Layout>
        <h1 class="text-3xl">Users</h1>
    </Layout>
    <!-- <div style="margin-top: 900px">
        <p>The current time is: {{ time }}</p>
    </div>
    <NavLink href="/users" :preserveScroll="true">
        Refresh
    </NavLink> -->
</template>
