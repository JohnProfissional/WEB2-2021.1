<h1>Página de fornecedores</h1>


@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nomefornecedor}}</li>
    <li>Endereco do fornecedor: {{$fornecedor->endereco}}</li>
    <li>Email do fornecedor: {{$fornecedor->email}}</li>
    <li> <a href="edit/{{$fornecedor->id}}">Editar fornecedor</a></li>

    <form action="../fornecedores/{{$fornecedor->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 

