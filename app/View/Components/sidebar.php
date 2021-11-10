<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    public $sliders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sliders = $this->sidebarData();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    private function sidebarData()
    {
        return [
            [
                'title' => 'Slider',
                'icon' => 'fas fa-image',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('slider.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('slider.create'),
                    ]
                ]
            ],
            [
                'title' => 'Partner',
                'icon' => 'fas fa-image',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('partner.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('partner.create'),
                    ]
                ]
            ],

            //category

            [
                'title' => 'category',
                'icon' => 'fas fa-image',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('category.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('category.create'),
                    ]
                ]
            ],

            //blogs
            [
                'title' => 'blog',
                'icon' => 'fas fa-image',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('blog.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('blog.create'),
                    ]
                ]
            ],
            //Events
            [
                'title' => 'Event',
                'icon' => 'fas fa-image',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('event.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('event.create'),
                    ]
                ]
            ],
            //Teams
            [
                'title' => 'Team',
                'icon' => 'fas fa-users',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('team.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('team.create'),
                    ]
                ]
            ],

            //GAllery
            [
                'title' => 'Gallery',
                'icon' => 'fas fa-users',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('gallery.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('gallery.create'),
                    ]
                ]
            ],
            //AppSettings
            [
                'title' => 'Setting',
                'icon' => 'fas fa-cog',
                'href' => route('appsetting.index'),
                'child' => null,
            ]
        ];
    }
}
