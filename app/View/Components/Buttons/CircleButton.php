<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class CircleButton extends Component
{
    public $size;
    public $color;
    public $ico;
    public $id;
    public $class;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size = '', $color = 'btn-primary', $ico = '', $id = '', $class = '', $link = '#')
    {
        $this->size     = $size;
        $this->color    = $color;
        $this->ico      = $ico;
        $this->id       = $id;
        $this->class    = $class;
        $this->link     = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.circle-button');
    }
}
