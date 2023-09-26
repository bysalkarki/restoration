<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = (new Category())->getType();
        foreach($types as $type){
            Category::create(
                [
                    'title'=>strtolower($type),
                    'type'=>strtoupper($type),
                    'publishStatus'=>true
                ]
            );
        }
    }
}
