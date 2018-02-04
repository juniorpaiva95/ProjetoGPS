<h1>Carrinho</h1>

<ul>
@foreach($items as $item)
    <li>Nome:
        {{ $item->name }}
    </li>

    <li>Preco: {{ $item->price }}</li>
    <li>Quantidade: {{ $item->qty }}</li>
    <li>Total: {{ $item->subtotal }}</li>
    <li>
        <form action="{{ route('carrinho.delete', ['rowId' => $item->rowId]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
            <button type="submit">Deletar</button>
        </form>
    </li>
    <br>
@endforeach
    {{$total}}
</ul>