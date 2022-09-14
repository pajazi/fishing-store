<script setup>
defineProps({
    component: String
})
</script>

<template>
    <Link
        class="text-blue-500 hover:underline"
        :class="{ 'font-bold underline': $page.component === component }"
    >
        <slot></slot>
    </Link>
</template>
