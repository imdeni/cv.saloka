<script setup>
import { Icon } from '@iconify/vue';
const myProps = defineProps({
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
        <div class="bg-neutral-100 rounded-xl p-2 pl-4 pr-4">
            <h1 class="text-left text-sm sm:text-md lg:text-lg">{{ msg }}</h1>
        </div>
</template>