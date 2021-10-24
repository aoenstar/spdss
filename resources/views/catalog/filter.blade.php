<html>
<head>
	<title>Catalog</title>
</head>

<body>
	<div>
		<table>
			<tr>
				<th>Company</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
			@foreach ($items as $item)
				<tr>
					<td>{{$item->company}}</td> 
					<td>{{$item->name}}</td> 
					<td>{{$item->description}}</td>
					<td>${{$item->price}}</td>
				</tr>
			
			@endforeach
					
		</table>
	</div>
</body>

</html>