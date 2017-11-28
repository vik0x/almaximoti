<template>
	<table>
		<thead>
			<tr>
				<th>Editar</th>
				<th>Proveedor</th>
				<th>Clave</th>
				<th>Costo</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="item in items_provider">
				<td><button class="btn btn-default" @click:prevent="edit(item.id)"><i class="glyphicon glyphicon-pencil"></i></button></td>
				<td>{{item.name}}</td>
				<td>{{item.clave}}</td>
				<td>{{item.price}}</td>
				<td><button class="btn btn-default" @click:prevent="destroy(item.id)"><i class="glyphicon glyphicon-remove"></i></button></td>
			</tr>
		</tbody>
	</table>
</template>
<script>
	export default{
		data(){
			return{
				items:[]
			}
		},
		computed:{
			items_provider(){
				return this.items
			}
		},
		mounted(){
			eventBus.$on('providers', function(prov){
				this.items = prov
			}.bind(this));
		}
	}
</script>
<style></style>