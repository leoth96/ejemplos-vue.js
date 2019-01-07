<!DOCTYPE html>
<html>
<head>
	<title>Pruebas vue v-show</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div id="app" class="container">
		<div class="row">
			<div class="col-md-12">
			<h1>v-show</h1>
			</div>
			<div class="col-md-5">
			<input type="text" v-model="email" class="form-control">
			</div>
			<div class="col-md-1">
			<input type="submit" v-show="email" class="btn btn-primary">
			</div>
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script>
	var usr ='https://jsonplaceholder.typicode.com/users';
const app = new Vue({
	el:'#app',
	data:{
		email:''
	}
	
});
</script>
</body>
</html>