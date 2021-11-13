<?php

namespace App\View\Components\front;

use App\Models\Menu;
use Illuminate\View\Component;

class navbar extends Component
{
    public $navbars;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navbars = $this->getMenus();
    }
    private function getMenus()
    {
        return Menu::published()->orderBy('position')->get();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.navbar');
    }
}
