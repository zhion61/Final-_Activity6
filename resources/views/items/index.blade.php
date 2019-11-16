@extends('layouts.master')
@section('content')

<div class="container" id ='app'>
	<div class="row">
		<div class="col-sm-4">
			<h4>Inventory System:</h4>
			<button>Add New Item</button>
			<table class="table-table-striped">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Category</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<body>
					<tr>
						<th></th>
					</tr>
				</body>
				
			</table>
			
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
	var vm = new Vue({
       el:'app',
       data{


       },
       methods{

       }

	});

</script>


@endsection