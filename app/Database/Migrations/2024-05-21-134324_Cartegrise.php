<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cartegrise extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IMNUMERO' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'IMCHASSIS' => [
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
                'unique' => TRUE,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => TRUE,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'null' => FALSE,
            ],
            'NIU' => [
                'type' => 'VARCHAR',
                'null' => FALSE,
            ],
            'IMMODEL' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => FALSE,
            ],
            'IMCYL' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'IMENERGIE' => [
                'type' => 'TINYINT',
                'constraint' => 2,
                'null' => FALSE,
            ],
            'IMPUISSANCE' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'genre' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'marque' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'datecreation' => [
                'type' => 'DATETIME',
                'null' => FALSE,
            ],
        ]);
        $this->forge->addPrimaryKey('IMNUMERO');
        $this->forge->createTable('CARTEGRISE');

        // Add foreign keys
        $this->forge->addforeignkey('genre', 'genrevehicule', 'GVECODE');
        $this->forge->addforeignkey('marque', 'marquevehicule', 'MARQCODE');
    }

    public function down()
    {
        $this->forge->dropTable('CARTEGRISE');
    }
}
