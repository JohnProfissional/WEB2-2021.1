<h1>Página de consulta de fornecedores</h1>


@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nome}}</li>
    <li>Endereco do fornecedor: {{$fornecedor->endereco}}</li>
    <li>Email do fornecedor: {{$fornecedor->email}}</li>
</ul>
@endforeach 