<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Nova Categoria</title>
</head>
<body>
<div class="container">
    
    <?php echo form_open('CategoriaController/store') ?>
        <h3 class="mt-5 mb-5">Nova Categoria</h3>
        <div class="form-group">
            <label for="nome">Categoria</label>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" type="text" name="descricao" id="descricao">
        </div>
        <a class="btn btn-secondary" href="/categorias">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-primary">
    <?php echo form_close(); ?>

</div>
</body>
</html>
