<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fofo car</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/cart/assets/css/style.css">
 
</head>
<body>

<!-- topo do site -->

<div class="header">
    <p class="logo">fofo car</p>
    <div class="cart"><i class="fa fa-shopping-cart"></i>
        <p>0</p>
    </div>
</div>

<!-- fim do topo -->
<!-- corpo do site -->

<div class="container">


    <div class="linha-produto">
        <!-- produto 1 -->
        <form action="/cart/filtros/criar.php" method="post">

    <div class="corpoProduto">
        <div class="imgProduto">
            <img src="/cart/assets/img/produto-1.jpg" alt="" class="produtoMiniatura">
        </div>
    <div class="titulo">
        <p> Gol volkswagen</p>
        <h2>R$ 25.900</h2>
        <input type="hidden" value="" name="id_produto" >
        <input type="hidden" value="" name="valor" >
        <button type="submit" class="button" name="addcarrinho"> adicionar ao carrinho</button>
    </div>
    </div>
    </form>

     <!-- produto 2 -->

    <form action="/cart/filtros/criar.php" method="post">

    <div class="corpoProduto">
        <div class="imgProduto">
            <img src="/cart/assets/img/produto-2.jpg" alt="" class="produtoMiniatura">
        </div>
    <div class="titulo">
        <p> Gol volkswagen</p>
        <h2>R$ 25.900</h2>
        <input type="hidden" value="" name="id_produto" >
        <input type="hidden" value="" name="valor" >
        <button type="submit" class="button" name="addcarrinho"> adicionar ao carrinho</button>
    </div>
    </div>
    </form>


     <!-- produto 3 -->

    <form action="/cart/filtros/criar.php" method="post">

    <div class="corpoProduto">
        <div class="imgProduto">
            <img src="/cart/assets/img/produto-3.jpg" alt="" class="produtoMiniatura">
        </div>
    <div class="titulo">
        <p> Gol volkswagen</p>
        <h2>R$ 25.900</h2>
        <input type="hidden" value="" name="id_produto" >
        <input type="hidden" value="" name="valor" >
        <button type="submit" class="button" name="addcarrinho"> adicionar ao carrinho</button>
    </div>
    </div>
    </form>

    <!-- produto 4 -->

    <form action="/cart/filtros/criar.php" method="post">

    <div class="corpoProduto">
        <div class="imgProduto">
            <img src="/cart/assets/img/produto-4.jpg" alt="" class="produtoMiniatura">
        </div>
    <div class="titulo">
        <p> Gol volkswagen</p>
        <h2>R$ 25.900</h2>
        <input type="hidden" value="" name="id_produto" >
        <input type="hidden" value="" name="valor" >
        <button type="submit" class="button" name="addcarrinho"> adicionar ao carrinho</button>
    </div>
    </div>
    </form>


    </div>
    <!-- FIM DA LINHA DO PRODUTO -->
    <!-- BARRA LATERAL DO SITE -->

    <div class="barraLateral">
        <div class="topoCarrinho">
            <p> meu Carrinho</p>
        </div>

        <!-- INICIO PRODUTO CARRINHO -->

        <div class="item-carrinho">
            <div class="linha-da-imagem">
                <img src="/cart/assets/img/produto-1.jpg" alt="" class="img-carrinho">
            </div> 
            
            <p>Gol volkswagen</p>
            <h2>25.900</h2>
            <form action="/cart/filtros/excluir.php" method="post">
            <input type="hidden" name="id_produto" value="">
            <button type="submit" style="border:none; background:none;"><i class="fa fa-trash-o"></i></button>
            </form>

        </div>

        <!-- FIM PRODUTO CARRINHO -->
        <div class="item-carrinho-vazio">
          seu carrinho está vazio!!!  
        </div>
        <div class="rodape">
           <h3>Total</h3>
           <h2>R$25.900</h2> 
        </div>
    </div>

    <!--  FIM DA BARRA LATERAL DO SITE-->
</div>

<!-- fim do corpo -->
    
</body>
</html>