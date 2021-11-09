<h1>Página de entradas</h1>

@foreach ($entradas as $entrada)
<ul>
    <li>Valor total da nota: {{$entrada->valortotaldanota}}</li>
    <li>Data da entrada: {{$entrada->dataentrada}}</li>
    <li>ID fornecedor: {{$entrada->fornecedor_id}}</li>
    <li> <a href="edit/{{$entrada->id}}">Editar entrada</a></li>

    <form action="../entrada/{{$entrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
    
</ul>
@endforeach 