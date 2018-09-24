<template>
<transition name="modal">  
  <div id="modal-template"  v-if="this.$eventHub.Modal" @keyup.esc="showedModal(ModalRegister)">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">
        <form @submit.prevent="register">
          <div class="row modal-header">
            <div class="col-md-8">
              <h3>Registrarse</h3>
            </div>
            <div class="col-md-4">              
              <button class="modal-default-button button" @click.prevent="showedModal(ModalRegister)">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>

          <div class="row modal-body">  
            <div class="row form-group register">              
              <label for="email">
                  <h5>Nombre</h5>
                  <input type="text" v-model="name" class="form-control">
              </label>                    
             </div>
             <div class="row form-group register">                 
              <label for="email">
                  <h5>Correo Electrónico</h5>
                  <input type="email" v-model="email" class="form-control">
              </label>          
             </div>
             <div class="row form-group register">                 
              <label for="password">
                  <h5>Contraseña</h5>
                  <input type="password" v-model="password" class="form-control">
              </label>
             </div>          
          </div>

          <div class="row modal-footer">
              <button type="submit" class="btn btn-success btn-sm">
                <h5>Registrarse</h5>
              </button>
          </div>
        </form>
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
            name: '',
            email: '',
            password: '',
            ModalRegister: false
        }
    },
    methods: {
        register(){
            this.$auth.register({
                params: {
                    name: this.name,
                    email: this.email,
                    password: this.password
                },
                success: function() {},
                error: function() {},
                redirect: '/home'
            });
        },
        showedModal(){
             this.$eventHub.$emit('show-modal', this.ModalRegister);
             this.$router.push('/');
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

.register {
    margin: 3px;
}
.register input{
    width: 130px;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 600px;
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
