<h1>Tabela</h1>

<ul>
    <li>Nome</li>
</ul>
<ul>
    <li>Descrição</li>
</ul>
<ul>
    <li>Valor</li>
</ul>
<ul>
    <li>Quantidade</li>
</ul>

@foreach ($products as $product)
{{$product->name}}
@endforeach