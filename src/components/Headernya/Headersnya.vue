<script setup>
const myProps = defineProps({
    msg: {
        type: String,
        required: true
    },
})
</script>
<template>
    <button 
        class="pl-0 lg:pl-2 pr-0 lg:pr-2 link link-underline link-underline-black text-black hover:text-saloka-orange">
        <h1 class="text-xs lg:text-lg font-extrabold pt-4 pb-4">{{ msg}}</h1>
    </button>
</template>