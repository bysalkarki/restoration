<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public  $name, $value, $type,$option;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value,Array $option, $type = 'text')
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->option = $option;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
