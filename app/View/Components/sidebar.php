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
            ]
        ];
    }
}
