<template>
<transition name="modal">  
  <div id="modal-template" v-if="this.$eventHub.Modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="row modal-header">
            <div class="col-md-8">
              <h3>Iniciar Sesión</h3>
            </div>
            <div class="col-md-4">              
              <button class="modal-default-button button" @click.prevent="showedModal(ModalLogin)">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>

          <div class="row modal-body">
            <form @submit.prevent="logear" class="form-inline" @keyup.esc="showedModal(ModalLogin)"> 
              <div class="form-group">              
                <label for="email">
                    <span class="col-4">Correo Electrónico</span>
                    <span class="col-8"><input type="email" v-model="email" class="form-control"></span>
                </label>
              </div>
              <div class="form-group">              
                <label for="password">
                    <span class="col-4">Contraseña</span>
                    <span class="col-8"><input type="password" v-model="password" class="form-control"></span>
                </label>
              </div>
              <div class="form-group">                
                <button type="submit" class="btn btn-primary btn-md">
                  Entrar
                </button>
              </div>
            </form>
          </div>
          <div class="row modal-footer">
                <router-link tag="a" to="/register">
                  <h3>Registrarse</h3>
                </router-link>
          </div>
      </div>
    </div>
  </div>
</div>
</transition>
</template>
<script>
export default {
    data(){
        return {
            email: '',
            password: '',
            ModalLogin: false,
            route: this.$eventHub.beforeRoute
        }
    },
    methods: {
        logear(){
                this.$auth.login({
                    params: {
                        email: this.email,
                        password: this.password
                    },
                    success: function () {},
                    error: function (resp) {
                        console.log(resp.response.data.msg)
                    },
                    rememberMe: true,
                    redirect: '/home',
                    fetchUser: true
                });
        },
        showedModal(){
             this.$eventHub.$emit('show-modal', this.ModalLogin);
             this.$router.back();
        }
    }
}
</script>
<style>

.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 560px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

</style>


