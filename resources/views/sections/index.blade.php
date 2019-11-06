<html>
	<body>
	<div id='app'>
		Select Sections:
		<select>
		@foreach($sections as $section)
			<option value="{{ $section->id }}">
				{{ $section->name }}
			</option>
		@endforeach
		</select><br>
		Select Students:
		<select>
		@foreach($sections as $student)
			<option value="{{ $section->id }}">
				{{ $section->name }}
			</option>
		@endforeach
		</select>
	</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script>
		new Vue({
			el: '#app',
		   data:{

		   }
		})
	</script>
	</body
</html>