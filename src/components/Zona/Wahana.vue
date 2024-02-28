<script setup>
const myProps = defineProps({
    urlimg: {
        type: String,
        required: true
    },
    msg: {
        type: String,
        required: true
    },
    detailmsg: {
        type: String,
        required: true
    },
})
</script>
<template>
    <div class="hover:scale-125 max-w-sm rounded-xl overflow-hidden shadow-lg">
                <img class="w-full max-h-[220px]" v-bind:src="urlimg" v-bind:alt="msg">
                <div class="px-6 py-4 bg-white">
                    <div class="font-bold text-xl mb-2 text-black">{{ msg }}</div>
                    <p class="text-gray-700 text-base">
                        {{ detailmsg }}
                    </p>
                </div>
            </div>
</template>