<script setup>
const myProps = defineProps({
    urlimg: {
        type: String,
        required: true
    },
})
</script>
<template>
    <img class="md:h-90% md:w-screen bg-center bg-cover bg-blend-overlay bg-black/50 bg-fixed"
        v-bind:src="urlimg" alt="walpaper">
</template>