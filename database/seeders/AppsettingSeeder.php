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
                'group'=>'settings',
            ],
            [
                'key' => 'country',
                'value' => 'Nepal',
                'type' => 'text',
                'group'=>'settings',
            ],
            [
                'key' => 'favicon',
                'value' => 'https://image.shutterstock.com/image-vector/y-letter-based-app-icon-260nw-1997950790.jpg',
                'type' => 'image',
                'group'=>'settings',
            ],
            [
                'key' => 'logo',
                'value' => 'https://image.shutterstock.com/image-vector/y-letter-based-app-icon-260nw-1997950790.jpg',
                'type' => 'image',
                'group'=>'settings',
            ],
            [
                'key' => 'footerLogo',
                'value' => 'https://image.shutterstock.com/image-vector/y-letter-based-app-icon-260nw-1997950790.jpg',
                'type' => 'image',
                'group'=>'settings',
            ],
            [
                'key' => 'address',
                'value' => 'restoration nepal',
                'type' => 'text',
                'group'=>'settings',
            ],
            [
                'key' => 'phone',
                'value' => '002400',
                'type' => 'text',
                'group'=>'settings',
            ],
            [
                'key' => 'email',
                'value' => 'email@email.com',
                'type' => 'email',
                'group'=>'settings',
            ],
            [
                'key' => 'facebook',
                'value' => 'https://www.facebook.com',
                'type' => 'url',
                'group'=>'settings',
            ],
            [
                'key' => 'twitter',
                'value' => 'https://www.twitter.com',
                'type' => 'url',
                'group'=>'settings',
            ],
            [
                'key' => 'instagram',
                'value' => 'https://www.instagram.com',
                'type' => 'url',
                'group'=>'settings',
            ],
            [
                'key' => 'youtube',
                'value' => 'https://www.youtube.com',
                'type' => 'url',
                'group'=>'settings',
            ],
            [
                'key' => 'metaDescription',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group'=>'settings',
            ],
            [
                'key' => 'footerText',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group'=>'settings',
            ],
            [
                'key' => 'header',
                'value' => 'restoration Nepal',
                'type' => 'text',
                'group'=>'messageFromDirector'
            ],
            [
                'key' => 'description',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group'=>'messageFromDirector'
            ],
            [
                'key' => 'directorLogo',
                'value' => 'https://image.shutterstock.com/image-vector/y-letter-based-app-icon-260nw-1997950790.jpg',
                'type' => 'image',
                'group'=>'messageFromDirector'
            ],
            [
                'key' => 'directorLogo1',
                'value' => 'https://image.shutterstock.com/image-vector/y-letter-based-app-icon-260nw-1997950790.jpg',
                'type' => 'image',
                'group'=>'messageFromDirector'
            ],
            [
                'key' => 'signature',
                'value' => 'https://image.shutterstock.com/image-vector/y-letter-based-app-icon-260nw-1997950790.jpg',
                'type' => 'image',
                'group'=>'messageFromDirector'
            ],

        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appsettings')->truncate();
        DB::table('appsettings')->insert($this->getKeyValues());
    }
}
