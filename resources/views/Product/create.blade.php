<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282A36;
        }

        .container {
            background-color: #F2E49B;
            width: 1000px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 50px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create Product Blade</h1>
        @if ($errors->any())
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        <form action="{{route('products.store')}}" method="post">
            @csrf()
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" >
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea id="description" name="description" rows="4" ></textarea>
            </div>
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="number" id="price" name="price" step="0.01" >
            </div>
            <div class="form-group">
                <label for="quantity">Quantidade:</label>
                <input type="number" id="quantity" name="quantity">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </div>
</body>

</html>