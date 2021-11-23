<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/stilo.css');}}"/>
    <title>Sistema de vendas</title>
</head>
<body>
    
    <header class="header">
        <a href="/">Início</a>
        <h3>Sistema de vendas</h3>

        <nav>

            <ul class="menu">
                <li><a href="/">Sobre</a></li>
                <li><a href="{{route('produtos.indexproduto')}}">Produtos</a></li>
                <li><a href="{{route('fornecedores.indexs')}}">Fornecedores</a></li>
                <li><a href="{{route('entrada.indexentrada')}}">Entradas</a></li>
                <li><a href="{{route('itensentrada.indexitensentrada')}}">Itens Entrada</a></li>
                <li><a href="{{route('venda.indexvenda')}}">Vendas</a></li>
                <li><a href="{{route('itensvenda.indexitensvenda')}}">Itens Venda</a></li>
                <li><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li><a href="{{route('endereco.index')}}">Endereço</a></li>
            </ul>
        </nav>
    </header>

    <h1>Acessar Páginas</h1>

    <section class="imagesflex">
        <div>
            <img src="./img/imagem5.jpeg">
            <p>Produtos</p>
        </div>
        <div>
            <img src="./img/imagem3.jpeg">
            <p>Fornecedores</p>
        </div>
        <div>
            <img src="./img/imagem4.jpeg">
            <p>Entradas</p>
        </div>
        <div>
            <img src="./img/imagem6.jpeg">
            <p>Vendas</p>
        </div>
        <div>
            <img src="./img/imagem7.jpeg">
            <p>Clientes</p>
        </div>
    </section>
</body>
</html>