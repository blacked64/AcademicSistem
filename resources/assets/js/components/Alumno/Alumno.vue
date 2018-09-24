<template>
	<div class="contenido-alumno">
		<div class="show-form" v-if="!alumnos.length">			
			<form @submit.prevent="create">
				<input type="text" v-model="alumnoCreate.nombre" placeholder="Nombre" class="form-control">
				<input type="text" v-model="alumnoCreate.apellidos" placeholder="Apellidos" class="form-control">
				<input type="text" v-model="alumnoCreate.telefono" placeholder="Telefono" class="form-control">
				<input type="text" v-model="alumnoCreate.direccion" placeholder="Direccion" class="form-control">
				<button type="submit" class="btn btn-primary">
					Modificar Datos
				</button>
			</form>
		</div>
		<div class="create-alumn" v-else>
			<form @submit.prevent="update" v-for="alumno in alumnos.alumno">
				<input type="text" v-model="alumno.nombre" placeholder="Nombre" class="form-control">
				<input type="text" v-model="alumno.apellidos" placeholder="Apellidos" class="form-control">
				<input type="text" v-model="alumno.telefono" placeholder="Telefono" class="form-control">
				<input type="text" v-model="alumno.direccion" placeholder="Direccion" class="form-control">
				<button type="submit" class="btn btn-primary">
					Modificar Datos
				</button>
			</form>
		</div>
	</div>
</template>
<script>
	export default {
		data(){
			return {
				alumnos: [],
				alumnoCreate: {
						nombre: '',
						apellidos: '',
						telefono: 0,
						direccion: ''
				}
			}
		},
		mounted(){
			axios.get('http://calificaciones.com/api/alumnos').then(
				(respuesta)=>{
					this.alumnos = respuesta.data;
				}
			);
		},
		methods: {
			update(){
				axios.put('http://calificaciones.com/api/alumnos/'+this.alumnos.alumno[0].id,
				{
					nombre: this.alumnos.alumno[0].nombre,
					apellidos: this.alumnos.alumno[0].apellidos,
					telefono: this.alumnos.alumno[0].telefono,
					direccion: this.alumnos.alumno[0].direccion
				});
			},
			create(){
				axios.post('http://calificaciones.com/api/alumnos', {
					nombre: this.alumnoCreate.nombre,
					apellidos: this.alumnoCreate.apellidos,
					telefono: this.alumnoCreate.telefono,
					direccion: this.alumnoCreate.direccion
				});
			}
		},
		watch: {
			verDatosAlumno(){
				axios.get('http://calificaciones.com/api/alumnos').then(
					(respuesta)=>{
						console.log(respuesta.data);
						this.alumnos = respuesta.data;
					}
				);
			}
		}
	}
</script>