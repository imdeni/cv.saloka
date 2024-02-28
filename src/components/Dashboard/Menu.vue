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
};
</script>

<template>
    <button class="grid grid-cols-[40px_minmax(auto,auto)] pt-1 pb-1 pl-2 pr-2 hover:bg-zinc-500 rounded-md">
        <Icon v-bind:icon="icn" class="w-6 h-6"/>
        <h1 class="text-left">{{msg}}</h1>
    </button>
</template>