<template>
    <Link href="/">Index Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>
    <slot>Default</slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>