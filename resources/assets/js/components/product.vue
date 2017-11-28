<template>
	<table>
		<thead>
			<tr>
				<th>Editar</th>
				<th>Nombre</th>
				<th>Clave</th>
				<th>Tipo</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<template v-for="item in items">
				<item
					:id="item.id"
					:clave="item.key"
					:name="item.name"
					:type="item.type"
				></item>
			</template>
		</tbody>
	</table>
</template>
<script>
import ELEMENT from './itemProduct.vue';
	export default{
		components:{'item':ELEMENT},
		props:['items'],
	}
</script>
<style></style>