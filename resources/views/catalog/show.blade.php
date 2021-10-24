<html>
<head>
	<title>Catalog</title>
</head>

<body>
	<div>
		<h2>Catalog Item:  {{ $item->name}}: ${{ $item->price }}</h2>
		<p>{{ $item->description }}</p>
	</div>
</body>

</html>