<html>
	<head>
		<title>uhjiko</title>
	</head>
	<body>
		<div id="app">
			<input v-model="tata" type="text">
			<h3 v-text="tata"></h3>
			
			<list-colid :popa="tata"></list-colid>
		</div>
		
		<script src="js/main.js"></script>
	</body>
</html>