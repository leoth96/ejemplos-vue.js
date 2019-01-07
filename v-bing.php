<!DOCTYPE html>
<html>
<head>
	<title>v-bing</title>
</head>
<body>
<div id="main">
	<input type="text" v-model="info">
	<p v-bind:title="info">texto.. {{info}}</p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script>
	const main = new Vue({
		el:'#main',
		data:{
			info:''
		}

	});
</script>
</body>
</html>