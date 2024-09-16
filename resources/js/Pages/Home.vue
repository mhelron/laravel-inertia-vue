<script setup>

</script>

<template>
    <Head :title="` | ${$page.component}`"/>
    <div>
        <h1>This is the home page, {{ $page.props.auth.user }}</h1>
    </div>

    <Link class="mt-[1400px] block" href="/" preserve-scroll>Refresh</Link> 
</template>