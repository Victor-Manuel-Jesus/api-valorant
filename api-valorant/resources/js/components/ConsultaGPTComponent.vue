<template>
    <div>
        <button class="btn btn-warning">Respuestas</button>
        <div v-if="messages">
            {{messages}}
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                messages:[],
        }
    },methods:{
        respuestasGpt() {
        let self = this;
        $.ajax({
            url:'/Home/Consulta_respuesta',
            type:'get',
            success:  function (data) {
                console.log(data[0]['data']);
            }
        });
        }
    },
    }
</script>
