<template>
<transition name="fade">
	<div class="container content-contact col-12">
		<form>
			<div class="row col-12">
				<div class="col-6">
					<input type="text" name="name" v-model="name" placeholder="Nombre" class="form-control">
				</div>
				<div class="col-6">
					<input type="email" name="email" v-model="email" placeholder="Correo Electrónico" class="form-control">
				</div>
			</div>
			<div class="row col-12">
				<div class="col-12">
					<textarea class="form-control" rows="9" cols="120" v-model="comment" placeholder="Comment Here...">
					</textarea>
				</div>
			</div>
		</form>
	</div>
</transition>
</template>
<script>
	export default {
		data(){
			return {
				email: '',
				name: '',
				comment: ''
			}
		}
	}
</script>
<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>