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
                                sFoto:"",
                                inputs:true,
                                ids:"",
                        },
                        name: "",
                        file: "",
                        arrImage: [],
                        ids:"",
                };
        },
        methods:{
                // cek(){
                //         console.log(this.arrImage);
                // },
                loadData() {
                this.arrImage = [];
                axios.get(this.getApiServer + "get/walpaperImg").then((res) => {
                        this.arrImage = res.data.result;
                        // console.log(this.arrImage[0].srcs);
                }).catch;
                },
                onFileChange(e) {
                        this.file = e.target.files[0];
                        this.form.sFoto = e.target.files[0];
                        console.log(this.form.sFoto.name);
                },
                SimpanImage(){
                        if(this.form.sFoto!=""){
                                // console.log(this.form.sFoto.name);
                                // console.log(this.form.sFoto);
                                // e.preventDefault();
                                let currentObj = this;
                                this.form.inputs=false;
                                const config = {
                                headers: { "content-type": "multipart/form-data" },
                                };
                                let formData = new FormData();
                                formData.append("file", this.file);
                                // formData.append("nama", this.form.getkode);
                                formData.append("nama_file", this.form.sFoto.name);

                                axios
                                .post(this.getApiServer + "tentang/uploadimage/", formData, config)
                                .then((response) => {
                                        // currentObj.success = response.data.success;
                                        alert(response.data.message);
                                        this.form.inputs=true;
                                        this.loadData();
                                        // console.log(response);
                                })
                                .catch(function (error) {
                                        console.log(error);
                                });
                        }
                },
                // simpanUpdate() {
                //         axios
                //                 .put(
                //                 this.getApiServer + "updatewalpaper/" + this.kodeCustomer,
                //                 this.form
                //                 )
                //                 .then((response) => {
                //                 if (response.data.message == "Success") {
                //                 console.log("berhasil di-update");
                //                 this.isSuccess = true;
                //                 this.kembali();
                //                 } else {
                //                 this.isFailed = true;
                //                 console.log("gagal di-update");
                //                 }
                //                 })
                //                 .catch((err) => {
                //                 this.isFailed = true;
                //                 //   console.log(this.form);
                //                 console.log(err);
                //                 console.log("gagal di-update");
                //                 });
                // },
                deleteImg(index){
                        // console.log(this.arrImage[index].id)
                        this.ids=this.arrImage[index].id;
                        console.log(this.ids)
                        axios.get(this.getApiServer + "deletewalpaper/" + this.ids,)
                        .then(res => { 
                                console.log(res.data.message);
                                this.loadData();

                        })
                        .catch(err => { 
                                console.error(err) 
                        })
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
                        <h1 class="rounded-lg bg-zinc-700 w-fit pr-2 pl-2 pt-1 pb-1 font-bold text-base text-zinc-300">Dashboard
                        </h1>
                </div>
        </div>
        <div class="pl-4 sm:pl-44 pt-2 pr-4 pb-4 text-justify">
                <div class="grid grid-cols-1 gap-2">
                        <div class="border-2 border-zinc-700 bg-zinc-800 rounded-lg p-2 ">
                                <div class="flow-root w-full">
                                        <h1 class="p-2 float-left text-base font-semibold">Tambah walpaper dashboard : </h1>
                                        <div class="float-right gird grid-cols-2 p-2">
                                                <input type="file" class="p-2 text-base" accept="image/jpeg" v-on:change="onFileChange"/>
                                                <button v-if="form.inputs" class="bg-gray-400 rounded-md p-2 text-black w-full lg:w-fit" v-on:click="SimpanImage">Simpan</button>
                                                <button v-if="!form.inputs" class="bg-gray-400 rounded-md p-2 text-black w-full lg:w-fit" disabled>Simpan</button>
                                        </div>

                                </div>
                        </div>
                        <div class="border-2 border-zinc-700 bg-zinc-800 rounded-lg p-2 ">
                                <h1 class="p-2 text-base font-bold">Walpaper saloka</h1>
                                <hr class="border-zinc-400">
                                <div v-for="(item,index) in arrImage" :key="arrImage" class="grid grid-cols-[auto_minmax(auto,_auto)_auto] gap-2 pl-4 pr-4">
                                        <img :src="item.srcs"  class="max-w-[150px] lg:max-w-[450px] p-4" alt="">
                                        <!-- <button  v-on:click="cek"
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Update</button> -->
                                        <button v-on:click="deleteImg(index)"
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Delete</button>

                                                <!-- <img src="../../assets/walpaper5.jpg" class="max-w-[150px] lg:max-w-[450px] p-4" alt="">
                                        <button
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Update</button>
                                        <button
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Delete</button>

                                                <img src="../../assets/walpaper3.jpg" class="max-w-[150px] lg:max-w-[450px] p-4" alt="">
                                        <button
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Update</button>
                                        <button
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Delete</button>

                                                <img src="../../assets/walpaper7.jpg" class="max-w-[150px] lg:max-w-[450px] p-4" alt="">
                                        <button
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Update</button>
                                        <button
                                                class="mt-[auto] mb-[auto] border-zinc-400 border p-2 rounded-lg">Delete</button> -->
                                </div>
                                <!-- <h1 class="p-2 text-base font-bold">*NOTE : fitur disini belum selesai mengingat waktu hanya 1 minggu </h1> -->
                        </div>



                </div>
</div></template>