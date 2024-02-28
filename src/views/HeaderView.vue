<script setup>
import { Icon } from '@iconify/vue';
import Headernya from '../components/Headernya/Headersnya.vue';
import Walpapernya from '../components/Home/Walpaper.vue';
import Tiket from '../components/Home/Tiket.vue';
import Penghargaanya from '../components/Tentang/Penghargaan.vue';
import Keanggotanya from '../components/Tentang/Keanggotaan.vue';
import Zonanya from '../components/Zona/Wahana.vue';
import Promonya from '../components/Events/Promo.vue';
import Jawab from '../components/Faqs/Faqs_answer.vue';
import Nanya from '../components/Faqs/Faqs_ask.vue';
import Kontaknya from '../components/Kontak/Kontaksnya.vue';
import Sosmednya from '../components/Kontak/Sosmed.vue';
</script>

<script>
import axios from "axios";
export default {    
    data() {
        return {
            getApiServer: 'http://localhost:8000/api/',
            // getApiServer: 'https://deniachmad.online/index.php/api/',
            
                Tmenuss: false,
                faq1: false,
                faq2: false,
                faq3: false,
                arrImage:[],
                form:{  
                            tentang:"",
                            tentang_data:"",
                        },  
        }
    },
    components: {
        Icon,
    },
    methods: {
        loadData(){
                    axios.get(this.getApiServer + "get/tentang_saloka").then((res) => {
                        // console.log(res.data.result[0].detail);
                        this.form.tentang_data = res.data.result[0].detail;
                    }).catch;
                },
        andromenu(){
            this.Tmenuss=true;
        },
        androclose(){
            this.Tmenuss=false;
        },
        Faq1_plus() {
            this.faq1 = true;
        },
        Faq1_minus() {
            this.faq1 = false;
        },
        Faq2_plus() {
            this.faq2 = true;
        },
        Faq2_minus() {
            this.faq2 = false;
        },
        Faq3_plus() {
            this.faq3 = true;
        },
        Faq3_minus() {
            this.faq3 = false;
        },
        readFile() {
            window.open('peta_saloka.pdf', '_blank')
        },
        Twalpaper() {
            const element = document.getElementById("Walpaper-me");
            element.scrollIntoView({ behavior: "smooth" });
            
            this.androclose();
        },
        Ttentang() {
            const element = document.getElementById("Tentang-me");
            element.scrollIntoView({ behavior: "smooth" });
            this.androclose();},
        Twahana() {
            const element = document.getElementById("Wahana-me");
            element.scrollIntoView({ behavior: "smooth" });
        
            this.androclose();},
        Tpeta() {
            const element = document.getElementById("Peta-me");
            element.scrollIntoView({ behavior: "smooth" });
        
            this.androclose();},
        Tevent() {
            const element = document.getElementById("Event-me");
            element.scrollIntoView({ behavior: "smooth" });
        
            this.androclose();},
        Tfaqs() {
            const element = document.getElementById("Faqs-me");
            element.scrollIntoView({ behavior: "smooth" });
        
            this.androclose();},
        Tkontak() {
            const element = document.getElementById("Kontak-me");
            element.scrollIntoView({ behavior: "smooth" });
        
            this.androclose();},
        loadData2() {
            this.arrImage = [];
            axios.get(this.getApiServer + "get/walpaperImg").then((res) => {
                this.arrImage = res.data.result;
            }).catch;
        },
    },
        mounted() {
            this.loadData();
            this.loadData2();
        },
};
</script>

