<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::factory()->count(4)->create([
            'type'=>'progress'
        ]);
        Counter::factory()->count(4)->create([
            'type'=>'counter'
        ]);
    }
}
