<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'class_id' => 1,
                'subject'  => 'English Language & Literature in English',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Mathematics',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Biology',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Physics',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Chemistry',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Geography',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'History & Political Education',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Physical Education',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Technology and Design',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Performing Arts',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Nutrition and Food Technology',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 1,
                'subject'  => 'Art and Design',
                'cost'     => 22000,
                'guide'    => 20000
            ],[
                'class_id' => 2,
                'subject'  => 'English Language & Literature in English',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Mathematics',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Biology',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Physics',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Chemistry',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Physical Education',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Kiswahili',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Technology and Design',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Nutrition and Food Technology',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Art and Design',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 2,
                'subject'  => 'Agriculture',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 3,
                'subject'  => 'Intergrate Science',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 3,
                'subject'  => 'Social Studies',
                'cost'     => 25000,
                'guide'    => 20000
            ],
            [
                'class_id' => 4,
                'subject'  => 'Mathematics',
                'cost'     => 28000,
                'guide'    => 20000
            ],
            [
                'class_id' => 4,
                'subject'  => 'Integrated Science',
                'cost'     => 22000,
                'guide'    => 20000
            ],
            [
                'class_id' => 5,
                'subject'  => 'Mathematics',
                'cost'     => 28000,
                'guide'    => 20000
            ],
            [
                'class_id' => 5,
                'subject'  => 'Social Studies',
                'cost'     => 22000,
                'guide'    => 20000
            ],
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
