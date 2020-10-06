<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public $datta;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($datta)
    {
        //

        $datta = substr($datta, -(strlen($datta)-7));
        $datta2 = explode('/', $datta);
        $dat = array_shift($datta2);
        // dd($datta2);
        
        $this->datta = $datta2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumbs');
    }
}
