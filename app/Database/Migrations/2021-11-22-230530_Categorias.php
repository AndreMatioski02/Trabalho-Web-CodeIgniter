<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{

    public function up()
    {        
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unique' => true,
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => 500
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
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('categoria', TRUE);
        
    }

    public function down()
    {
        $this->forge->dropTable('categoria', TRUE);
    }
}