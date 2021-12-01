<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Novo Produto</title>
</head>
<body>
<div class="container">
    
    <?php echo form_open('ProdutoController/store') ?>
        <h3 class="mt-5 mb-5">Novo Produto</h3>
        <div class="form-group">
            <label for="nome">Nome do Produto</label>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="form-group">
            <label for="marca">Marca do Produto</label>
            <input class="form-control" type="text" name="marca" id="marca">
        </div>
        <div class="form-group">
            <label for="custo">Valor de custo</label>
            <input class="form-control" type="text" name="preco_custo" id="preco_custo">
        </div>
        <div class="form-group">
            <label for="venda">Valor de venda</label>
            <input class="form-control" type="text" name="preco_venda" id="preco_venda">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" type="text" name="descricao" id="descricao">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control" name="categoria_id">
                <?php foreach($categorias as $categoria): ?> 
                    <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome']; ?></option>
                <?php endforeach; ?>
                
            </select>
        </div>
        <a class="btn btn-secondary" href="/produtos">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-primary">
    <?php echo form_close(); ?>

</div>
</body>
</html>
