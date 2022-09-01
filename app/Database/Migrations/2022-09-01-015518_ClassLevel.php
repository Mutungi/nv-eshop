<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClassLevel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'level' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'created_at datetime default current_timestamp',
            'updated_on datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('class_level');
    }

    public function down()
    {
        $this->forge->dropTable('class_level');
    }
}
