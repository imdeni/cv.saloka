<script setup>
import { Icon } from '@iconify/vue';
const myProps = defineProps({
    msg: {
        type: String,
        required: true
    },
    icn: {
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
    <div class="text-right grid grid-cols-[auto_minmax(50px,_50px)] gap-4">
        <h1 class="text-base pt-1 text-neutral-200 font-semibold">
            {{ msg }}
        </h1>
        <Icon v-bind:icon="icn" class="w-8 h-8 text-neutral-200" />
    </div>
</template>