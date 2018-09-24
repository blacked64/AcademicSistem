<template>
<div class="contenido-home">
        <ul class="list-inline">
             <li v-if="$auth.check()" class="pull-right">
                    <button @click="$auth.logout()" type="submit">
                        Logout
                    </button>
             </li>
        </ul>
        <button>
            <router-link tag="a" :to="{path: 'alumno'}">
                Ir hacia Alumnos
            </router-link>
        </button>
        <button>
            <router-link tag="a" :to="{path: 'profesor'}">
                Ir hacia Profesor
            </router-link>
        </button>
</div>
</template>
<script>
export default {
    data(){
        return{
            user: this.$auth.user().id,
            roles: []
        }
    },
    mounted(){
        axios.get('http://calificaciones.com/usuarios').then(
            (respuesta)=>{
            this.roles = respuesta.data;
            }
        );
    },
    methods: {
        logout(){
            this.$auth.logout();
        }
    }
}
</script>

