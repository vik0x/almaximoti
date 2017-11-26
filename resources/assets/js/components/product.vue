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
			<tr>
				<td><button class="btn btn-default" @click:prevent="edit(item.id)"><i class="glyphicon glyphicon-pencil"></i></button></td>
				<td>Uno</td>
				<td>Dos</td>
				<td>Tres</td>
				<td><button class="btn btn-default" @click:prevent="destroy(item.id)"><i class="glyphicon glyphicon-remove"></i></button></td>
			</tr>
		</tbody>
	</table>
</template>
<script></script>
<style></style>