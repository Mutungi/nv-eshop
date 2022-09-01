<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClasslevelSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['level' => 'Senior One'],
            ['level' => 'Senior Two'],
            ['level' => 'Primary Five'],
            ['level' => 'Primary Six'],
            ['level' => 'Primary Seven'],
        ];

        // Simple Queries
       // $this->db->query('INSERT INTO class_level (level) VALUES(:level)', $data);

        // Using Query Builder
        $this->db->table('class_level')->insertBatch($data);
    }
}
