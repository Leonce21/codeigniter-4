<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Demande extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => FALSE,
            ],
            'prenom' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => FALSE,
            ],
            'types' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => FALSE,
            ],
            'NIU' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => FALSE,
                'unique' => TRUE,
            ],
            'Reference' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
                'unique' => TRUE,
            ],
            'Montant_timbre' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'Montant_fisc' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'Statut' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'Operation' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'Cartegrise' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
            'Dte_naissance' => [
                'type' => 'DATE',
                'null' => FALSE,
            ],
            'Lieu_naissance' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ],
            'Phone' => [
                'type' => 'INT',
                'null' => FALSE,
            ],
        ]);
        $this->forge->addPrimaryKey('ID');
        $this->forge->createTable('demande');

       // Add foreign keys
       $this->forge->addforeignkey('Statut', 'statut', 'STNUMERO');
       $this->forge->addforeignkey('Operation', 'operation', 'Id');
       $this->forge->addforeignkey('Cartegrise', 'CARTEGRISE', 'IMNUMERO');
    }

    public function down()
    {
        $this->forge->dropTable('demande');
    }
}
