# Universidade do Contestado | Engenharia de Software
Trabalho realizado para a disciplina de Desenvolvimento Web II

Professor: Emerson Schafhauser

Aluno: André Vinícius Matioski
# CRUD Symfony
Olá! Este é um CRUD (Create, Read, Update e Delete) bastante simples feito com o framework CodeIgniter!
Abaixo, seguem informações para clonagem e configuração do projeto e suas dependências.

# Pré-requisitos:
CodeIgniter 4: https://codeigniter.com/download

Composer ^2;

PHP ^7;

Wamp Server;

MySQL 5.7 (usado neste projeto)

# Instruções de clonagem e configuração
# No terminal (Windows), entre em sua pasta do Wamp (www) e clone o projeto TrabalhoWebM2 com os seguintes comandos:
    cd C:\wamp64\www

    git clone https://github.com/AndreMatioski02/TrabalhoWebM2.git

# O projeto está clonado! Agora, é preciso configurar o acesso ao banco de dados MySQL para que o CRUD funcione:
Abra o arquivo ".env" localizado em "/trabalhowebm2"

Altere os campos para condizer com os seus dados pessoais de acesso ao servidor do MySQL Workbench!

database.default.hostname = "Hostname do seu banco"
database.default.database = "Nome do seu banco (Schema)"
database.default.username = "Nome de usuário do banco"
database.default.password = "Sua senha do banco"

Agora, é preciso criar um novo banco de dados MySQL para o projeto:
    
    Acesse seu banco de dados MySQL Workbench, crie um novo Schema chamado "db_trabalhowebm2"

Confira a criação do banco db_trabalhowebm2 em seu Workbench!

# Com o novo schema criado, crie as tabelas executando as migrations já existentes com o seguinte comando:
    php spark migrate

# Pronto! Seu banco está criado e o projeto está pronto para ser utilizado!
Para iniciar o servidor, execute o seguinte comando no terminal:

    php spark serve

Utilize Ctrl + C para parar o servidor!

Acesse a homepage digitando localhost:8000 na barra de pesquisa do seu navegador. Se tudo correu bem, o CRUD já está 100% funcional.
