<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unique' => true,
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'marca' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'preco_custo' => [
                'type' => 'FLOAT'
            ],
            'preco_venda' => [
                'type' => 'FLOAT'
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => 500
            ],
            'categoria_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        
        $this->forge->addField('CONSTRAINT FOREIGN KEY (categoria_id) REFERENCES categoria(id)');
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('produto', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('produto', TRUE);
    }
}