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
			<template v-for="item in items_provider">
				<item
				:product="id"
				:id="item.id"
				:name="item.name"
				:clave="item.clave"
				:price="item.price"
				></item>
			</template>
		</tbody>
	</table>
</template>
<script>
	import ITEM from './itemProvider.vue';
	export default{
		props:['providers'],
		components:{
			'item':ITEM
		},
		data(){
			return{
				id:0,
				items:[]
			}
		},
		computed:{
			items_provider(){
				return this.items
			},
			provider_list(){
				return this.providers;
			}
		},
		mounted(){
			eventBus.$on('providers', function(prov,product){
				this.items	= prov,
				this.id		= product
			}.bind(this));
			eventBus.$on('add_provider', function(){
				this.items.push({
					'id' : 0,
					'name':'',
					'clave':'',
					'price':0
				});
			}.bind(this));
		}
	}
</script>
<style></style>