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
                'group' => 'settings',
            ],
            [
                'key' => 'country',
                'value' => 'Nepal',
                'type' => 'text',
                'group' => 'settings',
            ],
            [
                'key' => 'favicon',
                'value' => url('front/images/favicon.png'),
                'type' => 'image',
                'group' => 'settings',
            ],
            [
                'key' => 'logo',
                'value' => url('front/images/logo-small.png'),
                'type' => 'image',
                'group' => 'settings',
            ],
            [
                'key' => 'footerLogo',
                'value' => url('front/images/logo.png'),
                'type' => 'image',
                'group' => 'settings',
            ],
            [
                'key' => 'address',
                'value' => 'restoration nepal',
                'type' => 'text',
                'group' => 'settings',
            ],
            [
                'key' => 'phone',
                'value' => '002400',
                'type' => 'text',
                'group' => 'settings',
            ],
            [
                'key' => 'email',
                'value' => 'email@email.com',
                'type' => 'email',
                'group' => 'settings',
            ],
            [
                'key' => 'facebook',
                'value' => 'https://www.facebook.com',
                'type' => 'url',
                'group' => 'settings',
            ],
            [
                'key' => 'twitter',
                'value' => 'https://www.twitter.com',
                'type' => 'url',
                'group' => 'settings',
            ],
            [
                'key' => 'instagram',
                'value' => 'https://www.instagram.com',
                'type' => 'url',
                'group' => 'settings',
            ],
            [
                'key' => 'youtube',
                'value' => 'https://www.youtube.com',
                'type' => 'url',
                'group' => 'settings',
            ],
            [
                'key' => 'metaDescription',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group' => 'settings',
            ],
            [
                'key' => 'footerText',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group' => 'settings',
            ],  [
                'key' => 'map',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group' => 'settings',
            ],

            //message from director start
            [
                'key' => 'header',
                'value' => 'restoration Nepal',
                'type' => 'text',
                'group' => 'messageFromDirector'
            ],
            [
                'key' => 'description',
                'value' => 'restoration Nepal',
                'type' => 'textarea',
                'group' => 'messageFromDirector'
            ],
            [
                'key' => 'directorLogo',
                'value' => url('front/images/business.jpg'),
                'type' => 'image',
                'group' => 'messageFromDirector'
            ],
            [
                'key' => 'directorLogo1',
                'value' => url('front/images/business-1.jpg'),
                'type' => 'image',
                'group' => 'messageFromDirector'
            ],
            [
                'key' => 'signature',
                'value' => url('front/images/signature.png'),
                'type' => 'image',
                'group' => 'messageFromDirector'
            ],
            [
                'key' => 'founder',
                'value' => 'Biren Sunuwar',
                'type' => 'text',
                'group' => 'messageFromDirector'
            ],
//progress seeder
            [
                'key' => 'header',
                'value' => 'Our Business Growth is Really Incredible!',
                'type' => 'text',
                'group' => 'progress'
            ],
            [
                'key' => 'description',
                'value' => 'Duis sed odio sit amet nibh vulputate cursus a sit ame acmsan ipsuy veli Nam nec tellus a odio Duis sed odio sit ai nibh vulputate cursus a sit ame.',
                'type' => 'textarea',
                'group' => 'progress'
            ],
            [
                'key' => 'background1',
                'value' => url('front/images/icon-3.png'),
                'type' => 'image',
                'group' => 'progress'
            ],
            [
                'key' => 'background2',
                'value' => url('front/images/icon-1.png'),
                'type' => 'image',
                'group' => 'progress'
            ],
            [
                'key' => 'background3',
                'value' => url('front/images/icon-2.png'),
                'type' => 'image',
                'group' => 'progress'
            ],
            [
                'key' => 'image1',
                'value' => url('front/images/progress-1.png'),
                'type' => 'image',
                'group' => 'progress'
            ],
            [
                'key' => 'image2',
                'value' => url('front/images/progress-2.png'),
                'type' => 'image',
                'group' => 'progress'
            ],
            [
                'key' => 'image3',
                'value' => url('front/images/progress-3.png'),
                'type' => 'image',
                'group' => 'progress'
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
