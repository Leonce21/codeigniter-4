<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Passwordresettoken extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                
            ],
            'created_at timestamp default current_timestamp'
        ]);
       
        $this->forge->createTable('password_reset_token');
    }

    public function down()
    {
        $this->forge->dropTable('password_reset_token');
    }
}
