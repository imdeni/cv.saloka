<script setup>
import { Icon } from '@iconify/vue';
const myProps = defineProps({
    judul: {
        type: String,
        required: true
    },
    urlimg: {
        type: String,
        required: true
    },
    detail: {
        type: String,
        required: true
    },
    periode: {
        type: String,
        required: true
    },
    tags: {
        type: String,
        required: true
    },
    tags1: {
        type: String,
        required: true
    },
    tags2: {
        type: String,
        required: true
    },
})
</script>
<script>
export default {
    components: {
        Icon,
    },
}    
</script>
<template>
    <div class="h-full hover:scale-110 w-full rounded-xl overflow-hidden shadow-lg">
        <img class="md:w-full" v-bind:src="urlimg" v-bind:alt="judul">
        <div class="px-6 py-4 bg-white">
            <div class="font-bold md:text-base lg:text-xl mb-2 text-black">{{ judul }}</div>
            <p class="text-gray-700 md:text-sm lg:text-base min-h-[100px]">
                {{ detail }}
            </p>
        </div>
        <div class="px-6 pt-6 pb-2 bg-merah-gelap text-center">
            <span class="inline-block w-full sm:w-fit bg-gray-200 rounded-full px-3 py-1 md:text-xs lg:text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ periode }}
            </span>
            <span class="inline-block w-full sm:w-fit bg-gray-200 rounded-full px-3 py-1 md:text-xs lg:text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ tags }}
            </span>
            <span class="inline-block w-full sm:w-fit bg-gray-200 rounded-full px-3 py-1 md:text-xs lg:text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ tags1 }}
            </span>
            <span class="inline-block w-full sm:w-fit bg-gray-200 rounded-full px-3 py-1 md:text-xs lg:text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ tags2 }}
            </span>
        </div>
    </div>
</template>