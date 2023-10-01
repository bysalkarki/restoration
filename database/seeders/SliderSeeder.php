<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            Slider::create([
                'title' => "We’re a Business Adviser that Helps Organisations",
                'description' => "navigate today’s volatile markets, has a strong focus on quality and delivers insights to succeed",
                'image' => url('front/images/content-image-1.png'),
            ]);
       }
    }
}
