<script setup>
import { Icon } from '@iconify/vue';
const myProps = defineProps({
    icn: {
        type: String,
        required: true
    },
    msg: {
        type: String,
        required: true
    },
    urlnya: {
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
    <button
        class="w-full hover:animate-wiggle hover:animate-thrice hover:animate-duration-200 hover:animate-normal hover:animate-fill-backwards">
        <a aria-label="saloka" class="text-gray-400" 
        v-bind:href="urlnya" target="_blank"
            rel="noreferrer">
            <div class="bg-saloka-hijau hover:bg-saloka-orange border-dashed border-2 pl-4 pr-4 pb-2 pt-2 rounded-lg">
                <div class="grid grid-cols-[auto_minmax(auto,_auto)] gap-2 btn">
                    <Icon v-bind:icon="icn" class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 text-white" />
                    <p class="text-white text-left font-semibold pt-1 sm:pt-2 text-xs md:text-base">{{ msg }}</p>
                </div>

            </div>
        </a>
    </button>
</template>