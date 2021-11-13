<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppsettingSeeder extends Seeder
{
    private function getKeyValues()
    {
        return [
            [
                'key' => 'name',
                'value' => 'restoration nepal',
                'type' => 'text',
            ],
            [
                'key' => 'address',
                'value' => 'restoration nepal',
                'type' => 'text',
            ],
            [
                'key' => 'phone',
                'value' => '002400',
                'type' => 'text',
            ],
            [
                'key' => 'email',
                'value' => 'email@email.com',
                'type' => 'email',
            ],
            [
                'key' => 'facebook',
                'value' => 'www.facebook.com',
                'type' => 'url',
            ],
            [
                'key' => 'twitter',
                'value' => 'www.twitter.com',
                'type' => 'url',
            ],
            [
                'key' => 'instagram',
                'value' => 'www.instagram.com',
                'type' => 'url',
            ],
            [
                'key' => 'youtube',
                'value' => 'www.youtube.com',
                'type' => 'url',
            ],
            [
                'key' => 'metaDescription',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
            ],
            [
                'key' => 'location',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
            ]
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appsettings')->insert($this->getKeyValues());
    }
}
