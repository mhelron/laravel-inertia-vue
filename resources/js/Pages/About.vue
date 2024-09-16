<script setup>
    defineProps({
        user: String
    })
</script>

<template>
    <Head title="| About"/>
    <div>
        <h1>This is the about page, {{ user }}</h1>
    </div>
</template>