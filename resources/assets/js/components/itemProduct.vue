<template>
	<tr>
		<td><button class="btn btn-default" @click="edit"><i class="glyphicon glyphicon-pencil"></i></button></td>
		<td>{{name}}</td>
		<td>{{clave}}</td>
		<td>{{type}}</td>
		<td><button class="btn btn-default" @click="destroy"><i class="glyphicon glyphicon-remove"></i></button></td>
	</tr>
</template>
<script>
	export default{
		props:['name','clave','type','id'],
		methods:{
			edit(){
				axios.post('/producto/proveedor/',{'id':this.id})
					.then(function(response){
						if(response.status == 200)
							eventBus.$emit('providers',response.data);
							$('#myModal').modal('show');
					}.bind(this))
					.catch(function(error){})
				this.$root.detail.clave		= this.clave;
				this.$root.detail.nombre	= this.name;
				this.$root.detail.tipo		= this.type;
				this.$root.detail.id		= this.id;
			},
			destroy(){
				$('#myModal').modal('show');
			}

		}
	}
</script>