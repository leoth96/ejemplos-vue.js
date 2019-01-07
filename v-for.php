<!DOCTYPE html>
<html>
<head>
	<title>prueba 2 v-for</title>
</head>
<body>
<div id="main">
	<ul class="list-group">
		<li v-for="item in gente">{{item}}</li>
	</ul>
	<input type="text" v-model="name" v-on:Keyup.enter="add">
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script>
	const app = new Vue({
		el:'#main',
		data:{
			gente:['yo','tu','el'],
		},
		name:'',
		methods:{
			add:function(){
				this.gente.push(this.name);
				this.name = '';
			}
		}
	})
</script>
</body>
</html>