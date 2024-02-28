<script setup>
import Tombol_menu from '../components/Dashboard/Menu.vue'
import { Icon } from '@iconify/vue';
</script>

<script>
export default {
  name:'menus',
    data() {
      return {
          menu:true,
      }
    },
    methods: {
      Tampil_menu() {
        this.menu=true;
        console.log(this.menu);
      },
      Sembunyi_menu() {
        this.menu=false;
      },
      dashboard() {
        this.$router.push('cms')
      },
      tentang() {
        this.$router.push('tentang')
      },
      wahana() {
        this.$router.push('wahana')
      },
      peta() {
        this.$router.push('peta')
      },
      events() {
        this.$router.push('events')
      },
      faqs() {
        this.$router.push('faqs')
      },
      kontak() {
        this.$router.push('kontak')
      },
      Saloka() {
        this.$router.push('/')
      },
    },
  components: {
    Icon,
  },
};
</script>

<template>
    <!-- Header -->

    <div class="z-50 flow-root bg-zinc-800 w-full p-4 text-lg font-bold fixed max-w-[1920px]">
      <button v-if="!menu" v-on:click="Tampil_menu()" class="float-left grid grid-cols-2 w-fit text-zinc-300 hover:text-white">
        <Icon icon="ep:menu" class="w-8 h-8"/>
        <h1 class="pt-1">Menu</h1>
      </button>
      <button v-if="menu" v-on:click="Sembunyi_menu()" class="float-left grid grid-cols-2 w-fit text-zinc-300 hover:text-white">
        <Icon icon="ep:menu" class="w-8 h-8"/>
        <h1 class="pt-1">Menu</h1>
      </button>
      <button v-on:click="Saloka()" class="float-right grid grid-cols-[auto_minmax(auto,auto)] gap-2 w-fit text-zinc-300 hover:text-white">
        <h1 class="pt-1">View Saloka</h1>
        <Icon icon="tabler:logout" class="w-8 h-8"/>
      </button>
    </div>

    <!-- End Header -->

    <!-- Show Menu -->
    <div v-if="!menu" class="block sm:hidden">
      <div class="fixed pt-16">
        <div class="p-4 font-bold grid grid-rows-6 gap-2 text-zinc-300 bg-zinc-700 w-screen">
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="dashboard()" msg="Dashboard" icn="material-symbols:monitor-outline"/>
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="tentang()" msg="Tentang" icn="mdi:about-circle-outline"/>
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="wahana()" msg="Wahana" icn="arcticons:theme-park"/>
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="peta()" msg="Peta" icn="uiw:map"/>
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="events()" msg="Events" icn="mdi:events-check"/>
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="faqs()" msg="Faqs" icn="wpf:ask-question"/>
          <Tombol_menu class="border-2 border-zinc-800" v-on:click="kontak()" msg="Kontak" icn="mdi:contact"/>
        </div>
      </div>
    </div>
    <div v-if="!menu" class="hidden sm:block">
      <div class="fixed z-20 h-screen w-auto p-4 pr-0 bg-zinc-800 top-16">
        <div class="grid grid-rows-6 gap-2 text-zinc-300">
          <Tombol_menu v-on:click="dashboard()" msg="" icn="material-symbols:monitor-outline"/>
          <Tombol_menu v-on:click="tentang()" msg=""  icn="mdi:about-circle-outline"/>
          <Tombol_menu v-on:click="wahana()" msg=""  icn="arcticons:theme-park"/>
          <Tombol_menu v-on:click="peta()" msg=""  icn="uiw:map"/>
          <Tombol_menu v-on:click="events()" msg=""  icn="mdi:events-check"/>
          <Tombol_menu v-on:click="faqs()" msg=""  icn="wpf:ask-question"/>
          <Tombol_menu v-on:click="kontak()" msg=""  icn="mdi:contact"/>
        </div>
      </div>
    </div>
    <div v-if="menu" class="hidden sm:block">
      <div class="fixed z-20 h-screen w-auto p-4 bg-zinc-800 top-16">
        <div class="grid grid-rows-6 gap-2 text-zinc-300">
          <Tombol_menu v-on:click="dashboard()" msg="Dashboard" icn="material-symbols:monitor-outline"/>
          <Tombol_menu v-on:click="tentang()" msg="Tentang" icn="mdi:about-circle-outline"/>
          <Tombol_menu v-on:click="wahana()" msg="Wahana" icn="arcticons:theme-park"/>
          <Tombol_menu v-on:click="peta()" msg="Peta" icn="uiw:map"/>
          <Tombol_menu v-on:click="events()" msg="Events" icn="mdi:events-check"/>
          <Tombol_menu v-on:click="faqs()" msg="Faqs" icn="wpf:ask-question"/>
          <Tombol_menu v-on:click="kontak()" msg="Kontak" icn="mdi:contact"/>
        </div>
      </div>
    </div>
    <!-- End Show Menu -->

</template>
