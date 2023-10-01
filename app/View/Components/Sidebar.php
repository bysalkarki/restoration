<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
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
            //AppSettings
            [
                'title' => 'contact',
                'icon' => 'fas fa-phone',
                'href' => route('contact.index'),
                'child' => null,
            ],
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

            //features (extra)
            [
                'title' => 'feature',
                'icon' => 'fas fa-image',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('extra.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('extra.create'),
                    ]
                ]
            ],
            //partner
            [
                'title' => 'Partner',
                'icon' => 'fas fa-handshake',
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
                'icon' => 'fas fa-list-ul',
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
                'title' => 'Blog/Project',
                'icon' => 'fas fa-archive',
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
                'icon' => 'fas fa-calendar ',
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
                'icon' => 'fas fa-images',
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
            //Menu
            [
                'title' => 'menu',
                'icon' => 'fas fa-list',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('menu.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('menu.create'),
                    ]
                ]
            ],

            //Video
            [
                'title' => 'video',
                'icon' => 'fas fa-video',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('video.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('video.create'),
                    ]
                ]
            ],

            //testimonial
            [
                'title' => 'testimonial',
                'icon' => 'fas fa-quote-left',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('testimonial.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('testimonial.create'),
                    ]
                ]
            ],

            //testimonial
            [
                'title' => 'counter',
                'icon' => 'fas fa-quote-left',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('counter.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('counter.create'),
                    ]
                ]
            ],
            //User
            [
                'title' => 'user',
                'icon' => 'fas fa-user',
                'href' => '#',
                'child' => [
                    [
                        'title' => 'List',
                        'icon' => 'fas fa-list',
                        'href' => route('user.index'),
                    ],
                    [
                        'title' => 'create',
                        'icon' => 'fas fa-store ',
                        'href' => route('user.create'),
                    ]
                ]
            ],
            [
                'title' => 'director',
                'icon' => 'fas fa-folder',
                'href' => route('appsetting.index',['type'=>'messageFromDirector']),
                'child' => null,
            ],
            [
                'title' => 'progress',
                'icon' => 'fas fa-folder',
                'href' => route('appsetting.index',['type'=>'progress']),
                'child' => null,
            ],
            //AppSettings
            [
                'title' => 'Setting',
                'icon' => 'fas fa-cog',
                'href' => route('appsetting.index',['type'=>'settings']),
                'child' => null,
            ]
        ];
    }
}
