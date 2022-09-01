<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'contact' => [
                'type'       => 'VARCHAR',
                'constraint' => '13',
            ],
            'location' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'selected_products' => [
                'type'       => 'TEXT',
            ],
            'comment' => [
                'type'       => 'TEXT',
            ],
            'created_at datetime default current_timestamp',
            'updated_on datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}