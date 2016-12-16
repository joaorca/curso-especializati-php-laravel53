<h1>Listagem dos produtos</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    @forelse($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
        </tr>
    @empty
        <tr>
            <td colspan="100%">Nenhum registro.</td>
        </tr>
    @endforelse
</table>