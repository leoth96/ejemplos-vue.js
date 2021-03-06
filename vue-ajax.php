<!DOCTYPE html>
<html>
<head>
	<title>Pruebas vue</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div id="app" class="container">
	<div class="row">
		<div class="col-sm-4">
			<h1>Lista vue.js - ajax</h1>
			<ul class="list-group">
				<li v-for="item in lists" class="list-group-item">
					{{item.name.first}} {{item.name.last}}
				</li>
			</ul>
		</div>
		<div class="col-sm-8">
			<h1>Json</h1>
			<pre>
				{{ $data | json}}
			</pre>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
<script>
var usr ='https://randomuser.me/api/?results=5';
const app = new Vue({
	el:'#app',
	created:function(){
		this.getusers();
	},
	data:{
		lists:[]
	},
	methods:{
		getusers:function(){
			this.$http.get(usr).then(function(response){
				this.lists = response.data.results;
			});
		}
	}
});
</script>
</body>
</html>