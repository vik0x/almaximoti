<template>
	<tr v-if="!removed">
		<template v-if="!editing">
			<td><button class="btn btn-default" @click="edit"><i class="glyphicon glyphicon-pencil"></i></button></td>
			<td>{{name_}}</td>
			<td>{{clave_}}</td>
			<td>{{price_}}</td>
			<td><button class="btn btn-default" @click="destroy"><i class="glyphicon glyphicon-remove"></i></button></td>
		</template>
		<template v-else>
			<td><button class="btn btn-success" @click="save"><i class="glyphicon glyphicon-check"></i></button></td>
			<td>
				<select class="form-control" v-model="new_name">
					<option v-for="item in this.$parent.provider_list" :value="item.id">{{item.name}}</option>
				</select>
			</td>
			<td><input type="text" class="form-control" v-model="new_clave"></td>
			<td><input type="text" class="form-control" v-model="new_price"></td>
			<td><button class="btn btn-danger" @click="cancel">Cancelar</i></button></td>
		</template>
	</tr>
</template>
<script>
	export default{
		props:['product','id','name','clave','price'],
		data(){
			return{
				id_:0,
				name_:'',
				removed:false,
				editing:false,
				new_name:this.id,
				new_clave:this.clave,
				new_price:this.price
			}
		},
		created(){
			this.id_ = this.id;
			this.name_ = this.name;
			this.clave_ = this.clave;
			this.price_ = this.price;
		},
		methods:{
			edit(){
				this.editing = true;
			},
			cancel(){
				this.editing = false;
			},
			save(){
				axios.post('/producto/proveedor/actualizar',{
					'product_id'		: this.product,
					'provider_id'		: this.new_name,
					'provider_last_id'	: this.id_,
					'clave'				: this.new_clave,
					'price'				: this.new_price,
					'_method'			: 'PATCH'

				})
				.then(function(response){
					if(response.status == 200){
						let name_val = this.$parent.provider_list.filter(function(x){
							if(x.id == this.new_name){
								return x.name
							}
						}.bind(this));
						this.id_		= this.new_name;
						this.clave_		= this.new_clave;
						this.price_		= this.new_price;
						this.name_		= name_val[0].name; 
						this.editing	= false;
					}
				}.bind(this))
				.catch(function(error){});
			},
			destroy(){
				if( confirm('¿Eliminar?') ){
					axios.post('producto/proveedor/eliminar',{
						'product_id'	: this.product,
						'provider_id'	: this.id_,
						'_method'		: 'delete'
					})
					.then( function(response){
						if(response.status == 200){
							this.removed = true;
						}
					}.bind(this));
				}
			}

		}
	}
</script>