<script setup>
import { Icon } from '@iconify/vue'; 
</script>

<script>
import axios from "axios";
export default {
        components: {
                Icon,
        },
        data(){
                return{
                    getApiServer: 'http://localhost:8000/api/',
                        // getApiServer: 'https://deniachmad.online/index.php/api/',
                        form:{  
                            tentang:"",
                            tentang_data:"",
                            sFoto2: "",
                        },
                        file2: "",
                        name:"",
                }
        },
        methods:{
                
                loadData(){
                    axios.get(this.getApiServer + "get/tentang_saloka").then((res) => {
                        // console.log(res.data.result[0].detail);
                        this.form.tentang_data = res.data.result[0].detail;
                    }).catch;
                },
                update_tentang(){
                    console.log(this.form.tentang);
                    axios
                        .post(this.getApiServer + "update/tentang_saloka", this.form)
                        .then((res) => {
                        if (res.data.success == true) {
                            alert(res.data.message);
                            // console.log(res.data);
                            this.form.tentang="";
                            this.loadData();
                        } else {
                            // console.log(res.data);
                            alert(res.data.message);
                        }
                        });
                }
        },
        mounted() {
            this.loadData();
        },
};
</script>



<template>
        <div class="pl-4 sm:pl-44 pt-20 pr-4">
                <div class="grid grid-cols-[40px_minmax(auto,auto)]">
                        <Icon icon="material-symbols:monitor-outline" class="w-8 h-8 bg-zinc-700 rounded-lg p-1" />
                        <h1 class="rounded-lg bg-zinc-700 w-fit pr-2 pl-2 pt-1 pb-1 font-bold text-base text-zinc-300">Tentang
                        </h1>
                </div>
        </div>
        <div class="pl-4 sm:pl-44 pt-2 pr-4 pb-4 text-justify">
                <div class="grid grid-cols-1 gap-2">
                        <div class="border-2 border-zinc-700 bg-zinc-800 rounded-lg p-2 ">
                                <div class="grid grid-rows-1 gap-2 w-full">
                                        <h1 class="p-2 float-left text-base font-semibold">Update konteks tentang saloka : </h1>
                                        <input :maxlength="300" v-model="form.tentang" type="text" class="p-2 float-right text-base font-bold w-full bg-gray-500 rounded-xl" />
                                        <button class="border-zinc-400 border p-2 rounded-lg" v-on:click="update_tentang()">Update</button>
                                        
                                </div>
                        </div>
                        <div class="border-2 border-zinc-700 bg-zinc-800 rounded-lg p-2 ">
                                <h1 class="p-2 text-base font-bold">Konteks tentang saloka</h1>
                                <hr class="pb-4 border-zinc-400">
                                <div class="grid grid-cols-1 gap-2 pl-4 pr-4">
                                        <h1 class="border rounded-lg w-full] p-4">
                                            {{form.tentang_data}}
                                        </h1>
                                        
                                </div>
                                <!-- <h1 class="p-2 text-base font-bold">*NOTE : fitur disini belum selesai mengingat waktu hanya 1 minggu </h1> -->
                        </div>



                </div>
</div></template>