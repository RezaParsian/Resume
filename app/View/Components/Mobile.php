<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Mobile extends Component
{
    public $img,$phone;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img,$phone="android")
    {
        $this->img=$img;
        $this->phone=$phone;
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
