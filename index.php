
<?php
include "database/conexao.php";
include "database/consultas.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>produtos</title>
</head>
<body>

<div class="container mt-5">
    <ul class="nav">
        <li class="nav-item">
            <a href="/carrinho" class="nav-link">Produtos</a>
            <hr>
        </li>

        <li class="nav-item">
            <a href="carrinho.php" class="nav-link">Carrinho</a>
            <hr>
        </li>

    </ul>

    <h1 class="display-1">Produtos</h1>
    <hr>
    <div class="card-columns">
        <?php $produtos = $listarTodos();
            foreach ($produtos as $produto):
        ?>
    </div>
<div class="card">
    <img src="<?php echo $produto['foto'] ?>" alt=" <?php echo $produto['produto']?>" class="card-img-top">
</div>
    <div class="card-body">
        <h4 class="card-title text-center"><?php echo $produto['produto']?></h4>
        <h5 class="card-text text-danger text-center"> R$ <?php echo number_format($produto['preco'],2,",",".")?></h5>

        <a href="" class="btn btn-success btn-block">
            <i class="fa fa-shopping-cart">adicionar ao carrinho</i>
        </a>
    </div>
<?php endforeach;?>
</div>
</body>
</html>