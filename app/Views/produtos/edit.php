<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar produto</title>
</head>
<body>
    <?php echo form_open('ProdutoController/store') ?>
    <form action="edit.php?id=<?php echo $produtos['id'];?>" id="formAlteraProduto" method="post">
        <div class="container">
            <h3 class="mt-5 mb-5 text-center">Editar Produto</h3>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="produto[nome]" value="<?php echo $produtos['nome']; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputMarca">Marca</label>
                    <input type="text" class="form-control" id="inputMarca" name="produto[marca]" value="<?php echo $produtos['marca']; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputValorCusto">Valor de custo</label>
                    <input type="text" class="form-control" id="inputValorCusto" name="produto[preco_custo]" value="<?php echo $produtos['preco_custo']; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputvalorVenda">Valor de venda</label>
                    <input type="text" class="form-control" id="inputvalorVenda" name="produto[preco_venda]" value="<?php echo $produtos['preco_venda']; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputDescricao">Descrição</label>
                    <input type="text" class="form-control" id="inputDescricao" name="produto[descricao]" value="<?php echo $produtos['descricao']; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                <label for="selectCategoria">Categoria</label>
                    <select type="text" class="form-control" id="selectCategoria" name="produto[categoria_id]">
                        <?php if($categorias) : ?>
                            <?php foreach($categorias as $categoria) :?>
                                <option value="<?php echo $categoria['id']; ?>" <?php if ($produtos['categoria_id'] == $categoria['id']) echo 'selected="select"'; ?>><?php echo $categoria['nome']?></option>
                            <?php endforeach;?>
                        <?php else : ?>
                            <option>Não foi possível obter os dados do banco!</option>	
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-12" style="text-align:right;">
                    <a href="/produtos" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </form>
    <?php echo form_close(); ?>
</body>
</html>
