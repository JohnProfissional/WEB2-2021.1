<h1>Página de entradas</h1>

@foreach ($entradas as $entrada)
<ul>
    <li>Valor total da nota: {{$entrada->valortotaldanota}}</li>
    <li>Data da entrada: {{$entrada->dataentrada}}</li>
    
</ul>
@endforeach 