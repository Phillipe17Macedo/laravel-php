<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Index</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><a href="{{route('products.edit', $product->id)}}">Editar</a></td>
                    <td><a href="{{route('products.show', $product->id)}}">Mostrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
<a href="{{route('products.create')}}">Cadastrar</a>
</html>