<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{

    public $id;

    public $name;

    public $type;
    
    public $disabled;

    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id, $type = "text", $disabled = false, $placeholder = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->disabled = $disabled;
        $this->placeholder = $placeholder;
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
