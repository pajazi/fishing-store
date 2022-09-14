<script setup>
defineProps({
    component: String
})
</script>

<template>
    <Link
        class="text-black hover:underline"
        :class="{ 'font-bold underline': $page.component === component }"
    >
        <slot></slot>
    </Link>
</template>
