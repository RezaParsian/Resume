<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Mobile extends Component
{
    public $img,$phone,$zindex;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img,$phone="android",$zindex="0")
    {
        $this->img=$img;
        $this->phone=$phone;
        $this->zindex=$zindex;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.mobile');
    }
}
