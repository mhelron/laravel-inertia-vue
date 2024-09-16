<script setup>
    defineProps({
        user: String
    })
</script>

<template>
    <div>
        <h1>This is the about page, {{ user }}</h1>
    </div>
</template>