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
    <div class="bg-neutral-100 rounded-xl p-2 md:pl-4 md:pr-4">
            <div class="flow-root">
                <h1 class="float-left text-sm sm:text-md  lg:text-lg">{{ msg }}</h1>
                <Icon v-bind:icon="icn" class="float-right w-6 h-6 text-right" />
            </div>
        </div>
</template>