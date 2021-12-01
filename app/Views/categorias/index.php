<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php echo anchor(base_url('categoriaController/create'), 'Nova Categoria', ['class' => 'btn btn-success mb-4']) ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome Categoria</td>
                    <td>Descrição</td>
                    <td colspan="3" class="text-center">Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria): ?>
                <tr>
                    <td><?php echo $categoria['id'] ?></td>
                    <td><?php echo $categoria['nome'] ?></td>
                    <td><?php echo $categoria['descricao'] ?></td>
                    <td class="text-center p-0 align-middle">
                    <?php echo anchor('CategoriaController/edit/'.$categoria['id'], 'Editar', ['class' => 'btn btn-success']); ?>
                    </td>
                    -
                    <td class="text-center p-0 align-middle">
                    <?php echo anchor('CategoriaController/delete/'.$categoria['id'], 'Excluir', ['class' => 'btn btn-danger']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <a class="btn btn-secondary" href="/home">Voltar</a>
</div>
</body>
</html>
