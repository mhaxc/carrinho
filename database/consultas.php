<?php
declare(strict_types=1);
    /**
     * @return array|null
     */
 $listarTodos = function()use ($conn):?array {
  $sql = "select * from produtos";
        $result = mysqli_query($conn,$sql);

        $retorno =[];
            while ($row=mysqli_fetch_assoc($result)){
            $retorno[]= $row;
        }
        return $retorno;
};

    $pegarProdutoPorId=function(int $id)use ($conn): ?array{
    $sql = "select * from produtos where id = $id";

    $result=mysqli_query($conn,$sql);

    $row = $result === false ? null : mysqli_fetch_assoc($result);

    return  $row;

};

/**
 * @param $conn
 * @return array|null
 */
/*function listarTodos($conn):?array{
    $sql = "select * from produtos";
    $result = mysqli_query($conn,$sql);

    $retorno=[];
    while ($row = mysqli_fetch_assoc($result)){
        $retorno[]= $row;
        }
     return $retorno;

}*/