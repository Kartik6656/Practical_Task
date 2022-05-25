<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term;

class CreateTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = [
            [
                'id' => 1,
                'name' => 'Term 1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Term 2',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Term 3',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Term 4',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'Term 5',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        Term::insert($terms);
    }
}
