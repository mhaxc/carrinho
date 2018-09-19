<?php include "carrinho/funcoes.php" ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>carrinho</title>
</head>
<body>

<div class="container mt-5">
    <ul class="nav">
        <li class="nav-item" >

            <a href="/carrinho" class="nav-link">Produtos</a>
            <hr>
        </li>

        <li class="nav-item">
            <a href="carrinho.php" class="nav-link">Carrinho</a>
        </li>
    </ul>

<h1 class="display-1">Carrinho</h1>
 <table class="table table-hover table-striped">
<thead>
<tr>
    <th>Foto</th>
    <th>Produto</th>
    <th>Valor</th>
    <th>Descricão</th>

</tr>

</thead>
<tbody>
<?php
$carrinho = getCarrinho();
    if(is_null($carrinho)||count($carrinho) == 0):?>
<tr>
  <td colspan="4" class="bg-info">
      nenhum produto no carrinho
  </td>

</tr>
<?php else:
    foreach ($carrinho as $item):
?>
<tr>
    <td><img src="<?php echo $item['foto']?>" alt="" width="40" ></td>
    <td><h5><?php echo $item['produto']?></h5>
       <small><?php echo($item)['descricao']?> </small>
    </td>
    <td>R$<?php echo number_format($item['preco'],2,",",".")?></td>

    <td>
        <a href="gerenciar_carrinho.php?acao=excluir&id=<?php echo $item['id']?>"class="btn btn-danger">excluir<i class="fa fa-trash"></i></a>
    </td>
</tr>
<?php
    endforeach;
endif;
?>
     <?php if(count($carrinho) > 0): ?>
            <tfoot>
                 <tr>
                     <td colspan="2" class="text-right">
                         Total
                     </td>
                     <td>
                         R$<?php $total = calculaTotal();echo number_format($total,2,",",".")?>
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2" class="text-right">
                        Desconto
                     </td>
                        <td colspan="2">
                         <form action="gerenciar_carrinho.php">
                             <input type="hidden" value="aplicar_desconto" name="acao">
                             <input type="text" name="desconto" class="form-control" style="width: 100px;">
                         </form>
                     </td>
                 </tr>

             </tfoot>
    <?php endif;?>

     </tbody>

 </table>


</div>
</body>
</html>