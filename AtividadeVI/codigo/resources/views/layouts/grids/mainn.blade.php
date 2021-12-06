<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/stilo.css');}}"/>
    <title>CSS Grid e Flexbox</title>
</head>
<body>
    
    <header class="header">
        <a href="/">Início</a>

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

    <section class="imagesGrid1">
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
        <div>
            <img src="./img/imagem5.jpeg">
            <p>Endereços</p>
        </div>
        <div>
            <img src="./img/imagem3.jpeg">
            <p>Produtos</p>
        </div>
        <div>
            <img src="./img/imagem4.jpeg">
            <p>Itens Entrada</p>
        </div>
        <div>
            <img src="./img/imagem6.jpeg">
            <p>Itens Vendas</p>
        </div>
        <div class="anuncio">
            <img src="./img/imagem7.jpeg">
            <p>Anúncio</p>
        </div>
    </section>

    <h1>Section Grid 2</h1>

    <section class="grid2">
        <div class="apresentacaoinicial">
            <img src="./img/imagem12.jpeg">
            <h2>Como fazer o controle de estoque?</h2>
        </div>
        <div class="sidebar">

        <div>
            <img src="./img/imagem7.jpeg">
            <p>Produtos</p>
        </div>
        <div>
            <img src="./img/imagem5.jpeg">
            <p>Entradas</p>
        </div>
        <div>
            <img src="./img/imagem3.jpeg">
            <p>Fornecedores</p>
        </div>
        <div>
            <img src="./img/imagem4.jpeg">
            <p>Clientes</p>
        </div>
        </div>
    </section>


    <h1>Section Grid 3</h1>

    <section class="layoutgrid3">
    <div class="grid3-item">
        <img src="./img/imagem7.jpeg">
        <p>Produtos</p>
    </div>
    <div class="grid3-item">
        <img src="./img/imagem5.jpeg">
        <p>Clientes</p>
    </div>
    <div class="grid3-item">
        <img src="./img/imagem3.jpeg">
        <p>Fornecedores</p>
    </div>
    </section>

</body>
</html>