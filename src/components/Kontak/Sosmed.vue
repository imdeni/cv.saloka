<script setup>
import { Icon } from '@iconify/vue';
const myProps = defineProps({
    label: {
        type: String,
        required: true
    },
    icn: {
        type: String,
        required: true
    },
    urllink: {
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
        class="bg-zinc-300 w-fit rounded-lg p-1 hover:bg-saloka-hijau text-saloka-hijau hover:text-white border border-saloka-hijau hover:border-white">
        <a v-bind:aria-label="label" v-bind:href="urllink" target="_blank" rel="noreferrer">
            <Icon v-bind:icon="icn" class="w-8 h-8 " />
        </a>
    </button>
</template>