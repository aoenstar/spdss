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
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $id = 1; ?>
			@foreach ($items as $item)
			<tr>
				<td>{{$item->company}}</td>
				<td>{{$item->name}}</td>
				<td>{{$item->description}}</td>
				<td>${{$item->price}}</td>
				<td><a href="/catalog/<?php echo $id; ?>/edit">Edit</a></td>
				<td><a href="/catalog/<?php echo $id; ?>">Details</a></td>
			</tr>
			<?php $id++; ?>
			@endforeach
					
		</table>
	</div>
</body>

</html>