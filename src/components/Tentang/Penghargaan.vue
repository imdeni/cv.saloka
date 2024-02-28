<script setup>
const myProps = defineProps({
    msg: {
        type: String,
        required: true
    },
})
</script>
<template>
    <div class="z-10 h-full w-full border-b-4 border-saloka-hijau rounded-lg bg-neutral-200 p-2 sm:p-4">
        <div class="text-black text-center text-sm sm:text-base">
            <h1>
                {{ msg }}
            </h1>
        </div>
    </div>
</template>