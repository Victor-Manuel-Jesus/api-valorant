<template>
    <!-- Modal -->
    <div class="modal fade" id="modalAgente" tabindex="-1" aria-labelledby="modalAgente" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{nombreAgente}} abilities</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center align-item-center">
                    <div class="card text-justify " style="width: 18rem;" v-for="habilidad in habilidades[0]" :key="habilidad.id">
                        <img :src="habilidad.displayIcon" class="card-img-top imagen-carrusel" alt="LOGO.PNG">
                        <div class="card-body">
                            <h5 class="card-title">{{habilidad.displayName}}</h5>
                            <p class="card-text">{{habilidad.description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loading show" v-if="load">
        <div class="spin"></div>
    </div>

    <div class="container" style="border:1px black solid;">
        <div class="row mt-2 mb-2">
            <h4 class="panel-title" >AGENTES</h4>
            <div class="col-3 col-md-4 col-sm-12 col-xl-3 mb-3" v-for="item in items[0]" :key="item.id" v-show = "item.isPlayableCharacter">
                <h4 class="card-title">{{item.displayName}}</h4>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img :src="item.bustPortrait" class="card-img-top" :alt="item.displayName" style=" background-color:black;height: 400px;">
                        </div>
                        <div class="flip-card-back">
                            <p>{{item.description }}</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="card mb-3" style="max-width: 540px;" v-if="item.isPlayableCharacter" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img :src="item.bustPortrait" class="card-img-top" :alt="item.displayName">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{item.displayName}}</h5>
                                <p class="card-text">{{item.description }}</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAgente" @click="modalData(item.displayName, item.abilities)">
                                    <i class="ri-arrow-up-circle-fill"></i><span> Habilidades</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                items :[],
                isActive:true,
                nombreAgente:"",
                habilidades :[],
                load:true
            }
        },
        methods: {
            modificarData(){
                let self = this;
                $.ajax({
                    url:'/agente/data',
                    type:'get',
                    success:  function (data) {
                        console.log(data[0]['data']);
                        self.items.push(data[0]['data']);
                    }
                });
            },
            modalData(nombre,dataHabilidad){
                this.nombreAgente = nombre;
                this.habilidades.push(dataHabilidad);
            },
        },
        beforeMount() {
                this.modificarData();
        },
        mounted() {
            let self = this;
            setTimeout(function () {
                    let loading = document.querySelector('.loading');
                    loading.classList.remove('show');
                    self.load = false;
                    }, 3000);
        }
    }
</script>
