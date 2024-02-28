<script setup>
const myProps = defineProps({
    urlimg: {
        type: String,
        required: true
    },
    judulimg: {
        type: String,
        required: true
    },
})
</script>
<template>
    <img class="w-96" v-bind:src="urlimg" v-bind:alt="judulimg">
</template>