<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subjects extends Migration
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
            'class_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'subject' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'created_at datetime default current_timestamp',
            'updated_on datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('class_id', 'class_level', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('subjects');
    }

    public function down()
    {
        $this->forge->dropTable('subjects');
    }
}
