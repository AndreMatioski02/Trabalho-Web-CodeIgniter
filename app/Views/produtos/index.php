<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php echo anchor(base_url('ProdutoController/create'), 'Novo Produto', ['class' => 'btn btn-success mb-4']) ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Custo</th>
                    <th>Valor de venda</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th colspan="8" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto): ?>
                <tr>
                    <td><?php echo $produto['id'] ?></td>
                    <td><?php echo $produto['nome'] ?></td>
                    <td><?php echo $produto['marca'] ?></td>
                    <td><?php echo $produto['preco_custo'] ?></td>
                    <td><?php echo $produto['preco_venda'] ?></td>
                    <td><?php echo $produto['descricao'] ?></td>
                    <td>
                        <?php foreach($categorias as $categoria): ?> 
                            <?php if($categoria['id'] == $produto['categoria_id']): ?> 
                                <?php echo $categoria['nome']; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </td>
                    <td class="text-center p-0 align-middle">
                    <?php echo anchor('ProdutoController/edit/'.$produto['id'], 'Editar', ['class' => 'btn btn-success']); ?>

                    <?php echo anchor('ProdutoController/delete/'.$produto['id'], 'Excluir', ['class' => 'btn btn-danger']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <a class="btn btn-secondary" href="/home">Voltar</a>
</div>
</body>
</html>