<template>
    <!-- HEADER -->
     <!-- "vite": "^4.4.6" -->
    <div class="hidden sm:block">
    <div>
        <div
            class="z-50 backdrop-blur-sm fixed top-0 left-0 right-0 w-full pt-4 pb-4 pl-6 pr-6 bg-transparent hover:bg-gradient-to-r hover:from-green-300 hover:to-orange-300 hover:border-l-saloka-hijau transition ease-in-out delay-300 duration-300">
            <div class="mx-auto w-full lg:w-% inset-0 flex items-center justify-center">
                <div
                    class="grid grid-cols-[100px_minmax(auto,_auto)_auto_auto_auto_auto_auto] lg:grid-cols-[200px_minmax(auto,_auto)_auto_auto_auto_auto_auto] gap-4 lg:gap-2 lg:gap-8 place-items-center">
                    <img v-on:click="Twalpaper()" src="../assets/saloka.svg"
                        class="w-full border-2 border-saloka-orange rounded-lg pl-0 lg:pl-2 pr-0 lg:pr-2 pt-1 pb-1" alt="logo">
                    <Headernya msg="TENTANG" v-on:click="Ttentang()" />
                    <Headernya msg="WAHANA" v-on:click="Twahana()" />
                    <Headernya msg="PETA" v-on:click="Tpeta()" />
                    <Headernya msg="EVENTS" v-on:click="Tevent()" />
                    <Headernya msg="FAQs" v-on:click="Tfaqs()" />
                    <Headernya msg="KONTAK" v-on:click="Tkontak()" />
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="block sm:hidden">
    <div>
        <div
            class="z-50 backdrop-blur-sm fixed top-0 left-0 right-0 w-full pt-2 pb-2 pl-6 pr-6 bg-transparent hover:bg-gradient-to-r hover:from-green-300 hover:to-orange-300 hover:border-l-saloka-hijau transition ease-in-out delay-300 duration-300">
            <div class="mx-auto w-full lg:w-% inset-0">
                <div class="flow-root">
                    <img v-on:click="Twalpaper()" src="../assets/saloka.svg"
                        class="float-left w-28 border-2 border-saloka-orange rounded-lg pl-0 lg:pl-2 pr-0 lg:pr-2 pt-1 pb-1" alt="logo">
                    <button v-if="!Tmenuss" class="float-right" v-on:click="andromenu()"><Icon icon="gg:menu-round" class="text-saloka-orange w-8 h-12"/></button>
                    <button v-if="Tmenuss" class="float-right" v-on:click="androclose()"><Icon icon="carbon:close-outline" class="text-saloka-orange w-8 h-12"/></button>
                </div>
            </div>
        </div>
        <div v-if="Tmenuss" class="left-0 top-0 right-0 fixed backdrop-blur-sm z-40 pt-16 h-full">
                        <div class="grid grid-cols-1 place-items-center w-full">
                            <Headernya class="w-full" msg="TENTANG" v-on:click="Ttentang()" />
                            <Headernya class="w-full" msg="WAHANA" v-on:click="Twahana()" />
                            <Headernya class="w-full" msg="PETA" v-on:click="Tpeta()" />
                            <Headernya class="w-full" msg="EVENTS" v-on:click="Tevent()" />
                            <Headernya class="w-full" msg="FAQs" v-on:click="Tfaqs()" />
                            <Headernya class="w-full" msg="KONTAK" v-on:click="Tkontak()" />
                        </div>
                    </div>
    </div>
    </div>
    
    <!-- END HEADER -->

    <div class="changer" id="Walpaper-me">
            <!-- <Walpapernya v-for="item in arrImage" :key="arrImage" :urlimg="item.srcs"/> -->
        <Walpapernya urlimg="src/assets/walpaper1.jpg" />
        <Walpapernya urlimg="src/assets/walpaper5.jpg" />
        <Walpapernya urlimg="src/assets/walpaper3.jpg" />
        <Walpapernya urlimg="src/assets/walpaper7.jpg" />
        <div class="grid place-items-center h-screen">
            <div class=" p-2">
                <div
                    class="grid grid-cols-[auto_minmax(auto,_auto)_auto_auto] backdrop-blur-3xl rounded-lg border border-saloka-orange pl-4 pr-4 pb-2 pt-2 lg:pt-0">
                    <h1
                        class="font-sans text-saloka-hijau font-extrabold text-xl lg:text-6xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        Sal</h1>
                    <h1
                        class="font-sans text-saloka-orange font-extrabold text-xl lg:text-6xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        ö</h1>
                    <h1
                        class="font-sans text-saloka-hijau font-extrabold text-xl lg:text-6xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        ka</h1>
                    <h1
                        class="font-sans2 pl-2 lg:pl-6 text-white font-extrabold text-xl lg:text-6xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        Theme Park</h1>
                </div>
            </div>

            <div class="absolute bottom-20 sm:bottom-0 p-2 z-10 bg-transparent">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4 pb-2">
                    <Tiket icn="ion:ticket" msg="PESAN TIKET" urlnya="https://salokapark.com/ticket/pilih-ticket" />
                    <Tiket icn="dashicons:tickets-alt" msg="ROMBONGAN" urlnya="https://salokapark.com/group-ticket/pilih-ticket" />
                    <Tiket icn="clarity:group-line" msg="MEMBERSHIP" urlnya="https://salokapark.com/membership" />
                </div>
            </div>
            <div class="absolute bottom-0 z-1 bg-gradient-to-t from-neutral-300 to-saloka-hijau w-full pt-32 sm:pt-28"></div>
        </div>
    </div>


    <div id="Tentang-me" class="pt-32">

        <div class="grid grid-rows-[auto_minmax(auto,_auto)_auto] gap-8">
            <div dir="ltr" class="grid grid-cols-[auto_minmax(auto,_auto)] gap-2 place-items-center  lg:pl-96 lg:pr-96">


                <div class="border-s-4 border-saloka-hijau w-full sm:w-[300px] md:w-[400px] z-10 rounded-lg bg-neutral-200 p-4">

                    <h1
                        class="border-s-4 border-saloka-hijau relative font-bold text-saloka-hijau text-center -mt-10 text-md sm:text-lg lg:text-xl bg-neutral-300 w-fit p-2 rounded-lg">
                        TENTANG SALOKA</h1>
                    <div class="text-black text-justify text-sm sm:text-base lg:text-lg pt-2">
                        <h1>
                            <!-- {{ form.tentang_data }} -->
                            SALOKA hadir sebagai salah satu destinasi wisata Pesona Indonesia yang berbentuk taman rekreasi
                            tematik
                            keluarga di Jawa Tengah yang mengusung konsep kearifan lokal. Berlokasi di persimpangan antara
                            kota
                            Semarang, Salatiga, Surakarta dan Daerah Istimewa Yogyakarta.
                        </h1>
                        <br>
                        <button class="bg-saloka-hijau pl-2 pr-2 pt-1 pb-1 text-white rounded-lg">Baca lebih lanjut</button>

                    </div>
                </div>

                <div class="z-1 -ml-40 hidden sm:block">
                    <img class="w-[800px] rounded-xl " src="../assets/walpaper1.jpg" alt="">
                </div>
            </div>

            <div class="bg-neutral-300 rounded-xl">
                <div class="grid place-items-center" dir="ltr">
                    <h1
                        class="border-b-4 border-saloka-hijau text-saloka-hijau text-md sm:text-lg lg:text-xl font-bold bg-neutral-300 p-2 pt-1 pb-1 -mt-4 rounded-lg">
                        PENGHARGAAN
                    </h1>
                </div>
                <div class="grid grid-cols-3 place-items-center gap-2 pt-2 pb-4 p-2 lg:pl-36 lg:pr-36">
                    <Penghargaanya msg="Lembaga Prestasi Indonesia Dunia (LEPRID)" />
                    <Penghargaanya msg="Solo Best Brand and Innovation Awward 2020" />
                    <Penghargaanya msg="Pariwisata Award 2019" />
                    <Penghargaanya msg="Cleanliness, Health, Safety, Enviroment Sustainability (CHSE)" />
                    <Penghargaanya msg="Anugerah Pariwisata Jawa Tengah 2022" />
                </div>
            </div>

            <div class="bg-transparent rounded-xl">
                <div class="grid grid-cols-2 place-items-center gap-2 pt-2 pb-4  pl-2 pr-2 md:pl-36 md:pr-36">
                    <Keanggotanya judulimg="anggota1" urlimg="src/assets/anggota.jpg" />
                    <Keanggotanya judulimg="anggota2" urlimg="src/assets/anggota2.png" />
                </div>
            </div>


        </div>
    </div>
    


    <div id="Wahana-me" class="pr-32 pl-4 pr-4 lg:pl-32 lg:pr-32">

        <div class="w-full grid place-items-center pb-4">
            <h1
                class="border-b-4 border-t-4 border-saloka-hijau text-black font-extrabold text-md sm:text-lg lg:text-xl rounded-lg p-2 text-saloka-hijau">
                ZONA
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 place-items-center gap-2">
            <Zonanya urlimg="src/assets/walpaper5.jpg" msg="Balalantara"
                detailmsg="Seperti namanya, kamu akan disambut dengan suasana seperti memasuki hutan belantara yang di penuhi berbagai wahana." />
            <Zonanya urlimg="src/assets/walpaper3.jpg" msg="Ararya"
                detailmsg="Zona Ararya! Zona ini cocok untuk kamu yang menyukai tantangan dan sensasi ekstrem saat bersenang-senang." />
            <Zonanya urlimg="src/assets/walpaper2.jpg" msg="Kamayayi"
                detailmsg="Ajak si kecil bersenang-senang dengan berbagai wahana permainan yang aman dan nyaman." />
            <Zonanya urlimg="src/assets/walpaper6.jpg" msg="Arung jeram"
                detailmsg="Nikmati keseruan dengan tema industri pertambangan bersama teman-teman dan keluarga tersayang." />
            <Zonanya urlimg="src/assets/walpaper7.jpg" msg="Pesisir"
                detailmsg="Zona yang akan membawamu merasakan sensasi seperti berada di pantai dan di sambut wahana cakrawala ikonik." />
        </div>
    </div>

    <div id="Peta-me" class="pl-4 pr-4 lg:pl-32 lg:pr-32 pt-24">
        <div class="w-full grid place-items-center pt-8">
            <h1
                class="border-b-4 border-t-4 border-saloka-hijau text-black font-extrabold text-md sm:text-lg lg:text-xl rounded-lg p-2 text-saloka-hijau">
                PETA WAHANA</h1>
            <img class="pt-4 rounded-xl w-full" src="../assets/peta.jpg" alt="">

        </div>

        <div class="grid grid-cols-2 place-items-center pt-4">
            <button
                class="w-full lg:w-fit hover:animate-wiggle hover:animate-thrice hover:animate-duration-200 hover:animate-normal hover:animate-fill-backwards">
                <a aria-label="saloka" class="text-gray-400"
                    href="https://dashboard.salokapark.com/public/peta/peta1676191497.jpg" target="_blank" rel="noreferrer">
                    <div
                        class="bg-saloka-hijau hover:bg-saloka-orange border-dashed border-2 pl-4 pr-4 pb-2 pt-2 rounded-lg">
                        <div class="grid grid-cols-[auto_minmax(auto,_auto)] gap-2 btn">
                            <Icon icon="uiw:map" class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10  text-white" />
                            <p class="text-white font-semibold pt-1 sm:pt-2 text-xs sm:text-md md:text-lg text-left">LIHAT PETA</p>
                        </div>

                    </div>
                </a>
            </button>
            <button v-on:click="readFile()"
                class="w-full lg:w-fit hover:animate-wiggle hover:animate-thrice hover:animate-duration-200 hover:animate-normal hover:animate-fill-backwards">
                <div class="bg-saloka-hijau hover:bg-saloka-orange border-dashed border-2 pl-4 pr-4 pb-2 pt-2 rounded-lg">
                    <div class="grid grid-cols-[auto_minmax(auto,_auto)] gap-2 btn">
                        <Icon icon="uiw:map" class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 text-white" />
                        <p class="text-white font-semibold pt-1 sm:pt-2 text-xs sm:text-md md:text-lg text-left">DOWNLOAD PETA</p>
                    </div>

                </div>
            </button>
        </div>
    </div>

    <div id="Event-me" class="pr-4 pl-4 md:pr-12 md:pl-12 pt-32">
        <div class="w-full grid place-items-center pb-4">
            <h1
                class="border-b-4 border-t-4 border-saloka-hijau text-black font-extrabold text-md sm:text-lg lg:text-xl rounded-lg p-2 text-saloka-hijau">
                EVENTS
            </h1>
        </div>
        <div class="grid md:grid-cols-2 place-items-center gap-2">
            <Promonya urlimg="src/assets/dirga1.jpg" judul="Dirgahayu indonesia - Free tiket ke saloka"
                detail="Rayakan kemerdekaan indonesia dengan memperingati Dirgahayu bersama Saloka Theme Park! Dapatkan tiket gratis untuk merayakan momen bersejarah ini. Syarat dan ketentuan berlaku."
                periode="17 Agustus 2023" tags="#DirgahayuIndonesia" tags1="#HariKemerdekaan" tags2="#TiketGratisSaloka" />

            <Promonya urlimg="src/assets/dirga2.jpg" judul="Promo merdeka"
                detail="Hemat 17% untuk Tiket Saloka Theme Park - Promo Eksklusif hanya di Salokapark.com"
                periode="1 - 31 Agustus 2023" tags="#DirgahayuIndonesia" tags1="#HariKemerdekaan"
                tags2="#TiketGratisSaloka" />

            <Promonya urlimg="src/assets/promo1.jpg" judul="What's on august"
                detail="Semangat Hari kemerdekaan udah terasa banget!" periode="1 - 31 Agustus 2023"
                tags="#DirgahayuIndonesia" tags1="#HariKemerdekaan" tags2="#TiketGratisSaloka" />

            <Promonya urlimg="src/assets/promo2.jpg" judul="Lahir di bulan agustus - Hemat 45%" detail="Selamat ulang tahun untuk kamu yang berulang tahun di bulan Agustus! Untuk merayakan momen spesial
                        ini, Dapatkan potongan harga istimewa sebesar 45% untuk merayakan ulang tahun kamu di Saloka."
                periode="1 - 31 Agustus 2023" tags="#DirgahayuIndonesia" tags1="#HariKemerdekaan"
                tags2="#TiketGratisSaloka" />
        </div>
    </div>

    <div id="Faqs-me" class="pl-4 pr-4 md:pl-12 md:pr-12 pt-32">
        <div class="grid place-items-center">
            <div class="bg-neutral-300 w-full rounded-lg p-1">
                <h1 class="text-center text-black font-extrabold text-lg">FAQs</h1>
                
                <div class="grid grid-cols-1 text-black text-base p-2">
                    <Nanya v-if="!faq1" v-on:click="Faq1_plus()" icn="bi:plus" msg="Apakah boleh membawa makanan dari luar?" />
                    <Nanya v-if="faq1" v-on:click="Faq1_minus()" icn="tabler:minus" msg="Apakah boleh membawa makanan dari luar?" />
                    <Jawab v-if="faq1" v-on:click="Faq1_minus()" msg="Tidak, Tapi tenang saja kamu dapat membeli makanan di cafe dan resto yang ada di dalam Saloka" />
                </div>

                <div class="grid grid-cols-1 text-black text-base p-2">
                    <Nanya v-if="!faq2" v-on:click="Faq2_plus()" icn="bi:plus" msg="Apakah ada kolam renang di dalam Saloka?" />
                    <Nanya v-if="faq2" v-on:click="Faq2_minus()" icn="tabler:minus" msg="Apakah ada kolam renang di dalam Saloka?" />
                    <Jawab v-if="faq2" v-on:click="Faq2_minus()" msg="Tidak ada, namun tenang saja kakak bisa bermain wahana air lainya seperti semprat semprot" />
                </div>

                <div class="grid grid-cols-1 text-black text-base p-2">
                    <Nanya v-if="!faq3" v-on:click="Faq3_plus()" icn="bi:plus" msg="Berapa harga tiket terusan di Saloka Theme Park?" />
                    <Nanya v-if="faq3" v-on:click="Faq3_minus()" icn="tabler:minus" msg="Berapa harga tiket terusan di Saloka Theme Park?" />
                    <Jawab v-if="faq3" v-on:click="Faq3_minus()" msg="Harga tiket Saloka Weekdays Rp.120.000 dan Weekend dan hari Libur Nasional Rp.150.000. Dengan tiket tersebut, kakak dapat jelajahi semua wahana di Negeri Saloka semaunya dan sepuasnya, tanpa ada tambahan biaya lagi pastinya loh" />
                </div>
            </div>
        </div>
    </div>

    <div id="Kontak-me" class="pt-12 w-full">
        <div class="bg-saloka-hijau pl-4 pr-4 sm:pl-32 sm:pr-32 md:pl-4 md:pr-4 lg:pl-32 lg:pr-32 pb-12 p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 place-items-center">
                <img src="../assets/saloka-putih.svg" alt="saloka" class="w-64">
                <div class="grid grid-cols-3 gap-2 w-full">
                    <div class="grid grid-cols-1 gap-1">
                        <h1 class="text-white font-bold text-xl pb-1">Zona</h1>
                        <button v-on:click="Twahana()" class="text-left">Pesisir</button>
                        <button v-on:click="Twahana()" class="text-left">Balalantara</button>
                        <button v-on:click="Twahana()" class="text-left">Kamayayi</button>
                        <button v-on:click="Twahana()" class="text-left">Ararya</button>
                        <button v-on:click="Twahana()" class="text-left">Segara Prada</button>

                    </div>
                    <div>
                        <h1 class="text-white font-bold text-xl">Tentang</h1>
                        <button v-on:click="Ttentang()">Saloka</button>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-xl">Events</h1>
                        <div class="grid grid-cols-1 gap-1">
                            <button class="text-left">
                                <a aria-label="saloka"
                                    href="https://salokapark.com/promosi/dirgahayu-indonesia---free-tiket-ke-saloka"
                                    target="_blank" rel="noreferrer">
                                    Free tiket
                                </a>
                            </button>
                            <button class="text-left">
                                <a aria-label="saloka" href="https://salokapark.com/promosi/what's-on-august"
                                    target="_blank" rel="noreferrer">
                                    Promo
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-white font-bold text-xl">Kontak</h1>
                    <div class="grid grid-rows-1 gap-1">
                        <Kontaknya icn="bxs:map" msg="Jl. Fatmawati No.154, Tuntang, Semarang, Jawa Tengah 50773"/>
                        <Kontaknya icn="eva:email-outline" msg="im.deniachmad@gmail.com"/>
                        <Kontaknya icn="ph:phone-bold" msg="+6285803619114"/>
                        <Kontaknya icn="ic:baseline-whatsapp" msg="+6285803619114"/>
                        <div class="text-right grid grid-cols-6 w-fit gap-4">
                            <Sosmednya urllink="https://www.instagram.com/salokapark/" label="saloka" icn="mdi:instagram"/>
                            <Sosmednya urllink="https://www.facebook.com/salokapark" label="saloka" icn="mingcute:facebook-line"/>
                            <Sosmednya urllink="https://twitter.com/salokapark" label="saloka" icn="ri:twitter-line"/>
                            <Sosmednya urllink="https://www.youtube.com/channel/UC-X0frGAtka_RZu9LUTBWUA" label="saloka" icn="gg:youtube"/>
                            <Sosmednya urllink="https://www.tiktok.com/@salokapark" label="saloka" icn="iconoir:tiktok"/>
                        </div>

                    </div>
                    <h1 class="pt-1">© 2023 Deni Achmad, All rights reserved.</h1>
                </div>

            </div>

        </div>
    </div>

    <!-- </div> -->
</template>

<style>
.changer img {
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    animation-name: imagefade;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-duration: 10s;
}

@media screen and (max-width: 639px) {
  .changer img{
    position:absolute;
    left: 0; 
    right: 0; 
    top:80px;
    margin-bottom: auto;
    margin-left: auto; 
    margin-right: auto;
    background-repeat: none;
    background-size: cover;
  }
}

.changer img:nth-of-type(1) {
    animation-delay: 7.5s;
}

.changer img:nth-of-type(2) {
    animation-delay: 5s;
}

.changer img:nth-of-type(3) {
    animation-delay: 2.5s;
}

.changer img:nth-of-type(4) {
    animation-delay: 0;
}


@keyframes imagefade {
    0% {
        opacity: 1;
    }

    17% {
        opacity: 1;
    }

    25% {
        opacity: 0;
    }

    92% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.link-underline {
    background-size: 0 3px;
    background-position: 0 100%;
    background-repeat: no-repeat;
    transition: background-size .5s ease-in-out;
}

.link-underline-black {
    background-image: linear-gradient(transparent, transparent), linear-gradient(#f39f19, #f39f19)
}

.link-underline:hover {
    background-size: 100% 3px;
    background-position: 0 100%;
}
</style>