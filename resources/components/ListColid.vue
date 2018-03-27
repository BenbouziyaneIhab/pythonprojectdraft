<template>
	<div>
		<h1 v-text="popa"></h1>
	</div>
</template>
<script>
	export default{
		props:{
			popa:{
				type : String
			}
		},

	}
</script>