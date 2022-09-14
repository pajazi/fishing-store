<script setup lang="ts">
const props = defineProps({
    name: String,
    frameworks: Array<String>,
});
</script>

<template>
    <h1>{{ name }}</h1>

    <ul>
        <li v-for="framework of props.frameworks">
            {{ framework }}
        </li>
    </ul>
</template>
